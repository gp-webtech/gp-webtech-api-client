<?php

namespace Vanengers\GpWebtechApiPhpClient\Client;

use DoclerLabs\ApiClientException\UnauthorizedResponseException;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Pimple\Container;
use Pimple\Psr11\Container as Psr11Container;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Throwable;
use Vanengers\GpWebtechApiPhpClient\Generated\src\Request\ListUsersRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\src\Request\LoginCheckPostRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\src\Schema\ListUsersResponseBody;
use Vanengers\GpWebtechApiPhpClient\Generated\src\Schema\LoginCheckPostRequestBody;
use Vanengers\GpWebtechApiPhpClient\Generated\src\ServiceProvider;

class GPWebTechApiClient extends \Vanengers\GpWebtechApiPhpClient\Generated\src\GpWebTechApiClient
{
    /** @var mixed $token */
    private $token;

    /** @var Client $guzzle */
    private $guzzle;

    /** @var string $username */
    private $username;

    /** @var string $password */
    private $password;
    /** @var callable|null $saveToken */
    private $saveToken;

    /**
     * @param $username
     * @param $password
     * @param $base_uri
     * @return self
     * @author George van Engers <george@dewebsmid.nl>
     * @since 20-10-2023
     */
    public static function create($username, $password, $base_uri = '', $token = null, callable $saveToken = null)
    {
        $pimpleContainer = new Container();
        $container       = new Psr11Container($pimpleContainer);
        $serviceProvider = new ServiceProvider();
        $serviceProvider->register($pimpleContainer);

        return new self($username, $password, $container, $base_uri, $token, $saveToken);
    }

    private function __construct($username, $password, ContainerInterface $container, $base_uri = '', $token = null, callable $saveToken = null)
    {
        $guzzle = new Client([
            'base_uri' => !empty($base_uri) ? $base_uri : 'https://api.gpwebtech.nl/'
        ]);
        $this->username = $username;
        $this->password = $password;

        parent::__construct($guzzle, $container);

        $this->token = $token;
        $this->setToken(!is_null($token)?$token:'');

        $this->saveToken = $saveToken;

        if (empty($token)) {
            $this->login();
        }
    }

    /**
     * @return void
     * @author George van Engers <george@dewebsmid.nl>
     * @since 20-10-2023
     */
    public function login()
    {
        $result = $this->login_check_post(
            new LoginCheckPostRequest(
                new LoginCheckPostRequestBody($this->username, $this->password)
            )
        );

        $this->setToken($result->getToken());
        $saveToken = $this->saveToken;

        try {
            $saveToken($this->getToken());
        }
        catch (Throwable $e) {
            // the actual callable call can be undefined, we don't know anything.
            // So the actual callback can throw an exception, we don't care, just don't save the token externally
        }
    }
}