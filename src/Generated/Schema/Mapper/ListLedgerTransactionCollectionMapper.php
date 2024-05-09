<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgerTransactionCollection;

class ListLedgerTransactionCollectionMapper implements SchemaMapperInterface
{
    private ListLedgerTransactionMapper $listLedgerTransactionMapper;
    /**
     * @param ListLedgerTransactionMapper $listLedgerTransactionMapper
    */
    public function __construct(ListLedgerTransactionMapper $listLedgerTransactionMapper)
    {
        $this->listLedgerTransactionMapper = $listLedgerTransactionMapper;
    }
    /**
     * @param array $payload
     * @return ListLedgerTransactionCollection
    */
    public function toSchema(array $payload) : ListLedgerTransactionCollection
    {
        $items = array();
        foreach ($payload as $payloadItem) {
            $items[] = $this->listLedgerTransactionMapper->toSchema($payloadItem);
        }
        return new ListLedgerTransactionCollection(...$items);
    }
}
