<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgerWithAssociationsCollection;

class ListLedgerWithAssociationsCollectionMapper implements SchemaMapperInterface
{
    private ListLedgerWithAssociationsMapper $listLedgerWithAssociationsMapper;
    /**
     * @param ListLedgerWithAssociationsMapper $listLedgerWithAssociationsMapper
    */
    public function __construct(ListLedgerWithAssociationsMapper $listLedgerWithAssociationsMapper)
    {
        $this->listLedgerWithAssociationsMapper = $listLedgerWithAssociationsMapper;
    }
    /**
     * @param array $payload
     * @return ListLedgerWithAssociationsCollection
    */
    public function toSchema(array $payload) : ListLedgerWithAssociationsCollection
    {
        $items = array();
        foreach ($payload as $payloadItem) {
            $items[] = $this->listLedgerWithAssociationsMapper->toSchema($payloadItem);
        }
        return new ListLedgerWithAssociationsCollection(...$items);
    }
}
