# Electronic Wallets

```php
$electronicWalletsController = $client->getElectronicWalletsController();
```

## Class Name

`ElectronicWalletsController`

## Methods

* [Create Electronic Wallet](../../doc/controllers/electronic-wallets.md#create-electronic-wallet)
* [Delete Electronic Wallet](../../doc/controllers/electronic-wallets.md#delete-electronic-wallet)
* [List Electronic Wallets](../../doc/controllers/electronic-wallets.md#list-electronic-wallets)
* [Retrieve Creation Requirements](../../doc/controllers/electronic-wallets.md#retrieve-creation-requirements)
* [Retrieve Electronic Wallet](../../doc/controllers/electronic-wallets.md#retrieve-electronic-wallet)
* [Update Electronic Wallet](../../doc/controllers/electronic-wallets.md#update-electronic-wallet)


# Create Electronic Wallet

Create a new [electronic wallet](page:resources/electronic-wallets) using a user token.

```php
function createElectronicWallet(
    string $userToken,
    ?CreateOrUpdateElectronicWallet $body = null
): ElectronicWalletResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with `user-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^user-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `body` | [`?CreateOrUpdateElectronicWallet`](../../doc/models/create-or-update-electronic-wallet.md) | Body, Optional | - |

## Requires scope

### server

`modify`

## Response Type

[`ElectronicWalletResult`](../../doc/models/electronic-wallet-result.md)

## Example Usage

```php
$userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

$body = CreateOrUpdateElectronicWalletBuilder::init()
    ->type(ElectronicWalletTypes::TIGO_MONEY)
    ->electronicWalletCountry(Countries::SV)
    ->electronicWalletCurrency(Currencies::USD)
    ->fields(
        [
            ElectronicWalletFieldBuilder::init(
                ElectronicWalletFields::ACCOUNT_NUMBER,
                '012345678'
            )->build(),
            ElectronicWalletFieldBuilder::init(
                ElectronicWalletFields::GOVERNMENT_ID,
                '012345678'
            )->build()
        ]
    )->build();

$electronicWalletsController = $client->getElectronicWalletsController();

try {
    $result = $electronicWalletsController->createElectronicWallet(
        $userToken,
        $body
    );
    echo 'ElectronicWalletResult:';
    var_dump($result);
} catch (ApiErrorResultException $exp) {
    echo 'Caught ApiErrorResultException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Example Response *(as JSON)*

```json
{
  "token": "dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4",
  "type": "TIGO_MONEY",
  "electronicWalletCountry": "SV",
  "electronicWalletCurrency": "USD",
  "createdOn": "2022-05-20T15:48:54Z",
  "fields": [
    {
      "key": "ACCOUNT_NUMBER",
      "value": "012345678"
    },
    {
      "key": "GOVERNMENT_ID",
      "value": "012345678"
    }
  ],
  "status": "VERIFIED",
  "links": [
    {
      "href": "https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/electronic-wallets/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4",
      "params": {
        "rel": "self"
      }
    }
  ],
  "meta": {
    "timezone": "GMT",
    "requestRef": "request-reference-value"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| 500 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| Default | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |


# Delete Electronic Wallet

Delete a user [electronic wallet](page:resources/electronic-wallets).

```php
function deleteElectronicWallet(string $userToken, string $destinationToken): OperationResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with `user-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^user-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `destinationToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with `dest-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |

## Requires scope

### server

`modify`

## Response Type

[`OperationResult`](../../doc/models/operation-result.md)

## Example Usage

```php
$userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

$destinationToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';

$electronicWalletsController = $client->getElectronicWalletsController();

try {
    $result = $electronicWalletsController->deleteElectronicWallet(
        $userToken,
        $destinationToken
    );
    echo 'OperationResult:';
    var_dump($result);
} catch (ApiErrorResultException $exp) {
    echo 'Caught ApiErrorResultException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Example Response *(as JSON)*

```json
{
  "result": true,
  "meta": {
    "timezone": "GMT",
    "requestRef": "request-reference-value"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| 500 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| Default | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |


# List Electronic Wallets

Retrieve a list of [electronic wallets](page:resources/electronic-wallets) that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listElectronicWallets(
    string $userToken,
    int $page,
    int $pageSize,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): ElectronicWalletListResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with `user-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^user-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `page` | `int` | Query, Required | Page number of specific page to return<br><br>**Constraints**: `>= 1` |
| `pageSize` | `int` | Query, Required | Number of items to be displayed per page<br><br>**Constraints**: `>= 1`, `<= 50` |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `sort` | `?string` | Query, Optional | Sort request results by specific attribute. |
| `language` | [`?string(Languages)`](../../doc/models/languages.md) | Query, Optional | Filter results by language type. |

## Requires scope

### server

`readonly`

## Response Type

[`ElectronicWalletListResult`](../../doc/models/electronic-wallet-list-result.md)

## Example Usage

```php
$userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

$page = 1;

$pageSize = 20;

$filter = 'string';

$sort = 'string';

$language = Languages::ENUS;

$electronicWalletsController = $client->getElectronicWalletsController();

try {
    $result = $electronicWalletsController->listElectronicWallets(
        $userToken,
        $page,
        $pageSize,
        $filter,
        $sort,
        $language
    );
    echo 'ElectronicWalletListResult:';
    var_dump($result);
} catch (ApiErrorResultException $exp) {
    echo 'Caught ApiErrorResultException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Example Response *(as JSON)*

```json
{
  "payload": [
    {
      "token": "dest-969daa60-c743-4e4f-8609-559874f26d6c",
      "type": "TIGO_MONEY",
      "electronicWalletCountry": "SV",
      "electronicWalletCurrency": "USD",
      "createdOn": "2022-05-20T15:48:54Z",
      "fields": [
        {
          "key": "ACCOUNT_NUMBER",
          "value": "012345678"
        },
        {
          "key": "GOVERNMENT_ID",
          "value": "012345678"
        }
      ],
      "status": "VERIFIED",
      "links": [
        {
          "href": "https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/electronic-wallets/dest-969daa60-c743-4e4f-8609-559874f26d6c",
          "params": {
            "rel": "self"
          }
        }
      ]
    }
  ],
  "meta": {
    "pageNo": "1",
    "pageSize": "5",
    "pageCount": "1",
    "recordCount": "1",
    "timezone": "GMT",
    "requestRef": "request-reference-value"
  },
  "links": [
    {
      "href": "https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/electronic-wallets?page=1&pageSize=5&language=en-US",
      "params": {
        "rel": "self"
      }
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| 500 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| Default | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |


# Retrieve Creation Requirements

Retrieve requirements for adding a [electronic wallet](page:resources/electronic-wallets) using the parameters provided.

```php
function retrieveCreationRequirements(
    string $userToken,
    ?string $electronicWalletType = null,
    ?string $country = null,
    ?string $currency = null
): ElectronicWalletRequirementListResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with `user-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^user-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `electronicWalletType` | [`?string(ElectronicWalletTypes)`](../../doc/models/electronic-wallet-types.md) | Query, Optional | Filter results by electronic wallet type. |
| `country` | [`?string(Countries)`](../../doc/models/countries.md) | Query, Optional | Filter results by country. |
| `currency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Query, Optional | Filter results by currency. |

## Requires scope

### server

`readonly`

## Response Type

[`ElectronicWalletRequirementListResult`](../../doc/models/electronic-wallet-requirement-list-result.md)

## Example Usage

```php
$userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

$electronicWalletType = ElectronicWalletTypes::TIGO_MONEY;

$country = Countries::US;

$currency = Currencies::USD;

$electronicWalletsController = $client->getElectronicWalletsController();

try {
    $result = $electronicWalletsController->retrieveCreationRequirements(
        $userToken,
        $electronicWalletType,
        $country,
        $currency
    );
    echo 'ElectronicWalletRequirementListResult:';
    var_dump($result);
} catch (ApiErrorResultException $exp) {
    echo 'Caught ApiErrorResultException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Example Response *(as JSON)*

```json
{
  "payload": [
    {
      "electronicWalletType": "TIGO_MONEY",
      "electronicWalletCountry": "SV",
      "electronicWalletCurrency": "USD",
      "requirements": [
        {
          "requirement": "ACCOUNT_NUMBER",
          "format": {
            "example": "012345678",
            "legend": [
              {
                "key": "012345678",
                "descriptions": [
                  {
                    "language": "en-US",
                    "translation": "Example Account Number"
                  },
                  {
                    "language": "it-IT",
                    "translation": "Esempio Numero del conto"
                  }
                ]
              }
            ]
          },
          "description": [
            {
              "language": "en-US",
              "translation": "Account Number"
            },
            {
              "language": "it-IT",
              "translation": "Numero del conto"
            }
          ],
          "validators": [
            {
              "validatorType": "REGEX",
              "expression": "^[0-9]{8}$"
            }
          ]
        },
        {
          "requirement": "GOVERNMENT_ID",
          "format": {
            "example": "012345678",
            "legend": [
              {
                "key": "012345678",
                "descriptions": [
                  {
                    "language": "en-US",
                    "translation": "Example Government Id"
                  },
                  {
                    "language": "it-IT",
                    "translation": "Esempio Carta d'Identità"
                  }
                ]
              }
            ]
          },
          "description": [
            {
              "language": "en-US",
              "translation": "Government Id"
            },
            {
              "language": "it-IT",
              "translation": "Carta d'Identità"
            }
          ],
          "validators": [
            {
              "validatorType": "REGEX",
              "expression": "^[0-9]{8}$"
            }
          ]
        }
      ],
      "quote": {
        "formattedAmount": "$4.32 USD (USD, en-US), 0,00 â‚¬ EUR (EUR, fr-FR)",
        "amount": 4.32,
        "currency": "USD"
      },
      "links": [
        {
          "params": {
            "rel": "self"
          },
          "href": "string"
        }
      ]
    }
  ],
  "links": [
    {
      "params": {
        "rel": "self"
      },
      "href": "string"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| 500 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| Default | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |


# Retrieve Electronic Wallet

Retrieve a single [electronic wallet](page:resources/electronic-wallets) using a destination token.

```php
function retrieveElectronicWallet(
    string $userToken,
    string $destinationToken,
    int $page,
    int $pageSize,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): ElectronicWalletResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with `user-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^user-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `destinationToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with `dest-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `page` | `int` | Query, Required | Page number of specific page to return<br><br>**Constraints**: `>= 1` |
| `pageSize` | `int` | Query, Required | Number of items to be displayed per page<br><br>**Constraints**: `>= 1`, `<= 50` |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `sort` | `?string` | Query, Optional | Sort request results by specific attribute. |
| `language` | [`?string(Languages)`](../../doc/models/languages.md) | Query, Optional | Filter results by language type. |

## Requires scope

### server

`readonly`

## Response Type

[`ElectronicWalletResult`](../../doc/models/electronic-wallet-result.md)

## Example Usage

```php
$userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

$destinationToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';

$page = 1;

$pageSize = 20;

$filter = 'string';

$sort = 'string';

$language = Languages::ENUS;

$electronicWalletsController = $client->getElectronicWalletsController();

try {
    $result = $electronicWalletsController->retrieveElectronicWallet(
        $userToken,
        $destinationToken,
        $page,
        $pageSize,
        $filter,
        $sort,
        $language
    );
    echo 'ElectronicWalletResult:';
    var_dump($result);
} catch (ApiErrorResultException $exp) {
    echo 'Caught ApiErrorResultException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Example Response *(as JSON)*

```json
{
  "token": "dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4",
  "type": "TIGO_MONEY",
  "electronicWalletCountry": "SV",
  "electronicWalletCurrency": "USD",
  "createdOn": "2022-05-20T15:48:54Z",
  "fields": [
    {
      "key": "ACCOUNT_NUMBER",
      "value": "012345678"
    },
    {
      "key": "GOVERNMENT_ID",
      "value": "012345678"
    }
  ],
  "status": "VERIFIED",
  "links": [
    {
      "href": "https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/electronic-wallets/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4",
      "params": {
        "rel": "self"
      }
    }
  ],
  "meta": {
    "timezone": "GMT",
    "requestRef": "request-reference-value"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| 500 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| Default | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |


# Update Electronic Wallet

Update a [electronic wallet](page:resources/electronic-wallets).

```php
function updateElectronicWallet(
    string $userToken,
    string $destinationToken,
    ?CreateOrUpdateElectronicWallet $body = null
): ElectronicWalletResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with `user-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^user-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `destinationToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with `dest-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `body` | [`?CreateOrUpdateElectronicWallet`](../../doc/models/create-or-update-electronic-wallet.md) | Body, Optional | - |

## Requires scope

### server

`modify`

## Response Type

[`ElectronicWalletResult`](../../doc/models/electronic-wallet-result.md)

## Example Usage

```php
$userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

$destinationToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';

$body = CreateOrUpdateElectronicWalletBuilder::init()
    ->type(ElectronicWalletTypes::TIGO_MONEY)
    ->electronicWalletCountry(Countries::SV)
    ->electronicWalletCurrency(Currencies::USD)
    ->fields(
        [
            ElectronicWalletFieldBuilder::init(
                ElectronicWalletFields::ACCOUNT_NUMBER,
                '012345678'
            )->build(),
            ElectronicWalletFieldBuilder::init(
                ElectronicWalletFields::GOVERNMENT_ID,
                '012345678'
            )->build()
        ]
    )->build();

$electronicWalletsController = $client->getElectronicWalletsController();

try {
    $result = $electronicWalletsController->updateElectronicWallet(
        $userToken,
        $destinationToken,
        $body
    );
    echo 'ElectronicWalletResult:';
    var_dump($result);
} catch (ApiErrorResultException $exp) {
    echo 'Caught ApiErrorResultException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Example Response *(as JSON)*

```json
{
  "token": "dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4",
  "type": "TIGO_MONEY",
  "electronicWalletCountry": "SV",
  "electronicWalletCurrency": "USD",
  "createdOn": "2022-05-20T15:48:54Z",
  "fields": [
    {
      "key": "ACCOUNT_NUMBER",
      "value": "012345678"
    },
    {
      "key": "GOVERNMENT_ID",
      "value": "012345678"
    }
  ],
  "status": "VERIFIED",
  "links": [
    {
      "href": "https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/electronic-wallets/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4",
      "params": {
        "rel": "self"
      }
    }
  ],
  "meta": {
    "timezone": "GMT",
    "requestRef": "request-reference-value"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| 500 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| Default | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |

