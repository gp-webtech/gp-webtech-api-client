<?php

declare(strict_types=1);
namespace VanengersGpWebtechApiPhpClient\Schema;

interface SerializableInterface
{
    public function toArray() : array;
}
