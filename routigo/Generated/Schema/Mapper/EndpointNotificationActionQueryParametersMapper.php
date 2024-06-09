<?php

namespace Generated\Schema\Mapper;

use Generated\Schema\EndpointNotificationActionQueryParameters;

class EndpointNotificationActionQueryParametersMapper implements SchemaMapperInterface
{
    /**
     * @param array $payload
     * @return EndpointNotificationActionQueryParameters
    */
    public function toSchema(array $payload) : EndpointNotificationActionQueryParameters
    {
        return new EndpointNotificationActionQueryParameters($payload);
    }
}
