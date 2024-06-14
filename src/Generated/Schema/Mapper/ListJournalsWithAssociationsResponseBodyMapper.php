<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListJournalsWithAssociationsResponseBody;

class ListJournalsWithAssociationsResponseBodyMapper implements SchemaMapperInterface
{
    private PaginationMapper $paginationMapper;
    private ListJournalWithAssociationsCollectionMapper $listJournalWithAssociationsCollectionMapper;
    /**
     * @param PaginationMapper $paginationMapper
     * @param ListJournalWithAssociationsCollectionMapper $listJournalWithAssociationsCollectionMapper
    */
    public function __construct(PaginationMapper $paginationMapper, ListJournalWithAssociationsCollectionMapper $listJournalWithAssociationsCollectionMapper)
    {
        $this->paginationMapper = $paginationMapper;
        $this->listJournalWithAssociationsCollectionMapper = $listJournalWithAssociationsCollectionMapper;
    }
    /**
     * @param array $payload
     * @return ListJournalsWithAssociationsResponseBody
    */
    public function toSchema(array $payload) : ListJournalsWithAssociationsResponseBody
    {
        $schema = new ListJournalsWithAssociationsResponseBody();
        if (isset($payload['pagination'])) {
            $schema->setPagination($this->paginationMapper->toSchema($payload['pagination']));
        }
        if (isset($payload['data'])) {
            $schema->setData($this->listJournalWithAssociationsCollectionMapper->toSchema($payload['data']));
        }
        return $schema;
    }
}
