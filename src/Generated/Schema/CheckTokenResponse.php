<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema;

use JsonSerializable;

class CheckTokenResponse implements SerializableInterface, JsonSerializable
{
    private ?bool $token = null;
    private array $optionalPropertyChanged = array('token' => false);
    /**
     * @param bool $token
     * @return self
    */
    public function setToken(bool $token) : self
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
     * @return bool|null
    */
    public function getToken() : ?bool
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
