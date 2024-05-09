<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Container\ContainerInterface;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\Mapper\RequestMapperInterface;
use Vanengers\GpWebtechApiPhpClient\Generated\Response\ResponseHandler;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\RequestInterface;
use Pimple\Container as PimpleContainer;
use Pimple\Psr11\Container as Psr11PimpleContainer;
use Vanengers\GpWebtechApiPhpClient\Generated\ServiceProvider;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\ListConfigsRequest;
use DoclerLabs\ApiClientException\UnauthorizedResponseException;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListConfigsResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListConfigsResponseBody;
use Psr\Container\NotFoundExceptionInterface;
use Psr\Container\ContainerExceptionInterface;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\CreateConfigRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListConfigMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListConfig;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\GetConfigRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\UpdateConfigRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\DeleteConfigRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Serializer\ContentType\ContentTypeSerializerInterface;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\ListUsersRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListUsersResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListUsersResponseBody;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\CreateUserRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListUserMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListUser;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\GetUserRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\UpdateUserRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\DeleteUserRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\UpdateUserPasswordRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\CheckTokenRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\CheckTokenResponseObjectMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\CheckTokenResponseObject;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\ListLedgersRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgersResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgersResponseBody;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\CreateLedgerRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedger;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\GetLedgerRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\UpdateLedgerRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\DeleteLedgerRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\ListLedgerRawTransactionsRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerRawTransactionsResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgerRawTransactionsResponseBody;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\CreateLedgerTransactionRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerTransactionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgerTransaction;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\ListLedgerTransactionsWithAssociationsRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerTransactionsWithAssociationsResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgerTransactionsWithAssociationsResponseBody;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\GetLedgerTransactionRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\UpdateLedgerTransactionRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\DeleteLedgerTransactionRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\LoginCheckPostRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\LoginCheckPostResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\LoginCheckPostResponseBody;

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
     * listLedgerRawTransactions
     * @param ListLedgerRawTransactionsRequest $request
     * @return ListLedgerRawTransactionsResponseBody
     * @throws UnauthorizedResponseException
     */
    public function listLedgerRawTransactions(ListLedgerRawTransactionsRequest $request) : ListLedgerRawTransactionsResponseBody
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
        return $this->container->get(ListLedgerRawTransactionsResponseBodyMapper::class)->toSchema($response);
    }
    /**
     * createLedgerTransaction
     * @param CreateLedgerTransactionRequest $request
     * @return ListLedgerTransaction
     * @throws UnauthorizedResponseException
     */
    public function createLedgerTransaction(CreateLedgerTransactionRequest $request) : ListLedgerTransaction
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
        return $this->container->get(ListLedgerTransactionMapper::class)->toSchema($response);
    }
    /**
     * listLedgerTransactionsWithAssociations
     * @param ListLedgerTransactionsWithAssociationsRequest $request
     * @return ListLedgerTransactionsWithAssociationsResponseBody
     * @throws UnauthorizedResponseException
     */
    public function listLedgerTransactionsWithAssociations(ListLedgerTransactionsWithAssociationsRequest $request) : ListLedgerTransactionsWithAssociationsResponseBody
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
        return $this->container->get(ListLedgerTransactionsWithAssociationsResponseBodyMapper::class)->toSchema($response);
    }
    /**
     * getLedgerTransaction
     * @param GetLedgerTransactionRequest $request
     * @return ListLedgerTransaction
     * @throws UnauthorizedResponseException
     */
    public function getLedgerTransaction(GetLedgerTransactionRequest $request) : ListLedgerTransaction
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
        return $this->container->get(ListLedgerTransactionMapper::class)->toSchema($response);
    }
    /**
     * updateLedgerTransaction
     * @param UpdateLedgerTransactionRequest $request
     * @return ListLedgerTransaction
     * @throws UnauthorizedResponseException
     */
    public function updateLedgerTransaction(UpdateLedgerTransactionRequest $request) : ListLedgerTransaction
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
        return $this->container->get(ListLedgerTransactionMapper::class)->toSchema($response);
    }
    /**
     * deleteLedgerTransaction
     * @param DeleteLedgerTransactionRequest $request
     * @return bool
     * @throws UnauthorizedResponseException
     */
    public function deleteLedgerTransaction(DeleteLedgerTransactionRequest $request) : bool
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
