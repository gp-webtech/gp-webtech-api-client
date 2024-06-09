<?php

namespace Generated\Schema;

use Countable;
use IteratorAggregate;
use JsonSerializable;
use ArrayIterator;

class WebhookConfigCollection implements IteratorAggregate, SerializableInterface, Countable, JsonSerializable
{
    private array $items;
    /**
     * @param WebhookConfig[] $items
    */
    public function __construct(WebhookConfig ...$items)
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
     * @return WebhookConfig[]
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
     * @return WebhookConfig|null
    */
    public function first() : ?WebhookConfig
    {
        $first = reset($this->items);
        if ($first === false) {
            return null;
        }
        return $first;
    }
}
