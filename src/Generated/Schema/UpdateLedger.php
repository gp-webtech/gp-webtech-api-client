<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema;

use JsonSerializable;

class UpdateLedger implements SerializableInterface, JsonSerializable
{
    private ?string $name = null;
    private ?float $amount = null;
    private ?bool $type = null;
    private ?array $journals = null;
    private array $optionalPropertyChanged = array('name' => false, 'amount' => false, 'type' => false, 'journals' => false);
    /**
     * @param string $name
     * @return self
    */
    public function setName(string $name) : self
    {
        $this->name = $name;
        $this->optionalPropertyChanged['name'] = true;
        return $this;
    }
    /**
     * @param float $amount
     * @return self
    */
    public function setAmount(float $amount) : self
    {
        $this->amount = $amount;
        $this->optionalPropertyChanged['amount'] = true;
        return $this;
    }
    /**
     * @param bool $type
     * @return self
    */
    public function setType(bool $type) : self
    {
        $this->type = $type;
        $this->optionalPropertyChanged['type'] = true;
        return $this;
    }
    /**
     * @param float[] $journals
     * @return self
    */
    public function setJournals(array $journals) : self
    {
        $this->journals = $journals;
        $this->optionalPropertyChanged['journals'] = true;
        return $this;
    }
    /**
     * @return bool
    */
    public function hasName() : bool
    {
        return $this->optionalPropertyChanged['name'];
    }
    /**
     * @return bool
    */
    public function hasAmount() : bool
    {
        return $this->optionalPropertyChanged['amount'];
    }
    /**
     * @return bool
    */
    public function hasType() : bool
    {
        return $this->optionalPropertyChanged['type'];
    }
    /**
     * @return bool
    */
    public function hasJournals() : bool
    {
        return $this->optionalPropertyChanged['journals'];
    }
    /**
     * @return string|null
    */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @return float|null
    */
    public function getAmount() : ?float
    {
        return $this->amount;
    }
    /**
     * @return bool|null
    */
    public function getType() : ?bool
    {
        return $this->type;
    }
    /**
     * @return float[]|null
    */
    public function getJournals() : ?array
    {
        return $this->journals;
    }
    /**
     * @return array
    */
    public function toArray() : array
    {
        $fields = array();
        if ($this->hasName()) {
            $fields['name'] = $this->name;
        }
        if ($this->hasAmount()) {
            $fields['amount'] = $this->amount;
        }
        if ($this->hasType()) {
            $fields['type'] = $this->type;
        }
        if ($this->hasJournals()) {
            $fields['journals'] = $this->journals;
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
