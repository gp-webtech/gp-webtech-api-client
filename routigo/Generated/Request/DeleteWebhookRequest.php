<?php

namespace Generated\Request;

use Generated\Request\AuthenticationCredentials;

class DeleteWebhookRequest implements RequestInterface
{
    private string $webhookId;
    private string $contentType = '';
    private ?string $bearerToken = '';
    /**
     * @param string $webhookId
    */
    public function __construct(string $webhookId)
    {
        $this->webhookId = $webhookId;
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
        return 'DELETE';
    }
    /**
     * @return string
    */
    public function getRoute() : string
    {
        return strtr('v2/webhooks/{webhookId}', array('{webhookId}' => $this->webhookId));
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
        return array('Authorization' => sprintf('Bearer %s', $this->bearerToken));
    }
    public function getBody()
    {
        return null;
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
