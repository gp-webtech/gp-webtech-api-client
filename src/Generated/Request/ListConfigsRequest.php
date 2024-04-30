<?php

namespace VanengersGpWebtechApiPhpClient\Request;

use VanengersGpWebtechApiPhpClient\Schema\SerializableInterface;
use VanengersGpWebtechApiPhpClient\Request\AuthenticationCredentials;

class ListConfigsRequest implements RequestInterface
{
    public const ORDER_BY_ID = 'id';
    public const ORDER_BY_KEY = 'key';
    public const ORDER_BY_DOMAIN = 'domain';
    public const ORDER_BY_VALUE = 'value';
    public const ORDER_BY_CREATED_AT = 'createdAt';
    public const ORDER_BY_UPDATED_AT = 'updatedAt';
    public const ORDER_WAY_ASC = 'ASC';
    public const ORDER_WAY_DESC = 'DESC';
    private ?int $page = null;
    private ?string $orderBy = null;
    private ?string $orderWay = null;
    private ?string $filtersId = null;
    private ?string $filtersKey = null;
    private ?string $filtersDomain = null;
    private ?string $filtersValue = null;
    private ?string $filtersCreatedAt = null;
    private ?string $filtersUpdatedAt = null;
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
     * @param int $page
     * @return self
    */
    public function setPage(int $page) : self
    {
        $this->page = $page;
        return $this;
    }
    /**
     * @param string $orderBy
     * @return self
    */
    public function setOrderBy(string $orderBy) : self
    {
        $this->orderBy = $orderBy;
        return $this;
    }
    /**
     * @param string $orderWay
     * @return self
    */
    public function setOrderWay(string $orderWay) : self
    {
        $this->orderWay = $orderWay;
        return $this;
    }
    /**
     * @param string $filtersId
     * @return self
    */
    public function setFiltersId(string $filtersId) : self
    {
        $this->filtersId = $filtersId;
        return $this;
    }
    /**
     * @param string $filtersKey
     * @return self
    */
    public function setFiltersKey(string $filtersKey) : self
    {
        $this->filtersKey = $filtersKey;
        return $this;
    }
    /**
     * @param string $filtersDomain
     * @return self
    */
    public function setFiltersDomain(string $filtersDomain) : self
    {
        $this->filtersDomain = $filtersDomain;
        return $this;
    }
    /**
     * @param string $filtersValue
     * @return self
    */
    public function setFiltersValue(string $filtersValue) : self
    {
        $this->filtersValue = $filtersValue;
        return $this;
    }
    /**
     * @param string $filtersCreatedAt
     * @return self
    */
    public function setFiltersCreatedAt(string $filtersCreatedAt) : self
    {
        $this->filtersCreatedAt = $filtersCreatedAt;
        return $this;
    }
    /**
     * @param string $filtersUpdatedAt
     * @return self
    */
    public function setFiltersUpdatedAt(string $filtersUpdatedAt) : self
    {
        $this->filtersUpdatedAt = $filtersUpdatedAt;
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
        return 'config';
    }
    /**
     * @return array
    */
    public function getQueryParameters() : array
    {
        return array_map(static function ($value) {
            return $value instanceof SerializableInterface ? $value->toArray() : $value;
        }, array_filter(array('page' => $this->page, 'orderBy' => $this->orderBy, 'orderWay' => $this->orderWay, 'filters[id]' => $this->filtersId, 'filters[key]' => $this->filtersKey, 'filters[domain]' => $this->filtersDomain, 'filters[value]' => $this->filtersValue, 'filters[createdAt]' => $this->filtersCreatedAt, 'filters[updatedAt]' => $this->filtersUpdatedAt), static function ($value) {
            return null !== $value;
        }));
    }
    /**
     * @return array
    */
    public function getRawQueryParameters() : array
    {
        return array('page' => $this->page, 'orderBy' => $this->orderBy, 'orderWay' => $this->orderWay, 'filters[id]' => $this->filtersId, 'filters[key]' => $this->filtersKey, 'filters[domain]' => $this->filtersDomain, 'filters[value]' => $this->filtersValue, 'filters[createdAt]' => $this->filtersCreatedAt, 'filters[updatedAt]' => $this->filtersUpdatedAt);
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
