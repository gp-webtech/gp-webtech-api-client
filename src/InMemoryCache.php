<?php

namespace Vanengers\GpWebtechApiPhpClient;

use Symfony\Component\Cache\Adapter\ArrayAdapter;

class InMemoryCache
{
    private array $cache = [];
    public function set(string $key, $value)
    {
        $this->cache[$key] = $value;
    }

    public function get(string $key)
    {
        return $this->cache[$key] ?? null;
    }

    public function has(string $key): bool
    {
        return isset($this->cache[$key]);
    }
}