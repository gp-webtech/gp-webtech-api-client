<?php

declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace Vanengers\GpWebtechApiPhpClient\Generated\src\Request;

use Vanengers\GpWebtechApiPhpClient\Generated\src\Schema\PatchUser;

class UpdateUserPasswordRequest implements RequestInterface
{
    private string $id;

    private PatchUser $patchUser;

    private string $contentType = 'application/json';

    private ?string $bearerToken = '';

    public function __construct(string $id, PatchUser $patchUser)
    {
        $this->id        = $id;
        $this->patchUser = $patchUser;
    }

    public function getContentType(): string
    {
        return $this->contentType;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getRoute(): string
    {
        return \strtr('user/{id}', ['{id}' => $this->id]);
    }

    public function getQueryParameters(): array
    {
        return [];
    }

    public function getRawQueryParameters(): array
    {
        return [];
    }

    public function getCookies(): array
    {
        return [];
    }

    public function getHeaders(): array
    {
        return ['Authorization' => \sprintf('Bearer %s', $this->bearerToken), 'Content-Type' => $this->contentType];
    }

    /**
     * @return PatchUser
     */
    public function getBody()
    {
        return $this->patchUser;
    }

    public function setBearerToken(?string $bearerToken): self
    {
        $this->bearerToken = $bearerToken;

        return $this;
    }

    public function getBearerToken(): string
    {
        return $this->bearerToken;
    }
}
