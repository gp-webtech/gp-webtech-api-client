<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\CheckTokenResponse;

class CheckTokenResponseMapper implements SchemaMapperInterface
{
    /**
     * @param array $payload
     * @return CheckTokenResponse
    */
    public function toSchema(array $payload) : CheckTokenResponse
    {
        $schema = new CheckTokenResponse();
        if (isset($payload['token'])) {
            $schema->setToken($payload['token']);
        }
        return $schema;
    }
}
