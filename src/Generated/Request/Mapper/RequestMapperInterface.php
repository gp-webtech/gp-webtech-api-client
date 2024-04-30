<?php

declare(strict_types=1);
namespace VanengersGpWebtechApiPhpClient\Request\Mapper;

use VanengersGpWebtechApiPhpClient\Request\RequestInterface;
use Psr\Http\Message\RequestInterface as PsrRequestInterface;

interface RequestMapperInterface
{
    public function map(RequestInterface $request) : PsrRequestInterface;
}
