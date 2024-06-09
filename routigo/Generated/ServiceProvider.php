<?php

namespace Generated;

use DoclerLabs\ApiClientException\Factory\ResponseExceptionFactory;
use Generated\Request\Mapper\RequestMapperInterface;
use Generated\Response\ResponseHandler;
use Generated\Serializer\BodySerializer;
use Generated\Serializer\QuerySerializer;
use Generated\Serializer\ContentType\JsonContentTypeSerializer;
use Generated\Serializer\ContentType\VdnApiJsonContentTypeSerializer;
use Generated\Serializer\ContentType\FormUrlencodedContentTypeSerializer;
use Generated\Serializer\ContentType\XmlContentTypeSerializer;
use Generated\Request\Mapper\GuzzleRequestMapper;
use Generated\Schema\Mapper\WebhookConfigCollectionMapper;
use Generated\Schema\Mapper\WebhookConfigMapper;
use Generated\Schema\Mapper\EndpointNotificationActionMapper;
use Generated\Schema\Mapper\EndpointNotificationActionHeadersMapper;
use Generated\Schema\Mapper\EndpointNotificationActionQueryParametersMapper;
use Pimple\Container;

class ServiceProvider
{
    /**
     * @param Container $container
    */
    public function register(Container $container) : void
    {
        $container[BodySerializer::class] = static function () : BodySerializer {
            return (new BodySerializer())->add(new JsonContentTypeSerializer());
        };
        $container[QuerySerializer::class] = static function () : QuerySerializer {
            return new QuerySerializer();
        };
        $container[ResponseHandler::class] = static function () use ($container) : ResponseHandler {
            return new ResponseHandler($container[BodySerializer::class], new ResponseExceptionFactory());
        };
        $container[RequestMapperInterface::class] = static function () use ($container) : RequestMapperInterface {
            return new GuzzleRequestMapper($container[BodySerializer::class], $container[QuerySerializer::class]);
        };
        $container[WebhookConfigCollectionMapper::class] = static function () use ($container) : WebhookConfigCollectionMapper {
            return new WebhookConfigCollectionMapper($container[WebhookConfigMapper::class]);
        };
        $container[WebhookConfigMapper::class] = static function () use ($container) : WebhookConfigMapper {
            return new WebhookConfigMapper($container[EndpointNotificationActionMapper::class]);
        };
        $container[EndpointNotificationActionMapper::class] = static function () use ($container) : EndpointNotificationActionMapper {
            return new EndpointNotificationActionMapper($container[EndpointNotificationActionHeadersMapper::class], $container[EndpointNotificationActionQueryParametersMapper::class]);
        };
        $container[EndpointNotificationActionHeadersMapper::class] = static function () use ($container) : EndpointNotificationActionHeadersMapper {
            return new EndpointNotificationActionHeadersMapper();
        };
        $container[EndpointNotificationActionQueryParametersMapper::class] = static function () use ($container) : EndpointNotificationActionQueryParametersMapper {
            return new EndpointNotificationActionQueryParametersMapper();
        };
    }
}
