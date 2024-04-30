<?php

namespace VanengersGpWebtechApiPhpClient;

use DoclerLabs\ApiClientException\Factory\ResponseExceptionFactory;
use VanengersGpWebtechApiPhpClient\Request\Mapper\RequestMapperInterface;
use VanengersGpWebtechApiPhpClient\Response\ResponseHandler;
use VanengersGpWebtechApiPhpClient\Serializer\BodySerializer;
use VanengersGpWebtechApiPhpClient\Serializer\QuerySerializer;
use VanengersGpWebtechApiPhpClient\Serializer\ContentType\JsonContentTypeSerializer;
use VanengersGpWebtechApiPhpClient\Serializer\ContentType\VdnApiJsonContentTypeSerializer;
use VanengersGpWebtechApiPhpClient\Serializer\ContentType\FormUrlencodedContentTypeSerializer;
use VanengersGpWebtechApiPhpClient\Serializer\ContentType\XmlContentTypeSerializer;
use VanengersGpWebtechApiPhpClient\Request\Mapper\GuzzleRequestMapper;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\ListConfigsResponseBodyMapper;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\ListConfigCollectionMapper;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\ListConfigMapper;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\ListUsersResponseBodyMapper;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\ListUserCollectionMapper;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\ListUserMapper;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\CheckTokenResponseObjectMapper;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\ListLedgersResponseBodyMapper;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\ListLedgerCollectionMapper;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\ListLedgerMapper;
use VanengersGpWebtechApiPhpClient\Schema\Mapper\LoginCheckPostResponseBodyMapper;
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
        $container[ListConfigsResponseBodyMapper::class] = static function () use ($container) : ListConfigsResponseBodyMapper {
            return new ListConfigsResponseBodyMapper($container[ListConfigCollectionMapper::class]);
        };
        $container[ListConfigCollectionMapper::class] = static function () use ($container) : ListConfigCollectionMapper {
            return new ListConfigCollectionMapper($container[ListConfigMapper::class]);
        };
        $container[ListConfigMapper::class] = static function () use ($container) : ListConfigMapper {
            return new ListConfigMapper();
        };
        $container[ListUsersResponseBodyMapper::class] = static function () use ($container) : ListUsersResponseBodyMapper {
            return new ListUsersResponseBodyMapper($container[ListUserCollectionMapper::class]);
        };
        $container[ListUserCollectionMapper::class] = static function () use ($container) : ListUserCollectionMapper {
            return new ListUserCollectionMapper($container[ListUserMapper::class]);
        };
        $container[ListUserMapper::class] = static function () use ($container) : ListUserMapper {
            return new ListUserMapper();
        };
        $container[CheckTokenResponseObjectMapper::class] = static function () use ($container) : CheckTokenResponseObjectMapper {
            return new CheckTokenResponseObjectMapper();
        };
        $container[ListLedgersResponseBodyMapper::class] = static function () use ($container) : ListLedgersResponseBodyMapper {
            return new ListLedgersResponseBodyMapper($container[ListLedgerCollectionMapper::class]);
        };
        $container[ListLedgerCollectionMapper::class] = static function () use ($container) : ListLedgerCollectionMapper {
            return new ListLedgerCollectionMapper($container[ListLedgerMapper::class]);
        };
        $container[ListLedgerMapper::class] = static function () use ($container) : ListLedgerMapper {
            return new ListLedgerMapper();
        };
        $container[LoginCheckPostResponseBodyMapper::class] = static function () use ($container) : LoginCheckPostResponseBodyMapper {
            return new LoginCheckPostResponseBodyMapper();
        };
    }
}
