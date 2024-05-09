<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema;

use JsonSerializable;

class UpdateLedgerTransaction implements SerializableInterface, JsonSerializable
{
    private ?string $description = null;
    private ?float $amount = null;
    private ?float $ledger = null;
    private ?UpdateLedgerTransactionMetas $metas = null;
    private array $optionalPropertyChanged = array('description' => false, 'amount' => false, 'ledger' => false, 'metas' => false);
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
     * @param float $ledger
     * @return self
    */
    public function setLedger(float $ledger) : self
    {
        $this->ledger = $ledger;
        $this->optionalPropertyChanged['ledger'] = true;
        return $this;
    }
    /**
     * @param UpdateLedgerTransactionMetas $metas
     * @return self
    */
    public function setMetas(UpdateLedgerTransactionMetas $metas) : self
    {
        $this->metas = $metas;
        $this->optionalPropertyChanged['metas'] = true;
        return $this;
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
    public function hasMetas() : bool
    {
        return $this->optionalPropertyChanged['metas'];
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
     * @return float|null
    */
    public function getLedger() : ?float
    {
        return $this->ledger;
    }
    /**
     * @return UpdateLedgerTransactionMetas|null
    */
    public function getMetas() : ?UpdateLedgerTransactionMetas
    {
        return $this->metas;
    }
    /**
     * @return array
    */
    public function toArray() : array
    {
        $fields = array();
        if ($this->hasDescription()) {
            $fields['description'] = $this->description;
        }
        if ($this->hasAmount()) {
            $fields['amount'] = $this->amount;
        }
        if ($this->hasLedger()) {
            $fields['ledger'] = $this->ledger;
        }
        if ($this->hasMetas()) {
            $fields['metas'] = $this->metas->toArray();
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
