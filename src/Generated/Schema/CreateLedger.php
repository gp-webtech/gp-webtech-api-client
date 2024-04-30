<?php

namespace VanengersGpWebtechApiPhpClient\Schema;

use JsonSerializable;

class CreateLedger implements SerializableInterface, JsonSerializable
{
    private ?string $name = null;
    private ?float $amount = null;
    private ?bool $type = null;
    private ?string $template = null;
    private array $optionalPropertyChanged = array('name' => false, 'amount' => false, 'type' => false, 'template' => false);
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
     * @param string $template
     * @return self
    */
    public function setTemplate(string $template) : self
    {
        $this->template = $template;
        $this->optionalPropertyChanged['template'] = true;
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
    public function hasTemplate() : bool
    {
        return $this->optionalPropertyChanged['template'];
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
    public function getTemplate() : ?string
    {
        return $this->template;
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
        if ($this->hasTemplate()) {
            $fields['template'] = $this->template;
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
