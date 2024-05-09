<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema;

use JsonSerializable;

class ListLedgerTransaction implements SerializableInterface, JsonSerializable
{
    private ?int $id = null;
    private ?string $description = null;
    private ?float $amount = null;
    private ?ListLedger $ledger = null;
    private ?string $createdAt = null;
    private ?string $updatedAt = null;
    private array $optionalPropertyChanged = array('id' => false, 'description' => false, 'amount' => false, 'ledger' => false, 'createdAt' => false, 'updatedAt' => false);
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
     * @param string $description
     * @return self
    */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
        $this->optionalPropertyChanged['description'] = true;
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
     * @param ListLedger $ledger
     * @return self
    */
    public function setLedger(ListLedger $ledger) : self
    {
        $this->ledger = $ledger;
        $this->optionalPropertyChanged['ledger'] = true;
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
    public function hasDescription() : bool
    {
        return $this->optionalPropertyChanged['description'];
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
    public function hasLedger() : bool
    {
        return $this->optionalPropertyChanged['ledger'];
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
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @return float|null
    */
    public function getAmount() : ?float
    {
        return $this->amount;
    }
    /**
     * @return ListLedger|null
    */
    public function getLedger() : ?ListLedger
    {
        return $this->ledger;
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
        if ($this->hasDescription()) {
            $fields['description'] = $this->description;
        }
        if ($this->hasAmount()) {
            $fields['amount'] = $this->amount;
        }
        if ($this->hasLedger()) {
            $fields['ledger'] = $this->ledger->toArray();
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
