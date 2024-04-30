<?php

declare(strict_types=1);
namespace VanengersGpWebtechApiPhpClient\Schema\Mapper;

use VanengersGpWebtechApiPhpClient\Schema\SerializableInterface;

interface SchemaMapperInterface
{
    /**
     * @return SerializableInterface
     */
    public function toSchema(array $payload);
}
