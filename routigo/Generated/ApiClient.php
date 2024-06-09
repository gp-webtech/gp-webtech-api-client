<?php

namespace Generated;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Container\ContainerInterface;
use Generated\Request\Mapper\RequestMapperInterface;
use Generated\Response\ResponseHandler;
use Generated\Request\RequestInterface;
use Pimple\Container as PimpleContainer;
use Pimple\Psr11\Container as Psr11PimpleContainer;
use Vanengers\GpWebtechApiPhpClient\Generated\ServiceProvider;
use Generated\Request\GetAllWebhooksRequest;
use DoclerLabs\ApiClientException\UnauthorizedResponseException;
use Generated\Schema\Mapper\WebhookConfigCollectionMapper;
use Generated\Schema\WebhookConfigCollection;
use Psr\Container\NotFoundExceptionInterface;
use Psr\Container\ContainerExceptionInterface;
use Generated\Request\CreateWebhookRequest;
use Generated\Schema\Mapper\WebhookConfigMapper;
use Generated\Schema\WebhookConfig;
use Generated\Request\GetWebhookRequest;
use Generated\Request\UpdateWebhookRequest;
use Generated\Request\DeleteWebhookRequest;

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
     * getAllWebhooks
     * @param GetAllWebhooksRequest $request
     * @return WebhookConfigCollection
     * @throws UnauthorizedResponseException
     */
    public function getAllWebhooks(GetAllWebhooksRequest $request) : WebhookConfigCollection
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
        return $this->container->get(WebhookConfigCollectionMapper::class)->toSchema($response);
    }
    /**
     * createWebhook
     * @param CreateWebhookRequest $request
     * @return WebhookConfig
     * @throws UnauthorizedResponseException
     */
    public function createWebhook(CreateWebhookRequest $request) : WebhookConfig
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
        return $this->container->get(WebhookConfigMapper::class)->toSchema($response);
    }
    /**
     * getWebhook
     * @param GetWebhookRequest $request
     * @return WebhookConfig
     * @throws UnauthorizedResponseException
     */
    public function getWebhook(GetWebhookRequest $request) : WebhookConfig
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
        return $this->container->get(WebhookConfigMapper::class)->toSchema($response);
    }
    /**
     * updateWebhook
     * @param UpdateWebhookRequest $request
     * @return WebhookConfig
     * @throws UnauthorizedResponseException
     */
    public function updateWebhook(UpdateWebhookRequest $request) : WebhookConfig
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
        return $this->container->get(WebhookConfigMapper::class)->toSchema($response);
    }
    /**
     * @param DeleteWebhookRequest $request
    */
    public function deleteWebhook(DeleteWebhookRequest $request) : void
    {
        $this->handleResponse($this->sendRequest($request));
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
