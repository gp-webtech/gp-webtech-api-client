<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgerTransactionsWithAssociationsResponseBody;

class ListLedgerTransactionsWithAssociationsResponseBodyMapper implements SchemaMapperInterface
{
    private ListLedgerTransactionCollectionMapper $listLedgerTransactionCollectionMapper;
    /**
     * @param ListLedgerTransactionCollectionMapper $listLedgerTransactionCollectionMapper
    */
    public function __construct(ListLedgerTransactionCollectionMapper $listLedgerTransactionCollectionMapper)
    {
        $this->listLedgerTransactionCollectionMapper = $listLedgerTransactionCollectionMapper;
    }
    /**
     * @param array $payload
     * @return ListLedgerTransactionsWithAssociationsResponseBody
    */
    public function toSchema(array $payload) : ListLedgerTransactionsWithAssociationsResponseBody
    {
        $schema = new ListLedgerTransactionsWithAssociationsResponseBody();
        if (isset($payload['total'])) {
            $schema->setTotal($payload['total']);
        }
        if (isset($payload['count'])) {
            $schema->setCount($payload['count']);
        }
        if (isset($payload['offset'])) {
            $schema->setOffset($payload['offset']);
        }
        if (isset($payload['items_per_page'])) {
            $schema->setItemsPerPage($payload['items_per_page']);
        }
        if (isset($payload['total_pages'])) {
            $schema->setTotalPages($payload['total_pages']);
        }
        if (isset($payload['current_page'])) {
            $schema->setCurrentPage($payload['current_page']);
        }
        if (isset($payload['has_next_page'])) {
            $schema->setHasNextPage($payload['has_next_page']);
        }
        if (isset($payload['has_previous_page'])) {
            $schema->setHasPreviousPage($payload['has_previous_page']);
        }
        if (isset($payload['data'])) {
            $schema->setData($this->listLedgerTransactionCollectionMapper->toSchema($payload['data']));
        }
        return $schema;
    }
}
