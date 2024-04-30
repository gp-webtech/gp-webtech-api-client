<?php

namespace VanengersGpWebtechApiPhpClient\Schema\Mapper;

use VanengersGpWebtechApiPhpClient\Schema\CheckTokenResponseObject;

class CheckTokenResponseObjectMapper implements SchemaMapperInterface
{
    /**
     * @param array $payload
     * @return CheckTokenResponseObject
    */
    public function toSchema(array $payload) : CheckTokenResponseObject
    {
        $schema = new CheckTokenResponseObject();
        if (isset($payload['token'])) {
            $schema->setToken($payload['token']);
        }
        return $schema;
    }
}
