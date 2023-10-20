<?php

declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace Vanengers\GpWebtechApiPhpClient\Generated\src;

use DoclerLabs\ApiClientException\Factory\ResponseExceptionFactory;
use Pimple\Container;
use Vanengers\GpWebtechApiPhpClient\Generated\src\Request\Mapper\GuzzleRequestMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\src\Request\Mapper\RequestMapperInterface;
use Vanengers\GpWebtechApiPhpClient\Generated\src\Response\ResponseHandler;
use Vanengers\GpWebtechApiPhpClient\Generated\src\Schema\Mapper\ListUserCollectionMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\src\Schema\Mapper\ListUserMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\src\Schema\Mapper\ListUsersResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\src\Schema\Mapper\LoginCheckPostResponseBodyMapper;
use Vanengers\GpWebtechApiPhpClient\Generated\src\Serializer\BodySerializer;
use Vanengers\GpWebtechApiPhpClient\Generated\src\Serializer\ContentType\JsonContentTypeSerializer;
use Vanengers\GpWebtechApiPhpClient\Generated\src\Serializer\QuerySerializer;

class ServiceProvider
{
    public function register(Container $container): void
    {
        $container[BodySerializer::class] = static function (): BodySerializer {
            return (new BodySerializer())->add(new JsonContentTypeSerializer());
        };
        $container[QuerySerializer::class] = static function (): QuerySerializer {
            return new QuerySerializer();
        };
        $container[ResponseHandler::class] = static function () use ($container): ResponseHandler {
            return new ResponseHandler($container[BodySerializer::class], new ResponseExceptionFactory());
        };
        $container[RequestMapperInterface::class] = static function () use ($container): RequestMapperInterface {
            return new GuzzleRequestMapper($container[BodySerializer::class], $container[QuerySerializer::class]);
        };
        $container[ListUsersResponseBodyMapper::class] = static function () use ($container): ListUsersResponseBodyMapper {
            return new ListUsersResponseBodyMapper($container[ListUserCollectionMapper::class]);
        };
        $container[ListUserCollectionMapper::class] = static function () use ($container): ListUserCollectionMapper {
            return new ListUserCollectionMapper($container[ListUserMapper::class]);
        };
        $container[ListUserMapper::class] = static function () use ($container): ListUserMapper {
            return new ListUserMapper();
        };
        $container[LoginCheckPostResponseBodyMapper::class] = static function () use ($container): LoginCheckPostResponseBodyMapper {
            return new LoginCheckPostResponseBodyMapper();
        };
    }
}