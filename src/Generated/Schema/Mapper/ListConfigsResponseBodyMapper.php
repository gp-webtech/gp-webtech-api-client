<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListConfigsResponseBody;

class ListConfigsResponseBodyMapper implements SchemaMapperInterface
{
    private PaginationMapper $paginationMapper;
    private ListConfigCollectionMapper $listConfigCollectionMapper;
    /**
     * @param PaginationMapper $paginationMapper
     * @param ListConfigCollectionMapper $listConfigCollectionMapper
    */
    public function __construct(PaginationMapper $paginationMapper, ListConfigCollectionMapper $listConfigCollectionMapper)
    {
        $this->paginationMapper = $paginationMapper;
        $this->listConfigCollectionMapper = $listConfigCollectionMapper;
    }
    /**
     * @param array $payload
     * @return ListConfigsResponseBody
    */
    public function toSchema(array $payload) : ListConfigsResponseBody
    {
        $schema = new ListConfigsResponseBody();
        if (isset($payload['pagination'])) {
            $schema->setPagination($this->paginationMapper->toSchema($payload['pagination']));
        }
        if (isset($payload['data'])) {
            $schema->setData($this->listConfigCollectionMapper->toSchema($payload['data']));
        }
        return $schema;
    }
}
