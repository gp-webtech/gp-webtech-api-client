<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Request;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\UpdateJournal;
use DoclerLabs\ApiClientException\RequestValidationException;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\AuthenticationCredentials;

class UpdateJournalRequest implements RequestInterface
{
    private string $id;
    private UpdateJournal $updateJournal;
    private string $contentType = 'application/json';
    private ?string $bearerToken = '';
    /**
     * @param string $id
     * @param UpdateJournal $updateJournal
    */
    public function __construct(string $id, UpdateJournal $updateJournal)
    {
        if (preg_match('/\\d+/', $id) !== 1) {
            throw new RequestValidationException(sprintf('Invalid %s value. Given: `%s`. Pattern is \\d+.', 'id', $id));
        }
        $this->id = $id;
        $this->updateJournal = $updateJournal;
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
        return strtr('journal/{id}', array('{id}' => $this->id));
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
     * @return UpdateJournal
    */
    public function getBody()
    {
        return $this->updateJournal;
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
