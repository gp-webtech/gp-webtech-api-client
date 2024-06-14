<?php

namespace Vanengers\GpWebtechApiPhpClient\Generated\Schema;

use Countable;
use IteratorAggregate;
use JsonSerializable;
use ArrayIterator;

class ListJournalWithAssociationsCollection implements IteratorAggregate, SerializableInterface, Countable, JsonSerializable
{
    private array $items;
    /**
     * @param ListJournalWithAssociations[] $items
    */
    public function __construct(ListJournalWithAssociations ...$items)
    {
        $this->items = $items;
    }
    /**
     * @return array
    */
    public function toArray() : array
    {
        $return = array();
        foreach ($this->items as $item) {
            $return[] = $item->toArray();
        }
        return $return;
    }
    /**
     * @return array
    */
    public function jsonSerialize() : array
    {
        return $this->toArray();
    }
    /**
     * @return ListJournalWithAssociations[]
    */
    public function getIterator() : ArrayIterator
    {
        return new ArrayIterator($this->items);
    }
    /**
     * @return int
    */
    public function count() : int
    {
        return count($this->items);
    }
    /**
     * @return ListJournalWithAssociations|null
    */
    public function first() : ?ListJournalWithAssociations
    {
        $first = reset($this->items);
        if ($first === false) {
            return null;
        }
        return $first;
    }
}
