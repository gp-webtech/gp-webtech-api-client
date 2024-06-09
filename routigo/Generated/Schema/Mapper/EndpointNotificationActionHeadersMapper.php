<?php

namespace Generated\Schema\Mapper;

use Generated\Schema\EndpointNotificationActionHeaders;

class EndpointNotificationActionHeadersMapper implements SchemaMapperInterface
{
    /**
     * @param array $payload
     * @return EndpointNotificationActionHeaders
    */
    public function toSchema(array $payload) : EndpointNotificationActionHeaders
    {
        return new EndpointNotificationActionHeaders($payload);
    }
}
