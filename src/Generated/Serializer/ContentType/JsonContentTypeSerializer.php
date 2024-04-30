<?php

declare(strict_types=1);
namespace VanengersGpWebtechApiPhpClient\Serializer\ContentType;

class JsonContentTypeSerializer extends AbstractJsonContentTypeSerializer
{
    public const MIME_TYPE = 'application/json';
    public function getMimeType() : string
    {
        return self::MIME_TYPE;
    }
}
