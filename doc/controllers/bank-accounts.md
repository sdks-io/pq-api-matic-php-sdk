# Bank Accounts

```php
$bankAccountsController = $client->getBankAccountsController();
```

## Class Name

`BankAccountsController`

## Methods

* [Create Bank Account](../../doc/controllers/bank-accounts.md#create-bank-account)
* [Create Company Bank Account](../../doc/controllers/bank-accounts.md#create-company-bank-account)
* [Delete Bank Account](../../doc/controllers/bank-accounts.md#delete-bank-account)
* [Delete Company Bank Account](../../doc/controllers/bank-accounts.md#delete-company-bank-account)
* [List Bank Accounts](../../doc/controllers/bank-accounts.md#list-bank-accounts)
* [List Company Bank Accounts](../../doc/controllers/bank-accounts.md#list-company-bank-accounts)
* [Retrieve Bank Account](../../doc/controllers/bank-accounts.md#retrieve-bank-account)
* [Retrieve Bank Account Creation Requirements for a Prepaid Card](../../doc/controllers/bank-accounts.md#retrieve-bank-account-creation-requirements-for-a-prepaid-card)
* [Retrieve Company Bank Account](../../doc/controllers/bank-accounts.md#retrieve-company-bank-account)
* [Retrieve Company Bank Account Creation Requirements](../../doc/controllers/bank-accounts.md#retrieve-company-bank-account-creation-requirements)
* [Retrieve Creation Requirements](../../doc/controllers/bank-accounts.md#retrieve-creation-requirements)
* [Update Bank Account](../../doc/controllers/bank-accounts.md#update-bank-account)
* [Update Company Bank Account](../../doc/controllers/bank-accounts.md#update-company-bank-account)


# Create Bank Account

Create a [bank account](page:resources/bank-accounts) using a user token.

```php
function createBankAccount(string $userToken, ?CreateOrUpdateBankAccount $body = null): BankAccountResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with `user-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^user-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `body` | [`?CreateOrUpdateBankAccount`](../../doc/models/create-or-update-bank-account.md) | Body, Optional | - |

## Requires scope

### server

`modify`

## Response Type

[`BankAccountResult`](../../doc/models/bank-account-result.md)

## Example Usage

```php
$userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

$body = CreateOrUpdateBankAccountBuilder::init()
    ->bankAccountOwnershipType(BankAccountOwnership::BUSINESS)
    ->bankCountry(Countries::US)
    ->bankCurrency(Currencies::USD)
    ->description('Official USD Testing Bank Account 1')
    ->fields(
        [
            BankAccountFieldBuilder::init(
                BankAccountFields::BANK_BBAN,
                '01234567890'
            )->build(),
            BankAccountFieldBuilder::init(
                BankAccountFields::BANK_ACH_ABA,
                '012345678'
            )->build(),
            BankAccountFieldBuilder::init(
                BankAccountFields::BANK_NAME,
                'API V2 USD BANK 1'
            )->build(),
            BankAccountFieldBuilder::init(
                BankAccountFields::BENEFICIARY_NAME,
                'Hazel Mosciski'
            )->build()
        ]
    )
    ->type(BankAccountTypes::SAVINGS)
    ->build();

$bankAccountsController = $client->getBankAccountsController();

try {
    $result = $bankAccountsController->createBankAccount(
        $userToken,
        $body
    );
    echo 'BankAccountResult:';
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
  "bankAccountOwnershipType": "BUSINESS",
  "bankCountry": "US",
  "bankCurrency": "USD",
  "createdOn": "2022-05-20T15:48:54Z",
  "description": "Official USD Testing Bank Account 1",
  "fields": [
    {
      "key": "BANK_BBAN",
      "value": "****7890"
    },
    {
      "key": "BANK_ACH_ABA",
      "value": "****5678"
    },
    {
      "key": "BENEFICIARY_NAME",
      "value": "Dennis Bruen"
    },
    {
      "key": "BANK_NAME",
      "value": "API V2 USD BANK 1"
    }
  ],
  "status": "VERIFIED",
  "type": "SAVINGS",
  "links": [
    {
      "href": "https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/bank-accounts/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4",
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


# Create Company Bank Account

Create a company [bank account](page:resources/bank-accounts) using an account token.

```php
function createCompanyBankAccount(
    string $accountToken,
    ?CreateOrUpdateBankAccount $body = null
): BankAccountResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountToken` | `string` | Template, Required | Auto-generated unique identifier representing a company account, prefixed with `acct-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^acct-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `body` | [`?CreateOrUpdateBankAccount`](../../doc/models/create-or-update-bank-account.md) | Body, Optional | - |

## Requires scope

### server

`modify`

## Response Type

[`BankAccountResult`](../../doc/models/bank-account-result.md)

## Example Usage

```php
$accountToken = 'acct-b3f0570a-6586-4e00-8d6e-8a2bf93cfae4';

$body = CreateOrUpdateBankAccountBuilder::init()
    ->bankAccountOwnershipType(BankAccountOwnership::BUSINESS)
    ->bankCountry(Countries::US)
    ->bankCurrency(Currencies::USD)
    ->description('Official USD Testing Bank Account 1')
    ->fields(
        [
            BankAccountFieldBuilder::init(
                BankAccountFields::BANK_BBAN,
                '01234567890'
            )->build(),
            BankAccountFieldBuilder::init(
                BankAccountFields::BANK_ACH_ABA,
                '012345678'
            )->build(),
            BankAccountFieldBuilder::init(
                BankAccountFields::BANK_NAME,
                'API V2 USD BANK 1'
            )->build(),
            BankAccountFieldBuilder::init(
                BankAccountFields::BENEFICIARY_NAME,
                'Hazel Mosciski'
            )->build()
        ]
    )
    ->type(BankAccountTypes::SAVINGS)
    ->build();

$bankAccountsController = $client->getBankAccountsController();

try {
    $result = $bankAccountsController->createCompanyBankAccount(
        $accountToken,
        $body
    );
    echo 'BankAccountResult:';
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
  "bankAccountOwnershipType": "BUSINESS",
  "bankCountry": "US",
  "bankCurrency": "USD",
  "createdOn": "2022-05-20T15:48:54Z",
  "description": "Official USD Testing Bank Account 1",
  "fields": [
    {
      "key": "BANK_BBAN",
      "value": "****7890"
    },
    {
      "key": "BANK_ACH_ABA",
      "value": "****5678"
    },
    {
      "key": "BENEFICIARY_NAME",
      "value": "Dennis Bruen"
    },
    {
      "key": "BANK_NAME",
      "value": "API V2 USD BANK 1"
    }
  ],
  "status": "VERIFIED",
  "type": "SAVINGS",
  "links": [
    {
      "href": "https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/bank-accounts/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4",
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


# Delete Bank Account

Delete a user [bank account](page:resources/bank-accounts).

```php
function deleteBankAccount(string $userToken, string $destinationToken): OperationResult
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

$bankAccountsController = $client->getBankAccountsController();

try {
    $result = $bankAccountsController->deleteBankAccount(
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


# Delete Company Bank Account

Delete a company [bank account](page:resources/bank-accounts).

```php
function deleteCompanyBankAccount(string $accountToken, string $destinationToken): OperationResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountToken` | `string` | Template, Required | Auto-generated unique identifier representing a company account, prefixed with `acct-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^acct-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `destinationToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with `dest-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |

## Requires scope

### server

`modify`

## Response Type

[`OperationResult`](../../doc/models/operation-result.md)

## Example Usage

```php
$accountToken = 'acct-b3f0570a-6586-4e00-8d6e-8a2bf93cfae4';

$destinationToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';

$bankAccountsController = $client->getBankAccountsController();

try {
    $result = $bankAccountsController->deleteCompanyBankAccount(
        $accountToken,
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


# List Bank Accounts

Retrieve a list of [bank accounts](page:resources/bank-accounts) that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listBankAccounts(
    string $userToken,
    int $page,
    int $pageSize,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): BankAccountListResult
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

[`BankAccountListResult`](../../doc/models/bank-account-list-result.md)

## Example Usage

```php
$userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

$page = 1;

$pageSize = 20;

$filter = 'string';

$sort = 'string';

$language = Languages::ENUS;

$bankAccountsController = $client->getBankAccountsController();

try {
    $result = $bankAccountsController->listBankAccounts(
        $userToken,
        $page,
        $pageSize,
        $filter,
        $sort,
        $language
    );
    echo 'BankAccountListResult:';
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
      "bankAccountOwnershipType": "BUSINESS",
      "bankCountry": "US",
      "bankCurrency": "USD",
      "createdOn": "2022-05-20T16:26:25Z",
      "description": "Official USD Testing Bank Account 2",
      "fields": [
        {
          "key": "BANK_BBAN",
          "value": "****7899"
        },
        {
          "key": "BANK_ACH_ABA",
          "value": "****5688"
        },
        {
          "key": "BENEFICIARY_NAME",
          "value": "Harry Grady"
        },
        {
          "key": "BANK_NAME",
          "value": "API V2 USD BANK 2"
        }
      ],
      "status": "VERIFIED",
      "type": "SAVINGS",
      "links": [
        {
          "href": "https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/bank-accounts/dest-969daa60-c743-4e4f-8609-559874f26d6c",
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
      "href": "https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/bank-accounts?page=1&pageSize=5&language=en-US",
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


# List Company Bank Accounts

Retrieve a list of company [bank accounts](page:resources/bank-accounts) that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listCompanyBankAccounts(
    string $accountToken,
    int $page,
    int $pageSize,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): BankAccountListResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountToken` | `string` | Template, Required | Auto-generated unique identifier representing a company account, prefixed with `acct-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^acct-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `page` | `int` | Query, Required | Page number of specific page to return<br><br>**Constraints**: `>= 1` |
| `pageSize` | `int` | Query, Required | Number of items to be displayed per page<br><br>**Constraints**: `>= 1`, `<= 50` |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `sort` | `?string` | Query, Optional | Sort request results by specific attribute. |
| `language` | [`?string(Languages)`](../../doc/models/languages.md) | Query, Optional | Filter results by language type. |

## Requires scope

### server

`readonly`

## Response Type

[`BankAccountListResult`](../../doc/models/bank-account-list-result.md)

## Example Usage

```php
$accountToken = 'acct-b3f0570a-6586-4e00-8d6e-8a2bf93cfae4';

$page = 1;

$pageSize = 20;

$filter = 'string';

$sort = 'string';

$language = Languages::ENUS;

$bankAccountsController = $client->getBankAccountsController();

try {
    $result = $bankAccountsController->listCompanyBankAccounts(
        $accountToken,
        $page,
        $pageSize,
        $filter,
        $sort,
        $language
    );
    echo 'BankAccountListResult:';
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
      "bankAccountOwnershipType": "BUSINESS",
      "bankCountry": "US",
      "bankCurrency": "USD",
      "createdOn": "2022-05-20T16:26:25Z",
      "description": "Official USD Testing Bank Account 2",
      "fields": [
        {
          "key": "BANK_BBAN",
          "value": "****7899"
        },
        {
          "key": "BANK_ACH_ABA",
          "value": "****5688"
        },
        {
          "key": "BENEFICIARY_NAME",
          "value": "Harry Grady"
        },
        {
          "key": "BANK_NAME",
          "value": "API V2 USD BANK 2"
        }
      ],
      "status": "VERIFIED",
      "type": "SAVINGS",
      "links": [
        {
          "href": "https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/bank-accounts/dest-969daa60-c743-4e4f-8609-559874f26d6c",
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
      "href": "https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/bank-accounts?page=1&pageSize=5&language=en-US",
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


# Retrieve Bank Account

Retrieve a single [bank account](page:resources/bank-accounts) using a destination token.

```php
function retrieveBankAccount(
    string $userToken,
    string $destinationToken,
    int $page,
    int $pageSize,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): BankAccountResult
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

[`BankAccountResult`](../../doc/models/bank-account-result.md)

## Example Usage

```php
$userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

$destinationToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';

$page = 1;

$pageSize = 20;

$filter = 'string';

$sort = 'string';

$language = Languages::ENUS;

$bankAccountsController = $client->getBankAccountsController();

try {
    $result = $bankAccountsController->retrieveBankAccount(
        $userToken,
        $destinationToken,
        $page,
        $pageSize,
        $filter,
        $sort,
        $language
    );
    echo 'BankAccountResult:';
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
  "bankAccountOwnershipType": "BUSINESS",
  "bankCountry": "US",
  "bankCurrency": "USD",
  "createdOn": "2022-05-20T15:48:54Z",
  "description": "Official USD Testing Bank Account 1",
  "fields": [
    {
      "key": "BANK_BBAN",
      "value": "****7890"
    },
    {
      "key": "BANK_ACH_ABA",
      "value": "****5678"
    },
    {
      "key": "BENEFICIARY_NAME",
      "value": "Dennis Bruen"
    },
    {
      "key": "BANK_NAME",
      "value": "API V2 USD BANK 1"
    }
  ],
  "status": "VERIFIED",
  "type": "SAVINGS",
  "links": [
    {
      "href": "https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/bank-accounts/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4",
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


# Retrieve Bank Account Creation Requirements for a Prepaid Card

Retrieve requirements for adding a [bank account](page:resources/bank-accounts) using the pre-paid card as the destination.

```php
function retrieveBankAccountCreationRequirementsForAPrepaidCard(
    string $userToken,
    string $destinationToken,
    ?string $country = null,
    ?string $currency = null
): BankAccountRequirementListResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with `user-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^user-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `destinationToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with `dest-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `country` | [`?string(Countries)`](../../doc/models/countries.md) | Query, Optional | Filter results by country. |
| `currency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Query, Optional | Filter results by currency. |

## Requires scope

### server

`readonly`

## Response Type

[`BankAccountRequirementListResult`](../../doc/models/bank-account-requirement-list-result.md)

## Example Usage

```php
$userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

$destinationToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';

$country = Countries::US;

$currency = Currencies::USD;

$bankAccountsController = $client->getBankAccountsController();

try {
    $result = $bankAccountsController->retrieveBankAccountCreationRequirementsForAPrepaidCard(
        $userToken,
        $destinationToken,
        $country,
        $currency
    );
    echo 'BankAccountRequirementListResult:';
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
      "bankCountry": "IT",
      "bankCurrency": "EUR",
      "requirements": [
        {
          "requirement": "BANK_IBAN",
          "format": {
            "example": "IT43K0310412701000000820420",
            "legend": [
              {
                "key": "IT43K0310412701000000820420",
                "descriptions": [
                  {
                    "language": "en-US",
                    "translation": "Example IBAN"
                  },
                  {
                    "language": "it-IT",
                    "translation": "Esempio IBAN"
                  }
                ]
              }
            ]
          },
          "description": [
            {
              "language": "en-US",
              "translation": "IBAN"
            },
            {
              "language": "it-IT",
              "translation": "IBAN"
            }
          ],
          "validators": [
            {
              "validatorType": "REGEX",
              "expression": "^IT\\\\d{2}[A-Z]\\\\d{10}[0-9A-Z]{12}$"
            }
          ]
        },
        {
          "requirement": "BANK_SWIFT_BIC",
          "format": {
            "example": "01234567890",
            "legend": [
              {
                "key": "01234567890",
                "descriptions": [
                  {
                    "language": "en-US",
                    "translation": "Example Swift/BIC"
                  },
                  {
                    "language": "it-IT",
                    "translation": "Esempio Swift/BIC"
                  }
                ]
              }
            ]
          },
          "description": [
            {
              "language": "en-US",
              "translation": "Swift/BIC"
            },
            {
              "language": "it-IT",
              "translation": "Swift/BIC"
            }
          ],
          "validators": [
            {
              "validatorType": "REGEX",
              "expression": "^[a-z0-9A-Z]{8,11}$"
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


# Retrieve Company Bank Account

Retrieve a single company [bank account](page:resources/bank-accounts) using a destination token.

```php
function retrieveCompanyBankAccount(
    string $accountToken,
    string $destinationToken,
    int $page,
    int $pageSize,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): BankAccountResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountToken` | `string` | Template, Required | Auto-generated unique identifier representing a company account, prefixed with `acct-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^acct-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
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

[`BankAccountResult`](../../doc/models/bank-account-result.md)

## Example Usage

```php
$accountToken = 'acct-b3f0570a-6586-4e00-8d6e-8a2bf93cfae4';

$destinationToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';

$page = 1;

$pageSize = 20;

$filter = 'string';

$sort = 'string';

$language = Languages::ENUS;

$bankAccountsController = $client->getBankAccountsController();

try {
    $result = $bankAccountsController->retrieveCompanyBankAccount(
        $accountToken,
        $destinationToken,
        $page,
        $pageSize,
        $filter,
        $sort,
        $language
    );
    echo 'BankAccountResult:';
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
  "bankAccountOwnershipType": "BUSINESS",
  "bankCountry": "US",
  "bankCurrency": "USD",
  "createdOn": "2022-05-20T15:48:54Z",
  "description": "Official USD Testing Bank Account 1",
  "fields": [
    {
      "key": "BANK_BBAN",
      "value": "****7890"
    },
    {
      "key": "BANK_ACH_ABA",
      "value": "****5678"
    },
    {
      "key": "BENEFICIARY_NAME",
      "value": "Dennis Bruen"
    },
    {
      "key": "BANK_NAME",
      "value": "API V2 USD BANK 1"
    }
  ],
  "status": "VERIFIED",
  "type": "SAVINGS",
  "links": [
    {
      "href": "https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/bank-accounts/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4",
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


# Retrieve Company Bank Account Creation Requirements

Retrieve requirements for adding a [bank account](page:resources/bank-accounts) using the parameters provided.

```php
function retrieveCompanyBankAccountCreationRequirements(
    string $accountToken,
    ?string $country = null,
    ?string $currency = null
): BankAccountRequirementListResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountToken` | `string` | Template, Required | Auto-generated unique identifier representing a company account, prefixed with `acct-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^acct-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `country` | [`?string(Countries)`](../../doc/models/countries.md) | Query, Optional | Filter results by country. |
| `currency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Query, Optional | Filter results by currency. |

## Requires scope

### server

`readonly`

## Response Type

[`BankAccountRequirementListResult`](../../doc/models/bank-account-requirement-list-result.md)

## Example Usage

```php
$accountToken = 'acct-b3f0570a-6586-4e00-8d6e-8a2bf93cfae4';

$country = Countries::US;

$currency = Currencies::USD;

$bankAccountsController = $client->getBankAccountsController();

try {
    $result = $bankAccountsController->retrieveCompanyBankAccountCreationRequirements(
        $accountToken,
        $country,
        $currency
    );
    echo 'BankAccountRequirementListResult:';
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
      "bankCountry": "IT",
      "bankCurrency": "EUR",
      "requirements": [
        {
          "requirement": "BANK_IBAN",
          "format": {
            "example": "IT43K0310412701000000820420",
            "legend": [
              {
                "key": "IT43K0310412701000000820420",
                "descriptions": [
                  {
                    "language": "en-US",
                    "translation": "Example IBAN"
                  },
                  {
                    "language": "it-IT",
                    "translation": "Esempio IBAN"
                  }
                ]
              }
            ]
          },
          "description": [
            {
              "language": "en-US",
              "translation": "IBAN"
            },
            {
              "language": "it-IT",
              "translation": "IBAN"
            }
          ],
          "validators": [
            {
              "validatorType": "REGEX",
              "expression": "^IT\\\\d{2}[A-Z]\\\\d{10}[0-9A-Z]{12}$"
            }
          ]
        },
        {
          "requirement": "BANK_SWIFT_BIC",
          "format": {
            "example": "01234567890",
            "legend": [
              {
                "key": "01234567890",
                "descriptions": [
                  {
                    "language": "en-US",
                    "translation": "Example Swift/BIC"
                  },
                  {
                    "language": "it-IT",
                    "translation": "Esempio Swift/BIC"
                  }
                ]
              }
            ]
          },
          "description": [
            {
              "language": "en-US",
              "translation": "Swift/BIC"
            },
            {
              "language": "it-IT",
              "translation": "Swift/BIC"
            }
          ],
          "validators": [
            {
              "validatorType": "REGEX",
              "expression": "^[a-z0-9A-Z]{8,11}$"
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


# Retrieve Creation Requirements

Retrieve requirements for adding a [bank account](page:resources/bank-accounts) using the parameters provided.

```php
function retrieveCreationRequirements(
    string $userToken,
    ?string $country = null,
    ?string $currency = null
): BankAccountRequirementListResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with `user-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^user-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `country` | [`?string(Countries)`](../../doc/models/countries.md) | Query, Optional | Filter results by country. |
| `currency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Query, Optional | Filter results by currency. |

## Requires scope

### server

`readonly`

## Response Type

[`BankAccountRequirementListResult`](../../doc/models/bank-account-requirement-list-result.md)

## Example Usage

```php
$userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

$country = Countries::US;

$currency = Currencies::USD;

$bankAccountsController = $client->getBankAccountsController();

try {
    $result = $bankAccountsController->retrieveCreationRequirements(
        $userToken,
        $country,
        $currency
    );
    echo 'BankAccountRequirementListResult:';
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
      "bankCountry": "IT",
      "bankCurrency": "EUR",
      "requirements": [
        {
          "requirement": "BANK_IBAN",
          "format": {
            "example": "IT43K0310412701000000820420",
            "legend": [
              {
                "key": "IT43K0310412701000000820420",
                "descriptions": [
                  {
                    "language": "en-US",
                    "translation": "Example IBAN"
                  },
                  {
                    "language": "it-IT",
                    "translation": "Esempio IBAN"
                  }
                ]
              }
            ]
          },
          "description": [
            {
              "language": "en-US",
              "translation": "IBAN"
            },
            {
              "language": "it-IT",
              "translation": "IBAN"
            }
          ],
          "validators": [
            {
              "validatorType": "REGEX",
              "expression": "^IT\\\\d{2}[A-Z]\\\\d{10}[0-9A-Z]{12}$"
            }
          ]
        },
        {
          "requirement": "BANK_SWIFT_BIC",
          "format": {
            "example": "01234567890",
            "legend": [
              {
                "key": "01234567890",
                "descriptions": [
                  {
                    "language": "en-US",
                    "translation": "Example Swift/BIC"
                  },
                  {
                    "language": "it-IT",
                    "translation": "Esempio Swift/BIC"
                  }
                ]
              }
            ]
          },
          "description": [
            {
              "language": "en-US",
              "translation": "Swift/BIC"
            },
            {
              "language": "it-IT",
              "translation": "Swift/BIC"
            }
          ],
          "validators": [
            {
              "validatorType": "REGEX",
              "expression": "^[a-z0-9A-Z]{8,11}$"
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


# Update Bank Account

Update a [bank account](page:resources/bank-accounts).

:information_source: **Note** This endpoint does not require authentication.

```php
function updateBankAccount(
    string $userToken,
    string $destinationToken,
    ?CreateOrUpdateBankAccount $body = null
): BankAccountResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userToken` | `string` | Template, Required | Auto-generated unique identifier representing a user, prefixed with `user-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^user-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `destinationToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with `dest-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `body` | [`?CreateOrUpdateBankAccount`](../../doc/models/create-or-update-bank-account.md) | Body, Optional | - |

## Response Type

[`BankAccountResult`](../../doc/models/bank-account-result.md)

## Example Usage

```php
$userToken = 'user-2bbfc967-d12e-4647-a887-d905172fb4bc';

$destinationToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';

$body = CreateOrUpdateBankAccountBuilder::init()
    ->bankAccountOwnershipType(BankAccountOwnership::BUSINESS)
    ->bankCountry(Countries::US)
    ->bankCurrency(Currencies::USD)
    ->description('Official USD Testing Bank Account 1')
    ->fields(
        [
            BankAccountFieldBuilder::init(
                BankAccountFields::BANK_BBAN,
                '01234567890'
            )->build(),
            BankAccountFieldBuilder::init(
                BankAccountFields::BANK_ACH_ABA,
                '012345678'
            )->build(),
            BankAccountFieldBuilder::init(
                BankAccountFields::BANK_NAME,
                'API V2 USD BANK 1'
            )->build(),
            BankAccountFieldBuilder::init(
                BankAccountFields::BENEFICIARY_NAME,
                'Hazel Mosciski'
            )->build()
        ]
    )
    ->type(BankAccountTypes::SAVINGS)
    ->build();

$bankAccountsController = $client->getBankAccountsController();

try {
    $result = $bankAccountsController->updateBankAccount(
        $userToken,
        $destinationToken,
        $body
    );
    echo 'BankAccountResult:';
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
  "bankAccountOwnershipType": "BUSINESS",
  "bankCountry": "US",
  "bankCurrency": "USD",
  "createdOn": "2022-05-20T15:48:54Z",
  "description": "Official USD Testing Bank Account 1",
  "fields": [
    {
      "key": "BANK_BBAN",
      "value": "****7890"
    },
    {
      "key": "BANK_ACH_ABA",
      "value": "****5678"
    },
    {
      "key": "BENEFICIARY_NAME",
      "value": "Dennis Bruen"
    },
    {
      "key": "BANK_NAME",
      "value": "API V2 USD BANK 1"
    }
  ],
  "status": "VERIFIED",
  "type": "SAVINGS",
  "links": [
    {
      "href": "https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/bank-accounts/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4",
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


# Update Company Bank Account

Update a company [bank account](page:resources/bank-accounts).

```php
function updateCompanyBankAccount(
    string $accountToken,
    string $destinationToken,
    ?CreateOrUpdateBankAccount $body = null
): BankAccountResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountToken` | `string` | Template, Required | Auto-generated unique identifier representing a company account, prefixed with `acct-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^acct-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `destinationToken` | `string` | Template, Required | Auto-generated unique identifier representing a transfer destination, including prepaid cards, bank accounts, paper checks, and other users, prefixed with `dest-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^dest-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `body` | [`?CreateOrUpdateBankAccount`](../../doc/models/create-or-update-bank-account.md) | Body, Optional | - |

## Requires scope

### server

`modify`

## Response Type

[`BankAccountResult`](../../doc/models/bank-account-result.md)

## Example Usage

```php
$accountToken = 'acct-b3f0570a-6586-4e00-8d6e-8a2bf93cfae4';

$destinationToken = 'dest-4aed86e2-4929-45bf-814d-9030aef21e79';

$body = CreateOrUpdateBankAccountBuilder::init()
    ->bankAccountOwnershipType(BankAccountOwnership::BUSINESS)
    ->bankCountry(Countries::US)
    ->bankCurrency(Currencies::USD)
    ->description('Official USD Testing Bank Account 1')
    ->fields(
        [
            BankAccountFieldBuilder::init(
                BankAccountFields::BANK_BBAN,
                '01234567890'
            )->build(),
            BankAccountFieldBuilder::init(
                BankAccountFields::BANK_ACH_ABA,
                '012345678'
            )->build(),
            BankAccountFieldBuilder::init(
                BankAccountFields::BANK_NAME,
                'API V2 USD BANK 1'
            )->build(),
            BankAccountFieldBuilder::init(
                BankAccountFields::BENEFICIARY_NAME,
                'Hazel Mosciski'
            )->build()
        ]
    )
    ->type(BankAccountTypes::SAVINGS)
    ->build();

$bankAccountsController = $client->getBankAccountsController();

try {
    $result = $bankAccountsController->updateCompanyBankAccount(
        $accountToken,
        $destinationToken,
        $body
    );
    echo 'BankAccountResult:';
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
  "bankAccountOwnershipType": "BUSINESS",
  "bankCountry": "US",
  "bankCurrency": "USD",
  "createdOn": "2022-05-20T15:48:54Z",
  "description": "Official USD Testing Bank Account 1",
  "fields": [
    {
      "key": "BANK_BBAN",
      "value": "****7890"
    },
    {
      "key": "BANK_ACH_ABA",
      "value": "****5678"
    },
    {
      "key": "BENEFICIARY_NAME",
      "value": "Dennis Bruen"
    },
    {
      "key": "BANK_NAME",
      "value": "API V2 USD BANK 1"
    }
  ],
  "status": "VERIFIED",
  "type": "SAVINGS",
  "links": [
    {
      "href": "https://api.sandbox.payquicker.io/api/v2/users/user-ae92315b-6190-4e56-bdf5-c0189ac420a1/bank-accounts/dest-41579f58-35dd-4f7b-9252-aa3e337a2eb4",
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

