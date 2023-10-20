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
use Vanengers\GpWebtechApiPhpClient\Generated\ApiClient;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\LoginCheckPostRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\LoginCheckPostRequestBody;
use Vanengers\GpWebtechApiPhpClient\Generated\ServiceProvider;

class GPWebTechApiClient extends ApiClient
{
    /** @var string $username */
    private $username;

    /** @var string $password */
    private $password;

    /** @var callable|null $saveToken */
    private $saveToken;

    /**
     * @param $username
     * @param $password
     * @param ContainerInterface $container
     * @param $base_uri
     * @param $token
     * @param callable|null $saveToken
     */
    public function __construct($username, $password, $base_uri = '', $token = null, callable $saveToken = null)
    {
        $guzzle = new Client([
            'base_uri' => !empty($base_uri) ? $base_uri : 'https://api.gpwebtech.nl/'
        ]);
        $this->username = $username;
        $this->password = $password;

        parent::__construct($guzzle);

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

        if ($this->saveToken) {
            try {
                $saveToken = $this->saveToken;
                $saveToken($this->getToken());
            } catch (Throwable $e) {
                // the actual callable call can be undefined, we don't know anything.
                // So the actual callback can throw an exception, we don't care, just don't save the token externally
            }
        }
    }
}