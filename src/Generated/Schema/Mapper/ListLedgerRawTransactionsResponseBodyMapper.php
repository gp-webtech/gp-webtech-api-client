<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgerRawTransactionsResponseBody;

class ListLedgerRawTransactionsResponseBodyMapper implements SchemaMapperInterface
{
    private PaginationMapper $paginationMapper;
    private ListLedgerRawTransactionCollectionMapper $listLedgerRawTransactionCollectionMapper;
    /**
     * @param PaginationMapper $paginationMapper
     * @param ListLedgerRawTransactionCollectionMapper $listLedgerRawTransactionCollectionMapper
    */
    public function __construct(PaginationMapper $paginationMapper, ListLedgerRawTransactionCollectionMapper $listLedgerRawTransactionCollectionMapper)
    {
        $this->paginationMapper = $paginationMapper;
        $this->listLedgerRawTransactionCollectionMapper = $listLedgerRawTransactionCollectionMapper;
    }
    /**
     * @param array $payload
     * @return ListLedgerRawTransactionsResponseBody
    */
    public function toSchema(array $payload) : ListLedgerRawTransactionsResponseBody
    {
        $schema = new ListLedgerRawTransactionsResponseBody();
        if (isset($payload['pagination'])) {
            $schema->setPagination($this->paginationMapper->toSchema($payload['pagination']));
        }
        if (isset($payload['data'])) {
            $schema->setData($this->listLedgerRawTransactionCollectionMapper->toSchema($payload['data']));
        }
        return $schema;
    }
}
