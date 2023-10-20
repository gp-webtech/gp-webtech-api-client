<?php

declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace Vanengers\GpWebtechApiPhpClient\Generated\src\Schema;

use JsonSerializable;

class ListUser implements SerializableInterface, JsonSerializable
{
    private ?int $id = null;

    private ?string $email = null;

    private ?string $roles = null;

    private ?string $createdAt = null;

    private ?string $updatedAt = null;

    private array $optionalPropertyChanged = ['id' => false, 'email' => false, 'roles' => false, 'createdAt' => false, 'updatedAt' => false];

    public function setId(int $id): self
    {
        $this->id                            = $id;
        $this->optionalPropertyChanged['id'] = true;

        return $this;
    }

    public function setEmail(string $email): self
    {
        $this->email                            = $email;
        $this->optionalPropertyChanged['email'] = true;

        return $this;
    }

    public function setRoles(string $roles): self
    {
        $this->roles                            = $roles;
        $this->optionalPropertyChanged['roles'] = true;

        return $this;
    }

    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt                            = $createdAt;
        $this->optionalPropertyChanged['createdAt'] = true;

        return $this;
    }

    public function setUpdatedAt(string $updatedAt): self
    {
        $this->updatedAt                            = $updatedAt;
        $this->optionalPropertyChanged['updatedAt'] = true;

        return $this;
    }

    public function hasId(): bool
    {
        return $this->optionalPropertyChanged['id'];
    }

    public function hasEmail(): bool
    {
        return $this->optionalPropertyChanged['email'];
    }

    public function hasRoles(): bool
    {
        return $this->optionalPropertyChanged['roles'];
    }

    public function hasCreatedAt(): bool
    {
        return $this->optionalPropertyChanged['createdAt'];
    }

    public function hasUpdatedAt(): bool
    {
        return $this->optionalPropertyChanged['updatedAt'];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getRoles(): ?string
    {
        return $this->roles;
    }

    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    public function toArray(): array
    {
        $fields = [];
        if ($this->hasId()) {
            $fields['id'] = $this->id;
        }
        if ($this->hasEmail()) {
            $fields['email'] = $this->email;
        }
        if ($this->hasRoles()) {
            $fields['roles'] = $this->roles;
        }
        if ($this->hasCreatedAt()) {
            $fields['created_at'] = $this->createdAt;
        }
        if ($this->hasUpdatedAt()) {
            $fields['updated_at'] = $this->updatedAt;
        }

        return $fields;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
