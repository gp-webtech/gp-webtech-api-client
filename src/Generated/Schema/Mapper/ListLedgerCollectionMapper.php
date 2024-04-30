<?php

namespace VanengersGpWebtechApiPhpClient\Schema\Mapper;

use VanengersGpWebtechApiPhpClient\Schema\ListLedgerCollection;

class ListLedgerCollectionMapper implements SchemaMapperInterface
{
    private ListLedgerMapper $listLedgerMapper;
    /**
     * @param ListLedgerMapper $listLedgerMapper
    */
    public function __construct(ListLedgerMapper $listLedgerMapper)
    {
        $this->listLedgerMapper = $listLedgerMapper;
    }
    /**
     * @param array $payload
     * @return ListLedgerCollection
    */
    public function toSchema(array $payload) : ListLedgerCollection
    {
        $items = array();
        foreach ($payload as $payloadItem) {
            $items[] = $this->listLedgerMapper->toSchema($payloadItem);
        }
        return new ListLedgerCollection(...$items);
    }
}
