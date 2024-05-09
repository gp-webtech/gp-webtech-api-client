<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Request;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\UpdateLedgerTransaction;
use DoclerLabs\ApiClientException\RequestValidationException;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\AuthenticationCredentials;

class UpdateLedgerTransactionRequest implements RequestInterface
{
    private string $id;
    private UpdateLedgerTransaction $updateLedgerTransaction;
    private string $contentType = 'application/json';
    private ?string $bearerToken = '';
    /**
     * @param string $id
     * @param UpdateLedgerTransaction $updateLedgerTransaction
    */
    public function __construct(string $id, UpdateLedgerTransaction $updateLedgerTransaction)
    {
        if (preg_match('/\\d+/', $id) !== 1) {
            throw new RequestValidationException(sprintf('Invalid %s value. Given: `%s`. Pattern is \\d+.', 'id', $id));
        }
        $this->id = $id;
        $this->updateLedgerTransaction = $updateLedgerTransaction;
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
        return 'PUT';
    }
    /**
     * @return string
    */
    public function getRoute() : string
    {
        return strtr('ledger_transaction/{id}', array('{id}' => $this->id));
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
     * @return UpdateLedgerTransaction
    */
    public function getBody()
    {
        return $this->updateLedgerTransaction;
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
