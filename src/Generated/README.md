# GPWebTech API client

This client is generated using [docler-labs/api-client-generator](https://github.com/DoclerLabs/api-client-generator) based on the OpenAPI specification of the GPWebTech API.

You can generate the client with the following command:
```bash
docker run -it --rm \
-v <local-path-to-api>/doc/openapi.yaml:/openapi.yaml:ro \
-v <local-path-to-client>:/client \
-e NAMESPACE=Vanengers\\GpWebtechApiPhpClient\\Generated\\src \
-e OPENAPI=/openapi.yaml \
-e OUTPUT_DIR=/client \
-e PACKAGE=gp-web-tech/api-client \
-e CLIENT_PHP_VERSION=7.4 \
dhlabs/api-client-generator
```

## Usage

```php
<?php declare(strict_types=1);

use Vanengers\GpWebtechApiPhpClient\Generated\src\GpWebTechApiClientFactory;
use Vanengers\GpWebtechApiPhpClient\Generated\src\Request\ListUsersRequest;

/**
 * If using Guzzle 6, make sure to configure Guzzle to not throw exceptions
 * on HTTP error status codes, or this client will violate PSR-18.
 * e.g. new Client(['base_uri' => $baseUri, 'http_errors' => false, ...])
 */
$client = ...; // any PSR-18 HTTP CLIENT

$factory = new GpWebTechApiClientFactory();
$client  = $factory->create($client);

$request = new ListUsersRequest();
$result  = $client->listUsers($request);
```

## Operations

### User
Endpoints:
- **listUsers**
- **createUser**
- **updateUser**
- **deleteUser**
- **updateUserPassword**

### Login Check
Endpoints:
- **login_check_post** - Creates a user token. 

