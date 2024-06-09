<?php

namespace Generated\Request;

use Generated\Schema\SerializableInterface;
use Generated\Request\AuthenticationCredentials;

class GetAllWebhooksRequest implements RequestInterface
{
    private ?string $event = null;
    private ?string $type = null;
    private string $contentType = '';
    private ?string $bearerToken = '';
    /**
     * @return string
    */
    public function getContentType() : string
    {
        return $this->contentType;
    }
    /**
     * @param string $event
     * @return self
    */
    public function setEvent(string $event) : self
    {
        $this->event = $event;
        return $this;
    }
    /**
     * @param string $type
     * @return self
    */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
    */
    public function getMethod() : string
    {
        return 'GET';
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
        return array_map(static function ($value) {
            return $value instanceof SerializableInterface ? $value->toArray() : $value;
        }, array_filter(array('event' => $this->event, 'type' => $this->type), static function ($value) {
            return null !== $value;
        }));
    }
    /**
     * @return array
    */
    public function getRawQueryParameters() : array
    {
        return array('event' => $this->event, 'type' => $this->type);
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
