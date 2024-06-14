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
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\PaginationMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListConfigCollectionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListConfigMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListJournalsResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListJournalCollectionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListJournalMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListJournalWithAssociationsMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerCollectionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListJournalsWithAssociationsResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListJournalWithAssociationsCollectionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgersResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerWithAssociationsMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgersWithAssociationsResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerWithAssociationsCollectionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerRawTransactionsResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerRawTransactionCollectionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerRawTransactionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerTransactionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerTransactionMetasMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerTransactionsWithAssociationsResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListLedgerTransactionCollectionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListUsersResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListUserCollectionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\ListUserMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper\CheckTokenResponseObjectMapper;
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
            return new ListConfigsResponseBodyMapper($container[PaginationMapper::class], $container[ListConfigCollectionMapper::class]);
        };
        $container[PaginationMapper::class] = static function () use ($container) : PaginationMapper {
            return new PaginationMapper();
        };
        $container[ListConfigCollectionMapper::class] = static function () use ($container) : ListConfigCollectionMapper {
            return new ListConfigCollectionMapper($container[ListConfigMapper::class]);
        };
        $container[ListConfigMapper::class] = static function () use ($container) : ListConfigMapper {
            return new ListConfigMapper();
        };
        $container[ListJournalsResponseBodyMapper::class] = static function () use ($container) : ListJournalsResponseBodyMapper {
            return new ListJournalsResponseBodyMapper($container[PaginationMapper::class], $container[ListJournalCollectionMapper::class]);
        };
        $container[ListJournalCollectionMapper::class] = static function () use ($container) : ListJournalCollectionMapper {
            return new ListJournalCollectionMapper($container[ListJournalMapper::class]);
        };
        $container[ListJournalMapper::class] = static function () use ($container) : ListJournalMapper {
            return new ListJournalMapper();
        };
        $container[ListJournalWithAssociationsMapper::class] = static function () use ($container) : ListJournalWithAssociationsMapper {
            return new ListJournalWithAssociationsMapper($container[ListLedgerCollectionMapper::class]);
        };
        $container[ListLedgerCollectionMapper::class] = static function () use ($container) : ListLedgerCollectionMapper {
            return new ListLedgerCollectionMapper($container[ListLedgerMapper::class]);
        };
        $container[ListLedgerMapper::class] = static function () use ($container) : ListLedgerMapper {
            return new ListLedgerMapper();
        };
        $container[ListJournalsWithAssociationsResponseBodyMapper::class] = static function () use ($container) : ListJournalsWithAssociationsResponseBodyMapper {
            return new ListJournalsWithAssociationsResponseBodyMapper($container[PaginationMapper::class], $container[ListJournalWithAssociationsCollectionMapper::class]);
        };
        $container[ListJournalWithAssociationsCollectionMapper::class] = static function () use ($container) : ListJournalWithAssociationsCollectionMapper {
            return new ListJournalWithAssociationsCollectionMapper($container[ListJournalWithAssociationsMapper::class]);
        };
        $container[ListLedgersResponseBodyMapper::class] = static function () use ($container) : ListLedgersResponseBodyMapper {
            return new ListLedgersResponseBodyMapper($container[PaginationMapper::class], $container[ListLedgerCollectionMapper::class]);
        };
        $container[ListLedgerWithAssociationsMapper::class] = static function () use ($container) : ListLedgerWithAssociationsMapper {
            return new ListLedgerWithAssociationsMapper($container[ListJournalCollectionMapper::class]);
        };
        $container[ListLedgersWithAssociationsResponseBodyMapper::class] = static function () use ($container) : ListLedgersWithAssociationsResponseBodyMapper {
            return new ListLedgersWithAssociationsResponseBodyMapper($container[PaginationMapper::class], $container[ListLedgerWithAssociationsCollectionMapper::class]);
        };
        $container[ListLedgerWithAssociationsCollectionMapper::class] = static function () use ($container) : ListLedgerWithAssociationsCollectionMapper {
            return new ListLedgerWithAssociationsCollectionMapper($container[ListLedgerWithAssociationsMapper::class]);
        };
        $container[ListLedgerRawTransactionsResponseBodyMapper::class] = static function () use ($container) : ListLedgerRawTransactionsResponseBodyMapper {
            return new ListLedgerRawTransactionsResponseBodyMapper($container[PaginationMapper::class], $container[ListLedgerRawTransactionCollectionMapper::class]);
        };
        $container[ListLedgerRawTransactionCollectionMapper::class] = static function () use ($container) : ListLedgerRawTransactionCollectionMapper {
            return new ListLedgerRawTransactionCollectionMapper($container[ListLedgerRawTransactionMapper::class]);
        };
        $container[ListLedgerRawTransactionMapper::class] = static function () use ($container) : ListLedgerRawTransactionMapper {
            return new ListLedgerRawTransactionMapper();
        };
        $container[ListLedgerTransactionMapper::class] = static function () use ($container) : ListLedgerTransactionMapper {
            return new ListLedgerTransactionMapper($container[ListLedgerMapper::class], $container[ListLedgerTransactionMetasMapper::class]);
        };
        $container[ListLedgerTransactionMetasMapper::class] = static function () use ($container) : ListLedgerTransactionMetasMapper {
            return new ListLedgerTransactionMetasMapper();
        };
        $container[ListLedgerTransactionsWithAssociationsResponseBodyMapper::class] = static function () use ($container) : ListLedgerTransactionsWithAssociationsResponseBodyMapper {
            return new ListLedgerTransactionsWithAssociationsResponseBodyMapper($container[PaginationMapper::class], $container[ListLedgerTransactionCollectionMapper::class]);
        };
        $container[ListLedgerTransactionCollectionMapper::class] = static function () use ($container) : ListLedgerTransactionCollectionMapper {
            return new ListLedgerTransactionCollectionMapper($container[ListLedgerTransactionMapper::class]);
        };
        $container[ListUsersResponseBodyMapper::class] = static function () use ($container) : ListUsersResponseBodyMapper {
            return new ListUsersResponseBodyMapper($container[PaginationMapper::class], $container[ListUserCollectionMapper::class]);
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
        $container[LoginCheckPostResponseBodyMapper::class] = static function () use ($container) : LoginCheckPostResponseBodyMapper {
            return new LoginCheckPostResponseBodyMapper();
        };
    }
}
