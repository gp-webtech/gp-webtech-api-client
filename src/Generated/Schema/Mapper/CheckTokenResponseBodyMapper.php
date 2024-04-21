<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema\Mapper;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\CheckTokenResponseBody;

class CheckTokenResponseBodyMapper implements SchemaMapperInterface
{
    /**
     * @param array $payload
     * @return CheckTokenResponseBody
    */
    public function toSchema(array $payload) : CheckTokenResponseBody
    {
        $schema = new CheckTokenResponseBody();
        if (isset($payload['valid'])) {
            $schema->setValid($payload['valid']);
        }
        return $schema;
    }
}
