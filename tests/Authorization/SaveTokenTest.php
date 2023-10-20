<?php

namespace Vanengers\GpWebtechApiPhpClient\Tests\Authorization;

use PHPUnit\Framework\TestCase;
use Vanengers\GpWebtechApiPhpClient\Client\GPWebTechApiClient;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\ListUsersRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\LoginCheckPostRequest;

class SaveTokenTest extends TestCase
{
    private \Vanengers\GpWebtechApiPhpClient\Client\GPWebTechApiClient $client;

    private string $email = 'vanengers@gmail.com';
    private string $password = 'Pyramid60!';

    private $someOldToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2OTc3NDgxNjksImV4cCI6MTY5Nzc1MTc2OSwicm9sZXMiOlsiUk9MRV9VU0VSIl0sImVtYWlsIjoidmFuZW5nZXJzQGdtYWlsLmNvbSJ9.WWtddNW9tIgifPJuWcCAB2-qMjMNxa9YYeXddOK1XhnhmBTFl0TvwZc_PuRecckldJF0WToFSTFDEpNpbmEqg8qLscKeXLP62wkvYlAwdIkIfMxdsp7LIivEOhr_5kea0aEP1Jnq27D2ReFUu4W7pHTdelNGOTDaSYhHond-2sM99_keuZNqfBqVDwQYBvkzRSAAsT_jGs2T64Meajsu4vBGmzF8mZkT_FCpYqJOfhGe_s4DePnhNQ9A1qPcuHcSXU-ZvN2tOevCkpe2msWM6YhWd6JVl0_WrID8tUr6WK9Ya51Z8IF-jkKtTof4In-e2HbGt7rBUZ2DGGB1d8SgAQ';

    private $savedToken = '';

    public function saveTokenCallableTest($token)
    {
        $this->savedToken = $token;
    }

    public function setUp(): void
    {
        $this->client = new GPWebTechApiClient(
            $this->email, $this->password, 'http://localhost:8000', $this->someOldToken, [$this, 'saveTokenCallableTest']
        );
    }

    private function login()
    {
        $response = $this->client->login_check_post(new LoginCheckPostRequest(new LoginCheckPostRequestBody($this->email, $this->password)));
        return $response->getToken();
    }

    public function testCanAssignLocalMethodWithToken()
    {
        $response = $this->client->listUsers(new ListUsersRequest());
        // this regenerated the token, bevause of the expired token, and then triggers the setToken callable

        $this->assertNotEmpty($this->savedToken);
    }

    public function testCanLoginWithSavedTokenAndDoesNotRelogin()
    {
        $response = $this->client->listUsers(new ListUsersRequest());
        // This trigger the use of the someOldToken, reLogin and trigger SaveToken.. which will have a new updated Token.

        $this->assertNotEmpty($this->savedToken);

        // We then create a new Client based on the saved Token.. AS IF YOU WERE opening the Client at a later time.
        $this->client = new GPWebTechApiClient(
            $this->email, $this->password, 'http://localhost:8000', $this->savedToken, [$this, 'saveTokenCallableTest']
        );

        $response = $this->client->listUsers(new ListUsersRequest());
        // We expect that the saved token is used, and not the someOldToken, which would trigger a reLogin.

        $this->assertNotEmpty($response->getData()->toArray());
        $this->assertEquals($this->savedToken, $this->client->getToken());
    }

    public function testCanLoginWithEmptySavedTokenAndDoesLogin()
    {
        $this->assertEmpty($this->savedToken);

        // We then create a new Client based on the saved Token.. AS IF YOU WERE opening the Client at a later time.
        $this->client = new GPWebTechApiClient(
            $this->email, $this->password, 'http://localhost:8000', '', [$this, 'saveTokenCallableTest']
        );

        $response = $this->client->listUsers(new ListUsersRequest());
        // We expect that the saved token is used, and not the someOldToken, which would trigger a reLogin.

        $this->assertNotEmpty($response->getData()->toArray());
        $this->assertNotEmpty($this->savedToken);
        $this->assertEquals($this->savedToken, $this->client->getToken());
    }
}