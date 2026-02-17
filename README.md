
# Getting Started with PQ API v2

## Introduction

PayQuicker offers a secure and instant payout platform that delivers payment to a payee-owned and insured bank account linked to a debit card, similar to a standard checking account.

As soon as the payment is made, funds are available in the insured account and available to spend instantly online through a virtual card, at retail with a plastic prepaid debit card, or by loading the card to a mobile wallet.

PayQuicker provides a RESTful API that allows authorized clients to send and receive payments, debit user's accounts for spendback, retrieve user account balance, retrieve user reports, and retrieve transaction reports.

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```bash
composer require "apimatic-pq/pq-api-matic-sdk:1.0.2"
```

Or add it to the composer.json file manually as given below:

```json
"require": {
    "apimatic-pq/pq-api-matic-sdk": "1.0.2"
}
```

You can also view the package at:
https://packagist.org/packages/apimatic-pq/pq-api-matic-sdk#1.0.2

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| xMyPayQuickerVersion | `string` | Date-based API Version specified in the header *required* on all calls.<br>*Default*: `'2026.02.01'` |
| sandboxInstance | `string(SandboxInstance)` | Sandbox Environments<br>*Default*: `SandboxInstance::SANDBOX` |
| uatInstance | `string(UatInstance)` | UAT Environments<br>*Default*: `UatInstance::UAT1` |
| environment | [`Environment`](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/README.md#environments) | The API environment. <br> **Default: `Environment.SANDBOX`** |
| timeout | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| enableRetries | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| numberOfRetries | `int` | The number of retries to make.<br>*Default*: `0` |
| retryInterval | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| backOffFactor | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| maximumRetryWaitTime | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| retryOnTimeout | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| httpStatusCodesToRetry | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| httpMethodsToRetry | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| loggingConfiguration | [`LoggingConfigurationBuilder`](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/logging-configuration-builder.md) | Represents the logging configurations for API calls |
| proxyConfiguration | [`ProxyConfigurationBuilder`](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/proxy-configuration-builder.md) | Represents the proxy configurations for API calls |
| serverCredentials | [`ServerCredentials`](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/auth/oauth-2-client-credentials-grant.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |
| clientsideCredentials | [`ClientsideCredentials`](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/auth/oauth-2-bearer-token.md) | The Credentials Setter for OAuth 2 Bearer token |

The API client can be initialized as follows:

```php
use PayQuickerSDKLib\Logging\LoggingConfigurationBuilder;
use PayQuickerSDKLib\Logging\RequestLoggingConfigurationBuilder;
use PayQuickerSDKLib\Logging\ResponseLoggingConfigurationBuilder;
use Psr\Log\LogLevel;
use PayQuickerSDKLib\Models\SandboxInstance;
use PayQuickerSDKLib\Models\UatInstance;
use PayQuickerSDKLib\Environment;
use PayQuickerSDKLib\Authentication\ServerCredentialsBuilder;
use PayQuickerSDKLib\Models\OAuthScopeServer;
use PayQuickerSDKLib\Authentication\ClientsideCredentialsBuilder;
use PayQuickerSDKLib\PayQuickerSDKClientBuilder;

$client = PayQuickerSDKClientBuilder::init()
    ->serverCredentials(
        ServerCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
            ->oAuthScopes(
                [
                    OAuthScopeServer::READONLY,
                    OAuthScopeServer::MODIFY
                ]
            )
    )
    ->clientsideCredentials(
        ClientsideCredentialsBuilder::init(
            'AccessToken'
        )
    )
    ->xMyPayQuickerVersion('2026.02.01')
    ->environment(Environment::SANDBOX)
    ->sandboxInstance(SandboxInstance::SANDBOX)
    ->uatInstance(UatInstance::UAT1)
    ->loggingConfiguration(
        LoggingConfigurationBuilder::init()
            ->level(LogLevel::INFO)
            ->requestConfiguration(RequestLoggingConfigurationBuilder::init()->body(true))
            ->responseConfiguration(ResponseLoggingConfigurationBuilder::init()->headers(true))
    )
    ->build();
```

## Environments

The SDK can be configured to use a different environment for making API calls. Available environments are:

### Fields

| Name | Description |
|  --- | --- |
| PRODUCTION | Production |
| SANDBOX | **Default** Sandbox is used for both sandbox testing and customer UAT. |
| UAT | UAT is used for both sandbox testing and customer UAT. |
| DEVELOPMENT | Development is used for local development testing. |

## Authorization

This API uses the following authentication schemes.

* [`server (OAuth 2 Client Credentials Grant)`](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/auth/oauth-2-client-credentials-grant.md)
* [`clientside (OAuth 2 Bearer token)`](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/auth/oauth-2-bearer-token.md)

## List of APIs

* [Agreements](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/agreements.md)
* [Balances](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/balances.md)
* [Bank Accounts](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/bank-accounts.md)
* [Client Side](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/client-side.md)
* [Compliance](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/compliance.md)
* [Documents](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/documents.md)
* [Electronic Wallets](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/electronic-wallets.md)
* [Events](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/events.md)
* [Invitations](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/invitations.md)
* [Jobs](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/jobs.md)
* [Payments](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/payments.md)
* [Prepaid Cards](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/prepaid-cards.md)
* [Program](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/program.md)
* [Receipts](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/receipts.md)
* [Spendback](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/spendback.md)
* [Spendback Refunds](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/spendback-refunds.md)
* [Statements](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/statements.md)
* [Transfers](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/transfers.md)
* [Users](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/users.md)
* [Webhooks](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/controllers/webhooks.md)

## SDK Infrastructure

### Configuration

* [ProxyConfigurationBuilder](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/proxy-configuration-builder.md)
* [LoggingConfigurationBuilder](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/logging-configuration-builder.md)
* [RequestLoggingConfigurationBuilder](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/request-logging-configuration-builder.md)
* [ResponseLoggingConfigurationBuilder](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/response-logging-configuration-builder.md)

### HTTP

* [HttpRequest](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/http-request.md)
* [HttpResponse](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/http-response.md)

### Utilities

* [FileWrapper](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/file-wrapper.md)
* [ApiException](https://www.github.com/sdks-io/pq-api-matic-php-sdk/tree/1.0.2/doc/api-exception.md)

