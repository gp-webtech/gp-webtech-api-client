<?php

namespace Generated\Schema;

use JsonSerializable;

class EndpointNotificationAction implements SerializableInterface, JsonSerializable
{
    private string $name;
    private string $url;
    private ?EndpointNotificationActionHeaders $headers = null;
    private ?EndpointNotificationActionQueryParameters $queryParameters = null;
    private ?int $minutesToLive = null;
    private ?int $secondsDelayBeforeRetry = null;
    private ?string $supplierToFilterOn = null;
    private array $optionalPropertyChanged = array('headers' => false, 'queryParameters' => false, 'minutesToLive' => false, 'secondsDelayBeforeRetry' => false, 'supplierToFilterOn' => false);
    /**
     * @param string $name
     * @param string $url
    */
    public function __construct(string $name, string $url)
    {
        $this->name = $name;
        $this->url = $url;
    }
    /**
     * @param EndpointNotificationActionHeaders $headers
     * @return self
    */
    public function setHeaders(EndpointNotificationActionHeaders $headers) : self
    {
        $this->headers = $headers;
        $this->optionalPropertyChanged['headers'] = true;
        return $this;
    }
    /**
     * @param EndpointNotificationActionQueryParameters $queryParameters
     * @return self
    */
    public function setQueryParameters(EndpointNotificationActionQueryParameters $queryParameters) : self
    {
        $this->queryParameters = $queryParameters;
        $this->optionalPropertyChanged['queryParameters'] = true;
        return $this;
    }
    /**
     * @param int $minutesToLive
     * @return self
    */
    public function setMinutesToLive(int $minutesToLive) : self
    {
        $this->minutesToLive = $minutesToLive;
        $this->optionalPropertyChanged['minutesToLive'] = true;
        return $this;
    }
    /**
     * @param int $secondsDelayBeforeRetry
     * @return self
    */
    public function setSecondsDelayBeforeRetry(int $secondsDelayBeforeRetry) : self
    {
        $this->secondsDelayBeforeRetry = $secondsDelayBeforeRetry;
        $this->optionalPropertyChanged['secondsDelayBeforeRetry'] = true;
        return $this;
    }
    /**
     * @param string $supplierToFilterOn
     * @return self
    */
    public function setSupplierToFilterOn(string $supplierToFilterOn) : self
    {
        $this->supplierToFilterOn = $supplierToFilterOn;
        $this->optionalPropertyChanged['supplierToFilterOn'] = true;
        return $this;
    }
    /**
     * @return bool
    */
    public function hasHeaders() : bool
    {
        return $this->optionalPropertyChanged['headers'];
    }
    /**
     * @return bool
    */
    public function hasQueryParameters() : bool
    {
        return $this->optionalPropertyChanged['queryParameters'];
    }
    /**
     * @return bool
    */
    public function hasMinutesToLive() : bool
    {
        return $this->optionalPropertyChanged['minutesToLive'];
    }
    /**
     * @return bool
    */
    public function hasSecondsDelayBeforeRetry() : bool
    {
        return $this->optionalPropertyChanged['secondsDelayBeforeRetry'];
    }
    /**
     * @return bool
    */
    public function hasSupplierToFilterOn() : bool
    {
        return $this->optionalPropertyChanged['supplierToFilterOn'];
    }
    /**
     * @return string
    */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * @return string
    */
    public function getUrl() : string
    {
        return $this->url;
    }
    /**
     * @return EndpointNotificationActionHeaders|null
    */
    public function getHeaders() : ?EndpointNotificationActionHeaders
    {
        return $this->headers;
    }
    /**
     * @return EndpointNotificationActionQueryParameters|null
    */
    public function getQueryParameters() : ?EndpointNotificationActionQueryParameters
    {
        return $this->queryParameters;
    }
    /**
     * @return int|null
    */
    public function getMinutesToLive() : ?int
    {
        return $this->minutesToLive;
    }
    /**
     * @return int|null
    */
    public function getSecondsDelayBeforeRetry() : ?int
    {
        return $this->secondsDelayBeforeRetry;
    }
    /**
     * @return string|null
    */
    public function getSupplierToFilterOn() : ?string
    {
        return $this->supplierToFilterOn;
    }
    /**
     * @return array
    */
    public function toArray() : array
    {
        $fields = array();
        $fields['name'] = $this->name;
        $fields['url'] = $this->url;
        if ($this->hasHeaders()) {
            $fields['headers'] = $this->headers->toArray();
        }
        if ($this->hasQueryParameters()) {
            $fields['queryParameters'] = $this->queryParameters->toArray();
        }
        if ($this->hasMinutesToLive()) {
            $fields['minutesToLive'] = $this->minutesToLive;
        }
        if ($this->hasSecondsDelayBeforeRetry()) {
            $fields['secondsDelayBeforeRetry'] = $this->secondsDelayBeforeRetry;
        }
        if ($this->hasSupplierToFilterOn()) {
            $fields['supplierToFilterOn'] = $this->supplierToFilterOn;
        }
        return $fields;
    }
    /**
     * @return array
    */
    public function jsonSerialize() : array
    {
        return $this->toArray();
    }
}
