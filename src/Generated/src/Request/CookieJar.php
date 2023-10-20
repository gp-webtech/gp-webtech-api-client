<?php

declare(strict_types=1);

/*
 * This file was generated by docler-labs/api-client-generator.
 *
 * Do not edit it manually.
 */

namespace Vanengers\GpWebtechApiPhpClient\Generated\src\Request;

use InvalidArgumentException;
use Psr\Http\Message\RequestInterface;

class CookieJar
{
    /** @var array */
    private $cookies = [];

    public function __construct(array $cookies = [])
    {
        foreach ($cookies as $name => $value) {
            if (\preg_match('/[\\x00-\\x20\\x22\\x28-\\x29\\x2c\\x2f\\x3a-\\x40\\x5c\\x7b\\x7d\\x7f]/', $name)) {
                throw new InvalidArgumentException('Cookie name must not contain invalid characters: ASCII ' . 'Control characters (0-31;127), space, tab and the following characters: ()<>@,;:\\"/?={}');
            }
            // Value must not be empty, but can be 0
            if (empty($value) && ! \is_numeric($value)) {
                throw new InvalidArgumentException('The cookie value must not be empty');
            }
        }
        $this->cookies = $cookies;
    }

    public function withCookieHeader(RequestInterface $request): RequestInterface
    {
        return empty($this->cookies) ? $request : $request->withHeader('Cookie', \http_build_query($this->cookies, '', '; '));
    }
}
