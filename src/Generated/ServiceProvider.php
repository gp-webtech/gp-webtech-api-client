<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated;

use DoclerLabs\ApiClientException\Factory\ResponseExceptionFactory;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\Mapper\RequestMapperInterface;
use Vanengers\GpWebtechApiPhpClient\Generated\Response\ResponseHandler;
use Vanengers\GpWebtechApiPhpClient\Generated\Serializer\BodySerializer;
use Vanengers\GpWebtechApiPhpClient\Generated\Serializer\QuerySerializer;
use Vanengers\GpWebtechApiPhpClient\Generated\Serializer\ContentType\JsonContentTypeSerializer;
use Vanengers\GpWebtechApiPhpClient\Generated\Serializer\ContentType\VdnApiJsonContentTypeSerializer;
use Vanengers\GpWebtechApiPhpClient\Generated\Serializer\ContentType\FormUrlencodedContentTypeSerializer;
use Vanengers\GpWebtechApiPhpClient\Generated\Serializer\ContentType\XmlContentTypeSerializer;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\Mapper\GuzzleRequestMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListConfigsResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListConfigCollectionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListConfigMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListUsersResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListUserCollectionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListUserMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\CheckTokenResponseObjectMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgersResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerCollectionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerRawTransactionsResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerRawTransactionCollectionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerRawTransactionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerTransactionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerTransactionsWithAssociationsResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerTransactionCollectionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\LoginCheckPostResponseBodyMapper;
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
        $container[ListLedgerRawTransactionsResponseBodyMapper::class] = static function () use ($container) : ListLedgerRawTransactionsResponseBodyMapper {
            return new ListLedgerRawTransactionsResponseBodyMapper($container[ListLedgerRawTransactionCollectionMapper::class]);
        };
        $container[ListLedgerRawTransactionCollectionMapper::class] = static function () use ($container) : ListLedgerRawTransactionCollectionMapper {
            return new ListLedgerRawTransactionCollectionMapper($container[ListLedgerRawTransactionMapper::class]);
        };
        $container[ListLedgerRawTransactionMapper::class] = static function () use ($container) : ListLedgerRawTransactionMapper {
            return new ListLedgerRawTransactionMapper();
        };
        $container[ListLedgerTransactionMapper::class] = static function () use ($container) : ListLedgerTransactionMapper {
            return new ListLedgerTransactionMapper($container[ListLedgerMapper::class]);
        };
        $container[ListLedgerTransactionsWithAssociationsResponseBodyMapper::class] = static function () use ($container) : ListLedgerTransactionsWithAssociationsResponseBodyMapper {
            return new ListLedgerTransactionsWithAssociationsResponseBodyMapper($container[ListLedgerTransactionCollectionMapper::class]);
        };
        $container[ListLedgerTransactionCollectionMapper::class] = static function () use ($container) : ListLedgerTransactionCollectionMapper {
            return new ListLedgerTransactionCollectionMapper($container[ListLedgerTransactionMapper::class]);
        };
        $container[LoginCheckPostResponseBodyMapper::class] = static function () use ($container) : LoginCheckPostResponseBodyMapper {
            return new LoginCheckPostResponseBodyMapper();
        };
    }
}
