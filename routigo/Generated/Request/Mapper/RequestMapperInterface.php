<?php

declare(strict_types=1);
namespace Generated\Request\Mapper;

use Generated\Request\RequestInterface;
use Psr\Http\Message\RequestInterface as PsrRequestInterface;

interface RequestMapperInterface
{
    public function map(RequestInterface $request) : PsrRequestInterface;
}
