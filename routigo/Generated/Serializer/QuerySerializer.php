<?php

declare(strict_types=1);
namespace Generated\Serializer;

use DateTimeInterface;
use Generated\Request\RequestInterface;
use Generated\Schema\SerializableInterface;
use JsonSerializable;

class QuerySerializer
{
    public function serializeRequest(RequestInterface $request) : string
    {
        $queryParameters = [];
        foreach ($request->getRawQueryParameters() as $name => $value) {
            if ($value === null) {
                continue;
            }
            if ($value instanceof DateTimeInterface) {
                $value = $value->format(DateTimeInterface::RFC3339);
            } elseif ($value instanceof SerializableInterface) {
                $value = $value->toArray();
            } elseif ($value instanceof JsonSerializable) {
                $value = $value->jsonSerialize();
            }
            $queryParameters[$name] = $value;
        }
        return http_build_query($queryParameters, '', '&', PHP_QUERY_RFC3986);
    }
}
