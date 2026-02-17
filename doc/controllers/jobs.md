# Jobs

# Jobs

---


The *Jobs* resource allows you to list, create, retrieve, and cancel jobs.

```php
$jobsController = $client->getJobsController();
```

## Class Name

`JobsController`

## Methods

* [Cancel Payment Job](../../doc/controllers/jobs.md#cancel-payment-job)
* [Create Payment Job](../../doc/controllers/jobs.md#create-payment-job)
* [List Payment Jobs](../../doc/controllers/jobs.md#list-payment-jobs)
* [Retrieve Payment Job](../../doc/controllers/jobs.md#retrieve-payment-job)


# Cancel Payment Job

Cancel an submitted payment [job](page:resources/jobs).

```php
function cancelPaymentJob(string $jobToken): PaymentJobResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `jobToken` | `string` | Template, Required | Auto-generated unique identifier representing a job, prefixed with `jobs-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^jobs-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |

## Requires scope

### server

`modify`

## Response Type

[`PaymentJobResult`](../../doc/models/payment-job-result.md)

## Example Usage

```php
$jobToken = 'jobs-2bbfc967-d12e-4647-a887-d905172fb4bc';

$jobsController = $client->getJobsController();

try {
    $result = $jobsController->cancelPaymentJob($jobToken);
    echo 'PaymentJobResult:';
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


# Create Payment Job

Create a [payment](page:resources/jobs).

```php
function createPaymentJob($body = null): PaymentJobResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | mixed | Body, Optional | - |

## Requires scope

### server

`modify`

## Response Type

[`PaymentJobResult`](../../doc/models/payment-job-result.md)

## Example Usage

```php
$body = GatewayPaymentJobBuilder::init()
    ->notBefore(DateTimeHelper::fromRfc3339DateTime('2022-04-26T15:16:18Z'))
    ->notAfter(DateTimeHelper::fromRfc3339DateTime('2019-08-24T14:15:22Z'))
    ->items(
        [
            GatewayPaymentJobQuoteBuilder::init()
                ->amount(1.02)
                ->currency(Currencies::USD)
                ->sourceToken('acct-3908ab5a-6ce1-474d-8b80-a63a7b147860')
                ->destinationToken('dest-631b200f-665d-4dbe-bd01-3063c9dec97d')
                ->note('string')
                ->memo('string')
                ->purpose(PaymentPurposes::BONUS)
                ->clientPaymentId('d4b6f130-1d1c-4ce2-903a-0c1ad128f55e')
                ->build()
        ]
    )
    ->build();

$jobsController = $client->getJobsController();

try {
    $result = $jobsController->createPaymentJob($body);
    echo 'PaymentJobResult:';
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


# List Payment Jobs

Retrieve a list of [jobs](page:resources/jobs) that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listPaymentJobs(
    int $page,
    int $pageSize,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): PaymentJobListResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | `int` | Query, Required | Page number of specific page to return<br><br>**Constraints**: `>= 1` |
| `pageSize` | `int` | Query, Required | Number of items to be displayed per page<br><br>**Constraints**: `>= 1`, `<= 50` |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `sort` | `?string` | Query, Optional | Sort request results by specific attribute. |
| `language` | [`?string(Languages)`](../../doc/models/languages.md) | Query, Optional | Filter results by language type. |

## Requires scope

### server

`readonly`

## Response Type

[`PaymentJobListResult`](../../doc/models/payment-job-list-result.md)

## Example Usage

```php
$page = 1;

$pageSize = 20;

$filter = 'string';

$sort = 'string';

$language = Languages::ENUS;

$jobsController = $client->getJobsController();

try {
    $result = $jobsController->listPaymentJobs(
        $page,
        $pageSize,
        $filter,
        $sort,
        $language
    );
    echo 'PaymentJobListResult:';
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


# Retrieve Payment Job

Retrieve a single payment [job](page:resources/jobs).

```php
function retrievePaymentJob(
    string $jobToken,
    ?string $filter = null,
    ?string $language = null
): PaymentJobResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `jobToken` | `string` | Template, Required | Auto-generated unique identifier representing a job, prefixed with `jobs-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^jobs-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `language` | [`?string(Languages)`](../../doc/models/languages.md) | Query, Optional | Filter results by language type. |

## Requires scope

### server

`readonly`

## Response Type

[`PaymentJobResult`](../../doc/models/payment-job-result.md)

## Example Usage

```php
$jobToken = 'jobs-2bbfc967-d12e-4647-a887-d905172fb4bc';

$filter = 'string';

$language = Languages::ENUS;

$jobsController = $client->getJobsController();

try {
    $result = $jobsController->retrievePaymentJob(
        $jobToken,
        $filter,
        $language
    );
    echo 'PaymentJobResult:';
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

