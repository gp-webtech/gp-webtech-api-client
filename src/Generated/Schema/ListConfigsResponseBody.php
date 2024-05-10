<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema;

use JsonSerializable;

class ListConfigsResponseBody implements SerializableInterface, JsonSerializable
{
    private ?Pagination $pagination = null;
    private ?ListConfigCollection $data = null;
    private array $optionalPropertyChanged = array('pagination' => false, 'data' => false);
    /**
     * @param Pagination $pagination
     * @return self
    */
    public function setPagination(Pagination $pagination) : self
    {
        $this->pagination = $pagination;
        $this->optionalPropertyChanged['pagination'] = true;
        return $this;
    }
    /**
     * @param ListConfigCollection $data
     * @return self
    */
    public function setData(ListConfigCollection $data) : self
    {
        $this->data = $data;
        $this->optionalPropertyChanged['data'] = true;
        return $this;
    }
    /**
     * @return bool
    */
    public function hasPagination() : bool
    {
        return $this->optionalPropertyChanged['pagination'];
    }
    /**
     * @return bool
    */
    public function hasData() : bool
    {
        return $this->optionalPropertyChanged['data'];
    }
    /**
     * @return Pagination|null
    */
    public function getPagination() : ?Pagination
    {
        return $this->pagination;
    }
    /**
     * @return ListConfigCollection|null
    */
    public function getData() : ?ListConfigCollection
    {
        return $this->data;
    }
    /**
     * @return array
    */
    public function toArray() : array
    {
        $fields = array();
        if ($this->hasPagination()) {
            $fields['pagination'] = $this->pagination->toArray();
        }
        if ($this->hasData()) {
            $fields['data'] = $this->data->toArray();
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
