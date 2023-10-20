<?php

namespace Vanengers\GpWebtechApiPhpClient\Tests\Authorization;

use DoclerLabs\ApiClientException\UnauthorizedResponseException;
use Exception;
use GuzzleHttp\Client;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use Vanengers\GpWebtechApiPhpClient\Client\GPWebTechApiClient;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\LoginCheckPostRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\LoginCheckPostRequestBody;

class ConnectionTest extends TestCase
{
    private \Vanengers\GpWebtechApiPhpClient\Client\GPWebTechApiClient $client;

    private string $email = 'vanengers@gmail.com';
    private string $password = 'Pyramid60!';

    private $someOldToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2OTc3NDgxNjksImV4cCI6MTY5Nzc1MTc2OSwicm9sZXMiOlsiUk9MRV9VU0VSIl0sImVtYWlsIjoidmFuZW5nZXJzQGdtYWlsLmNvbSJ9.WWtddNW9tIgifPJuWcCAB2-qMjMNxa9YYeXddOK1XhnhmBTFl0TvwZc_PuRecckldJF0WToFSTFDEpNpbmEqg8qLscKeXLP62wkvYlAwdIkIfMxdsp7LIivEOhr_5kea0aEP1Jnq27D2ReFUu4W7pHTdelNGOTDaSYhHond-2sM99_keuZNqfBqVDwQYBvkzRSAAsT_jGs2T64Meajsu4vBGmzF8mZkT_FCpYqJOfhGe_s4DePnhNQ9A1qPcuHcSXU-ZvN2tOevCkpe2msWM6YhWd6JVl0_WrID8tUr6WK9Ya51Z8IF-jkKtTof4In-e2HbGt7rBUZ2DGGB1d8SgAQ';

    public function setUp(): void
    {
        $this->client = new GPWebTechApiClient(
            $this->email, $this->password, 'http://localhost:8000'
        );
    }

    private function login()
    {
        $response = $this->client->login_check_post(new LoginCheckPostRequest(new LoginCheckPostRequestBody($this->email, $this->password)));
        return $response->getToken();
    }


    public function testCanLogin()
    {
        $response = $this->client->login_check_post(new LoginCheckPostRequest(new LoginCheckPostRequestBody($this->email, $this->password)));
        $this->assertNotEmpty($response->getToken());
    }

    public function testCanLoginShouldResultIn401()
    {
        $this->expectException(UnauthorizedResponseException::class);

        $response = $this->client->login_check_post(new LoginCheckPostRequest(new LoginCheckPostRequestBody($this->email, $this->password.'blah')));
        $this->assertNotEmpty($response->getToken());
    }

    /*public function testCanRetrieveUsers()
    {
        $response = $this->client->listUsers(new ListUsersRequest($this->login()));
        $this->assertTrue($response->getData()->count() > 0);
    }

    public function testCanCreateUser()
    {
        $user = new CreateUser();
        $user->setPassword($this->password);
        $user->setRoles(['ROLE_ADMIN']);
        $user->setEmail('test@testerdetest'.rand(88,2345234324).'test.nl');
        $response = $this->client->createUser(new CreateUserRequest($user, $this->login()));
        $this->assertEquals($response->getEmail(), $user->getEmail());
    }*/

}