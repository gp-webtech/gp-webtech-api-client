<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgerRawTransaction;

class ListLedgerRawTransactionMapper implements SchemaMapperInterface
{
    /**
     * @param array $payload
     * @return ListLedgerRawTransaction
    */
    public function toSchema(array $payload) : ListLedgerRawTransaction
    {
        $schema = new ListLedgerRawTransaction();
        if (isset($payload['id'])) {
            $schema->setId($payload['id']);
        }
        if (isset($payload['description'])) {
            $schema->setDescription($payload['description']);
        }
        if (isset($payload['amount'])) {
            $schema->setAmount($payload['amount']);
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
