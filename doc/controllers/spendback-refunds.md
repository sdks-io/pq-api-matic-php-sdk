# Spendback Refunds

```php
$spendbackRefundsController = $client->getSpendbackRefundsController();
```

## Class Name

`SpendbackRefundsController`

## Methods

* [Accept Spendback Refund Quote](../../doc/controllers/spendback-refunds.md#accept-spendback-refund-quote)
* [Cancel Spendback Refund Quote](../../doc/controllers/spendback-refunds.md#cancel-spendback-refund-quote)
* [Create Spendback Refund Quote](../../doc/controllers/spendback-refunds.md#create-spendback-refund-quote)
* [List Spendback Refunds](../../doc/controllers/spendback-refunds.md#list-spendback-refunds)
* [Retrieve Spendback Refund](../../doc/controllers/spendback-refunds.md#retrieve-spendback-refund)


# Accept Spendback Refund Quote

Accept a spendback return quote.

```php
function acceptSpendbackRefundQuote(string $spendbackToken, string $refundToken): SpendbackRefundResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `spendbackToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual spend back transaction and quote, prefixed with `spnd-`.<br><br>**Constraints**: *Pattern*: `^spnd-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `refundToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual spend back refund transaction and quote, prefixed with `rfnd-`.<br><br>**Constraints**: *Pattern*: `^rfnd-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |

## Requires scope

### server

`modify`

## Response Type

[`SpendbackRefundResult`](../../doc/models/spendback-refund-result.md)

## Example Usage

```php
$spendbackToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';

$refundToken = 'rfnd-c39437e1-dc80-4293-8211-c14b5a32f762';

$spendbackRefundsController = $client->getSpendbackRefundsController();

try {
    $result = $spendbackRefundsController->acceptSpendbackRefundQuote(
        $spendbackToken,
        $refundToken
    );
    echo 'SpendbackRefundResult:';
    var_dump($result);
} catch (ApiErrorResultException $exp) {
    echo 'Caught ApiErrorResultException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| 500 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| Default | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |


# Cancel Spendback Refund Quote

Cancel an spendback refund quote.

```php
function cancelSpendbackRefundQuote(string $spendbackToken, string $refundToken): SpendbackRefundResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `spendbackToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual spend back transaction and quote, prefixed with `spnd-`.<br><br>**Constraints**: *Pattern*: `^spnd-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `refundToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual spend back refund transaction and quote, prefixed with `rfnd-`.<br><br>**Constraints**: *Pattern*: `^rfnd-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |

## Requires scope

### server

`modify`

## Response Type

[`SpendbackRefundResult`](../../doc/models/spendback-refund-result.md)

## Example Usage

```php
$spendbackToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';

$refundToken = 'rfnd-c39437e1-dc80-4293-8211-c14b5a32f762';

$spendbackRefundsController = $client->getSpendbackRefundsController();

try {
    $result = $spendbackRefundsController->cancelSpendbackRefundQuote(
        $spendbackToken,
        $refundToken
    );
    echo 'SpendbackRefundResult:';
    var_dump($result);
} catch (ApiErrorResultException $exp) {
    echo 'Caught ApiErrorResultException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| 500 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| Default | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |


# Create Spendback Refund Quote

Perform a [spendback](page:resources/spendbacks) refund for a partial amount.

```php
function createSpendbackRefundQuote(
    string $spendbackToken,
    ?CreateSpendbackRefundQuote $body = null
): SpendbackRefundResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `spendbackToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual spend back transaction and quote, prefixed with `spnd-`.<br><br>**Constraints**: *Pattern*: `^spnd-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `body` | [`?CreateSpendbackRefundQuote`](../../doc/models/create-spendback-refund-quote.md) | Body, Optional | - |

## Requires scope

### server

`modify`

## Response Type

[`SpendbackRefundResult`](../../doc/models/spendback-refund-result.md)

## Example Usage

```php
$spendbackToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';

$body = CreateSpendbackRefundQuoteBuilder::init()
    ->amount(1.13)
    ->build();

$spendbackRefundsController = $client->getSpendbackRefundsController();

try {
    $result = $spendbackRefundsController->createSpendbackRefundQuote(
        $spendbackToken,
        $body
    );
    echo 'SpendbackRefundResult:';
    var_dump($result);
} catch (ApiErrorResultException $exp) {
    echo 'Caught ApiErrorResultException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| 500 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| Default | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |


# List Spendback Refunds

Retrieve a list of [spendbacks](page:resources/spendbacks) refunds that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listSpendbackRefunds(
    string $spendbackToken,
    int $page,
    int $pageSize,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): SpendbackRefundListResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `spendbackToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual spend back transaction and quote, prefixed with `spnd-`.<br><br>**Constraints**: *Pattern*: `^spnd-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `page` | `int` | Query, Required | Page number of specific page to return<br><br>**Constraints**: `>= 1` |
| `pageSize` | `int` | Query, Required | Number of items to be displayed per page<br><br>**Constraints**: `>= 1`, `<= 50` |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `sort` | `?string` | Query, Optional | Sort request results by specific attribute. |
| `language` | [`?string(Languages)`](../../doc/models/languages.md) | Query, Optional | Filter results by language type. |

## Requires scope

### server

`readonly`

## Response Type

[`SpendbackRefundListResult`](../../doc/models/spendback-refund-list-result.md)

## Example Usage

```php
$spendbackToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';

$page = 1;

$pageSize = 20;

$filter = 'string';

$sort = 'string';

$language = Languages::ENUS;

$spendbackRefundsController = $client->getSpendbackRefundsController();

try {
    $result = $spendbackRefundsController->listSpendbackRefunds(
        $spendbackToken,
        $page,
        $pageSize,
        $filter,
        $sort,
        $language
    );
    echo 'SpendbackRefundListResult:';
    var_dump($result);
} catch (ApiErrorResultException $exp) {
    echo 'Caught ApiErrorResultException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| 500 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| Default | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |


# Retrieve Spendback Refund

Retrieve a single spendback refund using the rfnd token

```php
function retrieveSpendbackRefund(
    string $spendbackToken,
    string $refundToken,
    int $page,
    int $pageSize,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): SpendbackRefundResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `spendbackToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual spend back transaction and quote, prefixed with `spnd-`.<br><br>**Constraints**: *Pattern*: `^spnd-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `refundToken` | `string` | Template, Required | Auto-generated unique identifier representing an individual spend back refund transaction and quote, prefixed with `rfnd-`.<br><br>**Constraints**: *Pattern*: `^rfnd-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `page` | `int` | Query, Required | Page number of specific page to return<br><br>**Constraints**: `>= 1` |
| `pageSize` | `int` | Query, Required | Number of items to be displayed per page<br><br>**Constraints**: `>= 1`, `<= 50` |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `sort` | `?string` | Query, Optional | Sort request results by specific attribute. |
| `language` | [`?string(Languages)`](../../doc/models/languages.md) | Query, Optional | Filter results by language type. |

## Requires scope

### server

`readonly`

## Response Type

[`SpendbackRefundResult`](../../doc/models/spendback-refund-result.md)

## Example Usage

```php
$spendbackToken = 'spnd-c39437e1-dc80-4293-8211-c14b5a32f762';

$refundToken = 'rfnd-c39437e1-dc80-4293-8211-c14b5a32f762';

$page = 1;

$pageSize = 20;

$filter = 'string';

$sort = 'string';

$language = Languages::ENUS;

$spendbackRefundsController = $client->getSpendbackRefundsController();

try {
    $result = $spendbackRefundsController->retrieveSpendbackRefund(
        $spendbackToken,
        $refundToken,
        $page,
        $pageSize,
        $filter,
        $sort,
        $language
    );
    echo 'SpendbackRefundResult:';
    var_dump($result);
} catch (ApiErrorResultException $exp) {
    echo 'Caught ApiErrorResultException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| 500 | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |
| Default | - | [`ApiErrorResultException`](../../doc/models/api-error-result-exception.md) |

