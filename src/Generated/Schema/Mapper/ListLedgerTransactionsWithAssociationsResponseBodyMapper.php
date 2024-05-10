<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgerTransactionsWithAssociationsResponseBody;

class ListLedgerTransactionsWithAssociationsResponseBodyMapper implements SchemaMapperInterface
{
    private PaginationMapper $paginationMapper;
    private ListLedgerTransactionCollectionMapper $listLedgerTransactionCollectionMapper;
    /**
     * @param PaginationMapper $paginationMapper
     * @param ListLedgerTransactionCollectionMapper $listLedgerTransactionCollectionMapper
    */
    public function __construct(PaginationMapper $paginationMapper, ListLedgerTransactionCollectionMapper $listLedgerTransactionCollectionMapper)
    {
        $this->paginationMapper = $paginationMapper;
        $this->listLedgerTransactionCollectionMapper = $listLedgerTransactionCollectionMapper;
    }
    /**
     * @param array $payload
     * @return ListLedgerTransactionsWithAssociationsResponseBody
    */
    public function toSchema(array $payload) : ListLedgerTransactionsWithAssociationsResponseBody
    {
        $schema = new ListLedgerTransactionsWithAssociationsResponseBody();
        if (isset($payload['pagination'])) {
            $schema->setPagination($this->paginationMapper->toSchema($payload['pagination']));
        }
        if (isset($payload['data'])) {
            $schema->setData($this->listLedgerTransactionCollectionMapper->toSchema($payload['data']));
        }
        return $schema;
    }
}
