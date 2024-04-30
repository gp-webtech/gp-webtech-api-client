<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgersResponseBody;

class ListLedgersResponseBodyMapper implements SchemaMapperInterface
{
    private ListLedgerCollectionMapper $listLedgerCollectionMapper;
    /**
     * @param ListLedgerCollectionMapper $listLedgerCollectionMapper
    */
    public function __construct(ListLedgerCollectionMapper $listLedgerCollectionMapper)
    {
        $this->listLedgerCollectionMapper = $listLedgerCollectionMapper;
    }
    /**
     * @param array $payload
     * @return ListLedgersResponseBody
    */
    public function toSchema(array $payload) : ListLedgersResponseBody
    {
        $schema = new ListLedgersResponseBody();
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
            $schema->setData($this->listLedgerCollectionMapper->toSchema($payload['data']));
        }
        return $schema;
    }
}
