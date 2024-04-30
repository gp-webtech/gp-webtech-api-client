<?php

namespace VanengersGpWebtechApiPhpClient\Schema\Mapper;

use VanengersGpWebtechApiPhpClient\Schema\ListConfigCollection;

class ListConfigCollectionMapper implements SchemaMapperInterface
{
    private ListConfigMapper $listConfigMapper;
    /**
     * @param ListConfigMapper $listConfigMapper
    */
    public function __construct(ListConfigMapper $listConfigMapper)
    {
        $this->listConfigMapper = $listConfigMapper;
    }
    /**
     * @param array $payload
     * @return ListConfigCollection
    */
    public function toSchema(array $payload) : ListConfigCollection
    {
        $items = array();
        foreach ($payload as $payloadItem) {
            $items[] = $this->listConfigMapper->toSchema($payloadItem);
        }
        return new ListConfigCollection(...$items);
    }
}
