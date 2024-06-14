<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgersWithAssociationsResponseBody;

class ListLedgersWithAssociationsResponseBodyMapper implements SchemaMapperInterface
{
    private PaginationMapper $paginationMapper;
    private ListLedgerWithAssociationsCollectionMapper $listLedgerWithAssociationsCollectionMapper;
    /**
     * @param PaginationMapper $paginationMapper
     * @param ListLedgerWithAssociationsCollectionMapper $listLedgerWithAssociationsCollectionMapper
    */
    public function __construct(PaginationMapper $paginationMapper, ListLedgerWithAssociationsCollectionMapper $listLedgerWithAssociationsCollectionMapper)
    {
        $this->paginationMapper = $paginationMapper;
        $this->listLedgerWithAssociationsCollectionMapper = $listLedgerWithAssociationsCollectionMapper;
    }
    /**
     * @param array $payload
     * @return ListLedgersWithAssociationsResponseBody
    */
    public function toSchema(array $payload) : ListLedgersWithAssociationsResponseBody
    {
        $schema = new ListLedgersWithAssociationsResponseBody();
        if (isset($payload['pagination'])) {
            $schema->setPagination($this->paginationMapper->toSchema($payload['pagination']));
        }
        if (isset($payload['data'])) {
            $schema->setData($this->listLedgerWithAssociationsCollectionMapper->toSchema($payload['data']));
        }
        return $schema;
    }
}
