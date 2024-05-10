<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListUsersResponseBody;

class ListUsersResponseBodyMapper implements SchemaMapperInterface
{
    private PaginationMapper $paginationMapper;
    private ListUserCollectionMapper $listUserCollectionMapper;
    /**
     * @param PaginationMapper $paginationMapper
     * @param ListUserCollectionMapper $listUserCollectionMapper
    */
    public function __construct(PaginationMapper $paginationMapper, ListUserCollectionMapper $listUserCollectionMapper)
    {
        $this->paginationMapper = $paginationMapper;
        $this->listUserCollectionMapper = $listUserCollectionMapper;
    }
    /**
     * @param array $payload
     * @return ListUsersResponseBody
    */
    public function toSchema(array $payload) : ListUsersResponseBody
    {
        $schema = new ListUsersResponseBody();
        if (isset($payload['pagination'])) {
            $schema->setPagination($this->paginationMapper->toSchema($payload['pagination']));
        }
        if (isset($payload['data'])) {
            $schema->setData($this->listUserCollectionMapper->toSchema($payload['data']));
        }
        return $schema;
    }
}
