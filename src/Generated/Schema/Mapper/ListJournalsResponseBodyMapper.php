<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListJournalsResponseBody;

class ListJournalsResponseBodyMapper implements SchemaMapperInterface
{
    private PaginationMapper $paginationMapper;
    private ListJournalCollectionMapper $listJournalCollectionMapper;
    /**
     * @param PaginationMapper $paginationMapper
     * @param ListJournalCollectionMapper $listJournalCollectionMapper
    */
    public function __construct(PaginationMapper $paginationMapper, ListJournalCollectionMapper $listJournalCollectionMapper)
    {
        $this->paginationMapper = $paginationMapper;
        $this->listJournalCollectionMapper = $listJournalCollectionMapper;
    }
    /**
     * @param array $payload
     * @return ListJournalsResponseBody
    */
    public function toSchema(array $payload) : ListJournalsResponseBody
    {
        $schema = new ListJournalsResponseBody();
        if (isset($payload['pagination'])) {
            $schema->setPagination($this->paginationMapper->toSchema($payload['pagination']));
        }
        if (isset($payload['data'])) {
            $schema->setData($this->listJournalCollectionMapper->toSchema($payload['data']));
        }
        return $schema;
    }
}
