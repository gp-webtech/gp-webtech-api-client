<?php

namespace VanengersGpWebtechApiPhpClient\Request;

use DoclerLabs\ApiClientException\RequestValidationException;
use VanengersGpWebtechApiPhpClient\Request\AuthenticationCredentials;

class DeleteUserRequest implements RequestInterface
{
    private string $id;
    private string $contentType = '';
    private ?string $bearerToken = '';
    /**
     * @param string $id
    */
    public function __construct(string $id)
    {
        if (preg_match('/\\d+/', $id) !== 1) {
            throw new RequestValidationException(sprintf('Invalid %s value. Given: `%s`. Pattern is \\d+.', 'id', $id));
        }
        $this->id = $id;
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
        return strtr('user/{id}', array('{id}' => $this->id));
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
