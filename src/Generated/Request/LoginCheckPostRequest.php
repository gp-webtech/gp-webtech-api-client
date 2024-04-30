<?php

namespace VanengersGpWebtechApiPhpClient\Request;

use VanengersGpWebtechApiPhpClient\Schema\LoginCheckPostRequestBody;
use VanengersGpWebtechApiPhpClient\Request\AuthenticationCredentials;

class LoginCheckPostRequest implements RequestInterface
{
    private LoginCheckPostRequestBody $loginCheckPostRequestBody;
    private string $contentType = 'application/json';
    private ?string $bearerToken = '';
    /**
     * @param LoginCheckPostRequestBody $loginCheckPostRequestBody
    */
    public function __construct(LoginCheckPostRequestBody $loginCheckPostRequestBody)
    {
        $this->loginCheckPostRequestBody = $loginCheckPostRequestBody;
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
        return 'login';
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
        return array('Content-Type' => $this->contentType);
    }
    /**
     * @return LoginCheckPostRequestBody
    */
    public function getBody()
    {
        return $this->loginCheckPostRequestBody;
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
