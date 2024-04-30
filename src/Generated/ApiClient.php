<?php

namespace VanengersGpWebtechApiPhpClient;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Container\ContainerInterface;
use VanengersGpWebtechApiPhpClient\Request\Mapper\RequestMapperInterface;
use VanengersGpWebtechApiPhpClient\Response\ResponseHandler;
use VanengersGpWebtechApiPhpClient\Request\RequestInterface;
use Pimple\Container as PimpleContainer;
use Pimple\Psr11\Container as Psr11PimpleContainer;
use Vanengers\GpWebtechApiPhpClient\Generated\ServiceProvider;
use VanengersGpWebtechApiPhpClient\Request\ListConfigsRequest;
use DoclerLabs\ApiClientException\UnauthorizedResponseException;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\ListConfigsResponseBodyMapper;
use VanengersGpWebtechApiPhpClient\Schema\ListConfigsResponseBody;
use Psr\Container\NotFoundExceptionInterface;
use Psr\Container\ContainerExceptionInterface;
use VanengersGpWebtechApiPhpClient\Request\CreateConfigRequest;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\ListConfigMapper;
use VanengersGpWebtechApiPhpClient\Schema\ListConfig;
use VanengersGpWebtechApiPhpClient\Request\GetConfigRequest;
use VanengersGpWebtechApiPhpClient\Request\UpdateConfigRequest;
use VanengersGpWebtechApiPhpClient\Request\DeleteConfigRequest;
use VanengersGpWebtechApiPhpClient\Serializer\ContentType\ContentTypeSerializerInterface;
use VanengersGpWebtechApiPhpClient\Request\ListUsersRequest;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\ListUsersResponseBodyMapper;
use VanengersGpWebtechApiPhpClient\Schema\ListUsersResponseBody;
use VanengersGpWebtechApiPhpClient\Request\CreateUserRequest;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\ListUserMapper;
use VanengersGpWebtechApiPhpClient\Schema\ListUser;
use VanengersGpWebtechApiPhpClient\Request\GetUserRequest;
use VanengersGpWebtechApiPhpClient\Request\UpdateUserRequest;
use VanengersGpWebtechApiPhpClient\Request\DeleteUserRequest;
use VanengersGpWebtechApiPhpClient\Request\UpdateUserPasswordRequest;
use VanengersGpWebtechApiPhpClient\Request\CheckTokenRequest;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\CheckTokenResponseObjectMapper;
use VanengersGpWebtechApiPhpClient\Schema\CheckTokenResponseObject;
use VanengersGpWebtechApiPhpClient\Request\ListLedgersRequest;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\ListLedgersResponseBodyMapper;
use VanengersGpWebtechApiPhpClient\Schema\ListLedgersResponseBody;
use VanengersGpWebtechApiPhpClient\Request\CreateLedgerRequest;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\ListLedgerMapper;
use VanengersGpWebtechApiPhpClient\Schema\ListLedger;
use VanengersGpWebtechApiPhpClient\Request\GetLedgerRequest;
use VanengersGpWebtechApiPhpClient\Request\UpdateLedgerRequest;
use VanengersGpWebtechApiPhpClient\Request\DeleteLedgerRequest;
use VanengersGpWebtechApiPhpClient\Request\LoginCheckPostRequest;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\LoginCheckPostResponseBodyMapper;
use VanengersGpWebtechApiPhpClient\Schema\LoginCheckPostResponseBody;

abstract class ApiClient
{
    private ClientInterface $client;
    private ContainerInterface $container;
    private ?string $bearerToken = '';
    /**
     * @param ClientInterface $client
    */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
        $pimple = new PimpleContainer();
        $this->container = new Psr11PimpleContainer($pimple);
        $serviceProvider = new ServiceProvider();
        $serviceProvider->register($pimple);
    }
    /**
     * @param RequestInterface $request
     * @return ResponseInterface
    */
    public function sendRequest(RequestInterface $request) : ResponseInterface
    {
        return $this->client->sendRequest($this->container->get(RequestMapperInterface::class)->map($request));
    }
    public function getToken()
    {
        return $this->bearerToken;
    }
    public function setToken(string $bearerToken)
    {
        $this->bearerToken = $bearerToken;
    }
    private function init()
    {
        if (empty($this->bearerToken)) {
            $this->login();
        }
    }
    /**
     * listConfigs
     * @param ListConfigsRequest $request
     * @return ListConfigsResponseBody
     * @throws UnauthorizedResponseException
     */
    public function listConfigs(ListConfigsRequest $request) : ListConfigsResponseBody
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $this->container->get(ListConfigsResponseBodyMapper::class)->toSchema($response);
    }
    /**
     * createConfig
     * @param CreateConfigRequest $request
     * @return ListConfig
     * @throws UnauthorizedResponseException
     */
    public function createConfig(CreateConfigRequest $request) : ListConfig
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $this->container->get(ListConfigMapper::class)->toSchema($response);
    }
    /**
     * getConfig
     * @param GetConfigRequest $request
     * @return ListConfig
     * @throws UnauthorizedResponseException
     */
    public function getConfig(GetConfigRequest $request) : ListConfig
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $this->container->get(ListConfigMapper::class)->toSchema($response);
    }
    /**
     * updateConfig
     * @param UpdateConfigRequest $request
     * @return ListConfig
     * @throws UnauthorizedResponseException
     */
    public function updateConfig(UpdateConfigRequest $request) : ListConfig
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $this->container->get(ListConfigMapper::class)->toSchema($response);
    }
    /**
     * deleteConfig
     * @param DeleteConfigRequest $request
     * @return bool
     * @throws UnauthorizedResponseException
     */
    public function deleteConfig(DeleteConfigRequest $request) : bool
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $response[ContentTypeSerializerInterface::LITERAL_VALUE_KEY];
    }
    /**
     * listUsers
     * @param ListUsersRequest $request
     * @return ListUsersResponseBody
     * @throws UnauthorizedResponseException
     */
    public function listUsers(ListUsersRequest $request) : ListUsersResponseBody
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $this->container->get(ListUsersResponseBodyMapper::class)->toSchema($response);
    }
    /**
     * createUser
     * @param CreateUserRequest $request
     * @return ListUser
     * @throws UnauthorizedResponseException
     */
    public function createUser(CreateUserRequest $request) : ListUser
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $this->container->get(ListUserMapper::class)->toSchema($response);
    }
    /**
     * getUser
     * @param GetUserRequest $request
     * @return ListUser
     * @throws UnauthorizedResponseException
     */
    public function getUser(GetUserRequest $request) : ListUser
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $this->container->get(ListUserMapper::class)->toSchema($response);
    }
    /**
     * updateUser
     * @param UpdateUserRequest $request
     * @return ListUser
     * @throws UnauthorizedResponseException
     */
    public function updateUser(UpdateUserRequest $request) : ListUser
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $this->container->get(ListUserMapper::class)->toSchema($response);
    }
    /**
     * deleteUser
     * @param DeleteUserRequest $request
     * @return bool
     * @throws UnauthorizedResponseException
     */
    public function deleteUser(DeleteUserRequest $request) : bool
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $response[ContentTypeSerializerInterface::LITERAL_VALUE_KEY];
    }
    /**
     * updateUserPassword
     * @param UpdateUserPasswordRequest $request
     * @return ListUser
     * @throws UnauthorizedResponseException
     */
    public function updateUserPassword(UpdateUserPasswordRequest $request) : ListUser
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $this->container->get(ListUserMapper::class)->toSchema($response);
    }
    /**
     * checkToken
     * @param CheckTokenRequest $request
     * @return CheckTokenResponseObject
     * @throws UnauthorizedResponseException
     */
    public function checkToken(CheckTokenRequest $request) : CheckTokenResponseObject
    {
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $this->container->get(CheckTokenResponseObjectMapper::class)->toSchema($response);
    }
    /**
     * listLedgers
     * @param ListLedgersRequest $request
     * @return ListLedgersResponseBody
     * @throws UnauthorizedResponseException
     */
    public function listLedgers(ListLedgersRequest $request) : ListLedgersResponseBody
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $this->container->get(ListLedgersResponseBodyMapper::class)->toSchema($response);
    }
    /**
     * createLedger
     * @param CreateLedgerRequest $request
     * @return ListLedger
     * @throws UnauthorizedResponseException
     */
    public function createLedger(CreateLedgerRequest $request) : ListLedger
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $this->container->get(ListLedgerMapper::class)->toSchema($response);
    }
    /**
     * getLedger
     * @param GetLedgerRequest $request
     * @return ListLedger
     * @throws UnauthorizedResponseException
     */
    public function getLedger(GetLedgerRequest $request) : ListLedger
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $this->container->get(ListLedgerMapper::class)->toSchema($response);
    }
    /**
     * updateLedger
     * @param UpdateLedgerRequest $request
     * @return ListLedger
     * @throws UnauthorizedResponseException
     */
    public function updateLedger(UpdateLedgerRequest $request) : ListLedger
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $this->container->get(ListLedgerMapper::class)->toSchema($response);
    }
    /**
     * deleteLedger
     * @param DeleteLedgerRequest $request
     * @return bool
     * @throws UnauthorizedResponseException
     */
    public function deleteLedger(DeleteLedgerRequest $request) : bool
    {
        $this->init();
        $request->setBearerToken($this->bearerToken);
        try {
            $response = $this->handleResponse($this->sendRequest($request));
        } catch (UnauthorizedResponseException $e) {
            $this->login();
            $request->setBearerToken($this->bearerToken);
            $response = $this->handleResponse($this->sendRequest($request));
        }
        return $response[ContentTypeSerializerInterface::LITERAL_VALUE_KEY];
    }
    /**
     * login_check_post
     * @param LoginCheckPostRequest $request
     * @return LoginCheckPostResponseBody
     * @throws UnauthorizedResponseException
     */
    public function login_check_post(LoginCheckPostRequest $request) : LoginCheckPostResponseBody
    {
        $response = $this->handleResponse($this->sendRequest($request));
        return $this->container->get(LoginCheckPostResponseBodyMapper::class)->toSchema($response);
    }
    /**
     * @param ResponseInterface $response
    */
    protected function handleResponse(ResponseInterface $response)
    {
        return $this->container->get(ResponseHandler::class)->handle($response);
    }
    abstract public function login();
}
