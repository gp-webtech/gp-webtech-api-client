<?php

namespace Generated\Schema\Mapper;

use Generated\Schema\WebhookConfigCollection;

class WebhookConfigCollectionMapper implements SchemaMapperInterface
{
    private WebhookConfigMapper $webhookConfigMapper;
    /**
     * @param WebhookConfigMapper $webhookConfigMapper
    */
    public function __construct(WebhookConfigMapper $webhookConfigMapper)
    {
        $this->webhookConfigMapper = $webhookConfigMapper;
    }
    /**
     * @param array $payload
     * @return WebhookConfigCollection
    */
    public function toSchema(array $payload) : WebhookConfigCollection
    {
        $items = array();
        foreach ($payload as $payloadItem) {
            $items[] = $this->webhookConfigMapper->toSchema($payloadItem);
        }
        return new WebhookConfigCollection(...$items);
    }
}
