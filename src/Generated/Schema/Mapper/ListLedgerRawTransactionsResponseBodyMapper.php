<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgerRawTransactionsResponseBody;

class ListLedgerRawTransactionsResponseBodyMapper implements SchemaMapperInterface
{
    private ListLedgerRawTransactionCollectionMapper $listLedgerRawTransactionCollectionMapper;
    /**
     * @param ListLedgerRawTransactionCollectionMapper $listLedgerRawTransactionCollectionMapper
    */
    public function __construct(ListLedgerRawTransactionCollectionMapper $listLedgerRawTransactionCollectionMapper)
    {
        $this->listLedgerRawTransactionCollectionMapper = $listLedgerRawTransactionCollectionMapper;
    }
    /**
     * @param array $payload
     * @return ListLedgerRawTransactionsResponseBody
    */
    public function toSchema(array $payload) : ListLedgerRawTransactionsResponseBody
    {
        $schema = new ListLedgerRawTransactionsResponseBody();
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
            $schema->setData($this->listLedgerRawTransactionCollectionMapper->toSchema($payload['data']));
        }
        return $schema;
    }
}
