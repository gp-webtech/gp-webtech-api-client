<?php

namespace Generated\Schema\Mapper;

use Generated\Schema\EndpointNotificationAction;
use DoclerLabs\ApiClientException\UnexpectedResponseBodyException;

class EndpointNotificationActionMapper implements SchemaMapperInterface
{
    private EndpointNotificationActionHeadersMapper $endpointNotificationActionHeadersMapper;
    private EndpointNotificationActionQueryParametersMapper $endpointNotificationActionQueryParametersMapper;
    /**
     * @param EndpointNotificationActionHeadersMapper $endpointNotificationActionHeadersMapper
     * @param EndpointNotificationActionQueryParametersMapper $endpointNotificationActionQueryParametersMapper
    */
    public function __construct(EndpointNotificationActionHeadersMapper $endpointNotificationActionHeadersMapper, EndpointNotificationActionQueryParametersMapper $endpointNotificationActionQueryParametersMapper)
    {
        $this->endpointNotificationActionHeadersMapper = $endpointNotificationActionHeadersMapper;
        $this->endpointNotificationActionQueryParametersMapper = $endpointNotificationActionQueryParametersMapper;
    }
    /**
     * @param array $payload
     * @return EndpointNotificationAction
     * @throws UnexpectedResponseBodyException
    */
    public function toSchema(array $payload) : EndpointNotificationAction
    {
        $missingFields = implode(', ', array_diff(array('name', 'url'), array_keys($payload)));
        if (!empty($missingFields)) {
            throw new UnexpectedResponseBodyException('Required attributes for `EndpointNotificationAction` missing in the response body: ' . $missingFields);
        }
        $schema = new EndpointNotificationAction($payload['name'], $payload['url']);
        if (isset($payload['headers'])) {
            $schema->setHeaders($this->endpointNotificationActionHeadersMapper->toSchema($payload['headers']));
        }
        if (isset($payload['queryParameters'])) {
            $schema->setQueryParameters($this->endpointNotificationActionQueryParametersMapper->toSchema($payload['queryParameters']));
        }
        if (isset($payload['minutesToLive'])) {
            $schema->setMinutesToLive($payload['minutesToLive']);
        }
        if (isset($payload['secondsDelayBeforeRetry'])) {
            $schema->setSecondsDelayBeforeRetry($payload['secondsDelayBeforeRetry']);
        }
        if (isset($payload['supplierToFilterOn'])) {
            $schema->setSupplierToFilterOn($payload['supplierToFilterOn']);
        }
        return $schema;
    }
}
