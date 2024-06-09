<?php

namespace Generated\Schema\Mapper;

use Generated\Schema\WebhookConfig;
use DoclerLabs\ApiClientException\UnexpectedResponseBodyException;

class WebhookConfigMapper implements SchemaMapperInterface
{
    private EndpointNotificationActionMapper $endpointNotificationActionMapper;
    /**
     * @param EndpointNotificationActionMapper $endpointNotificationActionMapper
    */
    public function __construct(EndpointNotificationActionMapper $endpointNotificationActionMapper)
    {
        $this->endpointNotificationActionMapper = $endpointNotificationActionMapper;
    }
    /**
     * @param array $payload
     * @return WebhookConfig
     * @throws UnexpectedResponseBodyException
    */
    public function toSchema(array $payload) : WebhookConfig
    {
        $missingFields = implode(', ', array_diff(array('id', 'routigoEvent', 'routigoEventType', 'action'), array_keys($payload)));
        if (!empty($missingFields)) {
            throw new UnexpectedResponseBodyException('Required attributes for `WebhookConfig` missing in the response body: ' . $missingFields);
        }
        $schema = new WebhookConfig($payload['id'], $payload['routigoEvent'], $payload['routigoEventType'], $this->endpointNotificationActionMapper->toSchema($payload['action']));
        if (isset($payload['serviceCentres'])) {
            $schema->setServiceCentres($payload['serviceCentres']);
        }
        return $schema;
    }
}
