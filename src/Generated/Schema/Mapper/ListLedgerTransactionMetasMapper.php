<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\ListLedgerTransactionMetas;

class ListLedgerTransactionMetasMapper implements SchemaMapperInterface
{
    /**
     * @param array $payload
     * @return ListLedgerTransactionMetas
    */
    public function toSchema(array $payload) : ListLedgerTransactionMetas
    {
        return new ListLedgerTransactionMetas($payload);
    }
}
