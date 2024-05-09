<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgerRawTransactionCollection;

class ListLedgerRawTransactionCollectionMapper implements SchemaMapperInterface
{
    private ListLedgerRawTransactionMapper $listLedgerRawTransactionMapper;
    /**
     * @param ListLedgerRawTransactionMapper $listLedgerRawTransactionMapper
    */
    public function __construct(ListLedgerRawTransactionMapper $listLedgerRawTransactionMapper)
    {
        $this->listLedgerRawTransactionMapper = $listLedgerRawTransactionMapper;
    }
    /**
     * @param array $payload
     * @return ListLedgerRawTransactionCollection
    */
    public function toSchema(array $payload) : ListLedgerRawTransactionCollection
    {
        $items = array();
        foreach ($payload as $payloadItem) {
            $items[] = $this->listLedgerRawTransactionMapper->toSchema($payloadItem);
        }
        return new ListLedgerRawTransactionCollection(...$items);
    }
}
