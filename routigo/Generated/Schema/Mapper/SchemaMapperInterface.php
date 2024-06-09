<?php

declare(strict_types=1);
namespace Generated\Schema\Mapper;

use Generated\Schema\SerializableInterface;

interface SchemaMapperInterface
{
    /**
     * @return SerializableInterface
     */
    public function toSchema(array $payload);
}
