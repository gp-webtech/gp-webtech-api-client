<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgerTransaction;

class ListLedgerTransactionMapper implements SchemaMapperInterface
{
    private ListLedgerMapper $listLedgerMapper;
    private ListLedgerTransactionMetasMapper $listLedgerTransactionMetasMapper;
    /**
     * @param ListLedgerMapper $listLedgerMapper
     * @param ListLedgerTransactionMetasMapper $listLedgerTransactionMetasMapper
    */
    public function __construct(ListLedgerMapper $listLedgerMapper, ListLedgerTransactionMetasMapper $listLedgerTransactionMetasMapper)
    {
        $this->listLedgerMapper = $listLedgerMapper;
        $this->listLedgerTransactionMetasMapper = $listLedgerTransactionMetasMapper;
    }
    /**
     * @param array $payload
     * @return ListLedgerTransaction
    */
    public function toSchema(array $payload) : ListLedgerTransaction
    {
        $schema = new ListLedgerTransaction();
        if (isset($payload['id'])) {
            $schema->setId($payload['id']);
        }
        if (isset($payload['description'])) {
            $schema->setDescription($payload['description']);
        }
        if (isset($payload['amount'])) {
            $schema->setAmount($payload['amount']);
        }
        if (isset($payload['ledger'])) {
            $schema->setLedger($this->listLedgerMapper->toSchema($payload['ledger']));
        }
        if (isset($payload['metas'])) {
            $schema->setMetas($this->listLedgerTransactionMetasMapper->toSchema($payload['metas']));
        }
        if (isset($payload['created_at'])) {
            $schema->setCreatedAt($payload['created_at']);
        }
        if (isset($payload['updated_at'])) {
            $schema->setUpdatedAt($payload['updated_at']);
        }
        return $schema;
    }
}
