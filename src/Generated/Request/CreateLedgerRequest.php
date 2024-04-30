<?php

namespace VanengersGpWebtechApiPhpClient\Request;

use VanengersGpWebtechApiPhpClient\Schema\CreateLedger;
use VanengersGpWebtechApiPhpClient\Request\AuthenticationCredentials;

class CreateLedgerRequest implements RequestInterface
{
    private CreateLedger $createLedger;
    private string $contentType = 'application/json';
    private ?string $bearerToken = '';
    /**
     * @param CreateLedger $createLedger
    */
    public function __construct(CreateLedger $createLedger)
    {
        $this->createLedger = $createLedger;
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
        return 'ledger';
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
     * @return CreateLedger
    */
    public function getBody()
    {
        return $this->createLedger;
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
