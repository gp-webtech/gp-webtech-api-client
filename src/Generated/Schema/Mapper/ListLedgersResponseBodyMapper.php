<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgersResponseBody;

class ListLedgersResponseBodyMapper implements SchemaMapperInterface
{
    private PaginationMapper $paginationMapper;
    private ListLedgerCollectionMapper $listLedgerCollectionMapper;
    /**
     * @param PaginationMapper $paginationMapper
     * @param ListLedgerCollectionMapper $listLedgerCollectionMapper
    */
    public function __construct(PaginationMapper $paginationMapper, ListLedgerCollectionMapper $listLedgerCollectionMapper)
    {
        $this->paginationMapper = $paginationMapper;
        $this->listLedgerCollectionMapper = $listLedgerCollectionMapper;
    }
    /**
     * @param array $payload
     * @return ListLedgersResponseBody
    */
    public function toSchema(array $payload) : ListLedgersResponseBody
    {
        $schema = new ListLedgersResponseBody();
        if (isset($payload['pagination'])) {
            $schema->setPagination($this->paginationMapper->toSchema($payload['pagination']));
        }
        if (isset($payload['data'])) {
            $schema->setData($this->listLedgerCollectionMapper->toSchema($payload['data']));
        }
        return $schema;
    }
}
