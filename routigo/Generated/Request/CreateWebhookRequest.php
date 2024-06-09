<?php

namespace Generated\Request;

use Generated\Schema\SaveWebhookConfig;
use Generated\Request\AuthenticationCredentials;

class CreateWebhookRequest implements RequestInterface
{
    private SaveWebhookConfig $saveWebhookConfig;
    private string $contentType = 'application/json';
    private ?string $bearerToken = '';
    /**
     * @param SaveWebhookConfig $saveWebhookConfig
    */
    public function __construct(SaveWebhookConfig $saveWebhookConfig)
    {
        $this->saveWebhookConfig = $saveWebhookConfig;
    }
    /**
     * @return string
    */
    public function getContentType() : string
    {
        return $this->contentType;
    }
    /**
     * @return string
    */
    public function getMethod() : string
    {
        return 'POST';
    }
    /**
     * @return string
    */
    public function getRoute() : string
    {
        return 'v2/webhooks';
    }
    /**
     * @return array
    */
    public function getQueryParameters() : array
    {
        return array();
    }
    /**
     * @return array
    */
    public function getRawQueryParameters() : array
    {
        return array();
    }
    /**
     * @return array
    */
    public function getCookies() : array
    {
        return array();
    }
    /**
     * @return array
    */
    public function getHeaders() : array
    {
        return array('Authorization' => sprintf('Bearer %s', $this->bearerToken), 'Content-Type' => $this->contentType);
    }
    /**
     * @return SaveWebhookConfig
    */
    public function getBody()
    {
        return $this->saveWebhookConfig;
    }
    /**
     * @param string|null $bearerToken
     * @return self
    */
    public function setBearerToken(?string $bearerToken) : self
    {
        $this->bearerToken = $bearerToken;
        return $this;
    }
    public function getBearerToken() : string
    {
        return $this->bearerToken;
    }
}
