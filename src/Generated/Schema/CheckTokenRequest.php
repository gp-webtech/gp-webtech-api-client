<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema;

use JsonSerializable;

class CheckTokenRequest implements SerializableInterface, JsonSerializable
{
    private ?string $token = null;
    private array $optionalPropertyChanged = array('token' => false);
    /**
     * @param string $token
     * @return self
    */
    public function setToken(string $token) : self
    {
        $this->token = $token;
        $this->optionalPropertyChanged['token'] = true;
        return $this;
    }
    /**
     * @return bool
    */
    public function hasToken() : bool
    {
        return $this->optionalPropertyChanged['token'];
    }
    /**
     * @return string|null
    */
    public function getToken() : ?string
    {
        return $this->token;
    }
    /**
     * @return array
    */
    public function toArray() : array
    {
        $fields = array();
        if ($this->hasToken()) {
            $fields['token'] = $this->token;
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
