<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Request;

use Vanengers\GpWebtechApiPhpClient\Generated\Schema\CheckTokenRequest;
use Vanengers\GpWebtechApiPhpClient\Generated\Request\AuthenticationCredentials;

class CheckTokenRequest implements RequestInterface
{
    private CheckTokenRequest $checkTokenRequest;
    private string $contentType = 'application/json';
    private ?string $bearerToken = '';
    /**
     * @param CheckTokenRequest $checkTokenRequest
    */
    public function __construct(CheckTokenRequest $checkTokenRequest)
    {
        $this->checkTokenRequest = $checkTokenRequest;
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
        return 'check_token';
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
     * @return CheckTokenRequest
    */
    public function getBody()
    {
        return $this->checkTokenRequest;
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
