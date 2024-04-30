<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema;

use JsonSerializable;

class ListLedger implements SerializableInterface, JsonSerializable
{
    private ?int $id = null;
    private ?string $name = null;
    private ?float $amount = null;
    private ?bool $type = null;
    private ?string $createdAt = null;
    private ?string $updatedAt = null;
    private array $optionalPropertyChanged = array('id' => false, 'name' => false, 'amount' => false, 'type' => false, 'createdAt' => false, 'updatedAt' => false);
    /**
     * @param int $id
     * @return self
    */
    public function setId(int $id) : self
    {
        $this->id = $id;
        $this->optionalPropertyChanged['id'] = true;
        return $this;
    }
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
     * @param string $createdAt
     * @return self
    */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        $this->optionalPropertyChanged['createdAt'] = true;
        return $this;
    }
    /**
     * @param string $updatedAt
     * @return self
    */
    public function setUpdatedAt(string $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        $this->optionalPropertyChanged['updatedAt'] = true;
        return $this;
    }
    /**
     * @return bool
    */
    public function hasId() : bool
    {
        return $this->optionalPropertyChanged['id'];
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
    public function hasCreatedAt() : bool
    {
        return $this->optionalPropertyChanged['createdAt'];
    }
    /**
     * @return bool
    */
    public function hasUpdatedAt() : bool
    {
        return $this->optionalPropertyChanged['updatedAt'];
    }
    /**
     * @return int|null
    */
    public function getId() : ?int
    {
        return $this->id;
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
     * @return string|null
    */
    public function getCreatedAt() : ?string
    {
        return $this->createdAt;
    }
    /**
     * @return string|null
    */
    public function getUpdatedAt() : ?string
    {
        return $this->updatedAt;
    }
    /**
     * @return array
    */
    public function toArray() : array
    {
        $fields = array();
        if ($this->hasId()) {
            $fields['id'] = $this->id;
        }
        if ($this->hasName()) {
            $fields['name'] = $this->name;
        }
        if ($this->hasAmount()) {
            $fields['amount'] = $this->amount;
        }
        if ($this->hasType()) {
            $fields['type'] = $this->type;
        }
        if ($this->hasCreatedAt()) {
            $fields['created_at'] = $this->createdAt;
        }
        if ($this->hasUpdatedAt()) {
            $fields['updated_at'] = $this->updatedAt;
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
