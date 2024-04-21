<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema;

use JsonSerializable;

class CheckTokenResponseBody implements SerializableInterface, JsonSerializable
{
    private ?bool $valid = null;
    private array $optionalPropertyChanged = array('valid' => false);
    /**
     * @param bool $valid
     * @return self
    */
    public function setValid(bool $valid) : self
    {
        $this->valid = $valid;
        $this->optionalPropertyChanged['valid'] = true;
        return $this;
    }
    /**
     * @return bool
    */
    public function hasValid() : bool
    {
        return $this->optionalPropertyChanged['valid'];
    }
    /**
     * @return bool|null
    */
    public function getValid() : ?bool
    {
        return $this->valid;
    }
    /**
     * @return array
    */
    public function toArray() : array
    {
        $fields = array();
        if ($this->hasValid()) {
            $fields['valid'] = $this->valid;
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
