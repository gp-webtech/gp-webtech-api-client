<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedger;

class ListLedgerMapper implements SchemaMapperInterface
{
    /**
     * @param array $payload
     * @return ListLedger
    */
    public function toSchema(array $payload) : ListLedger
    {
        $schema = new ListLedger();
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
        return $schema;
    }
}
