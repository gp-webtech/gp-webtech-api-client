<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Request;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\CreateLedgerTransaction;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\AuthenticationCredentials;

class CreateLedgerTransactionRequest implements RequestInterface
{
    private CreateLedgerTransaction $createLedgerTransaction;
    private string $contentType = 'application/json';
    private ?string $bearerToken = '';
    /**
     * @param CreateLedgerTransaction $createLedgerTransaction
    */
    public function __construct(CreateLedgerTransaction $createLedgerTransaction)
    {
        $this->createLedgerTransaction = $createLedgerTransaction;
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
        return 'ledger_transaction';
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
     * @return CreateLedgerTransaction
    */
    public function getBody()
    {
        return $this->createLedgerTransaction;
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
