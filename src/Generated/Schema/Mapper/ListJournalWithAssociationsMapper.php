<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListJournalWithAssociations;

class ListJournalWithAssociationsMapper implements SchemaMapperInterface
{
    private ListLedgerCollectionMapper $listLedgerCollectionMapper;
    /**
     * @param ListLedgerCollectionMapper $listLedgerCollectionMapper
    */
    public function __construct(ListLedgerCollectionMapper $listLedgerCollectionMapper)
    {
        $this->listLedgerCollectionMapper = $listLedgerCollectionMapper;
    }
    /**
     * @param array $payload
     * @return ListJournalWithAssociations
    */
    public function toSchema(array $payload) : ListJournalWithAssociations
    {
        $schema = new ListJournalWithAssociations();
        if (isset($payload['id'])) {
            $schema->setId($payload['id']);
        }
        if (isset($payload['name'])) {
            $schema->setName($payload['name']);
        }
        if (isset($payload['amount'])) {
            $schema->setAmount($payload['amount']);
        }
        if (isset($payload['type'])) {
            $schema->setType($payload['type']);
        }
        if (isset($payload['created_at'])) {
            $schema->setCreatedAt($payload['created_at']);
        }
        if (isset($payload['updated_at'])) {
            $schema->setUpdatedAt($payload['updated_at']);
        }
        if (isset($payload['ledgers'])) {
            $schema->setLedgers($this->listLedgerCollectionMapper->toSchema($payload['ledgers']));
        }
        return $schema;
    }
}
