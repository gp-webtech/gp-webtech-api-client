<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgerWithAssociations;

class ListLedgerWithAssociationsMapper implements SchemaMapperInterface
{
    private ListJournalCollectionMapper $listJournalCollectionMapper;
    /**
     * @param ListJournalCollectionMapper $listJournalCollectionMapper
    */
    public function __construct(ListJournalCollectionMapper $listJournalCollectionMapper)
    {
        $this->listJournalCollectionMapper = $listJournalCollectionMapper;
    }
    /**
     * @param array $payload
     * @return ListLedgerWithAssociations
    */
    public function toSchema(array $payload) : ListLedgerWithAssociations
    {
        $schema = new ListLedgerWithAssociations();
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
        if (isset($payload['journals'])) {
            $schema->setJournals($this->listJournalCollectionMapper->toSchema($payload['journals']));
        }
        return $schema;
    }
}
