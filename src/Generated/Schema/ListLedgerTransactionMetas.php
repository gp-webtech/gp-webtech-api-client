<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema;

use JsonSerializable;
use stdClass;

class ListLedgerTransactionMetas implements SerializableInterface, JsonSerializable
{
    private stdClass $data;
    public function __construct(array $data)
    {
        $this->data = (object) $data;
    }
    /**
     * @return stdClass
    */
    public function getData() : stdClass
    {
        return $this->data;
    }
    /**
     * @return array
    */
    public function toArray() : array
    {
        return (array) $this->data;
    }
    /**
     * @return array
    */
    public function jsonSerialize() : array
    {
        return $this->toArray();
    }
}
