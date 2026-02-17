
# Client Class Documentation

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| xMyPayQuickerVersion | `string` | Date-based API Version specified in the header *required* on all calls.<br>*Default*: `'2026.02.01'` |
| sandboxInstance | `string(SandboxInstance)` | Sandbox Environments<br>*Default*: `SandboxInstance::SANDBOX` |
| uatInstance | `string(UatInstance)` | UAT Environments<br>*Default*: `UatInstance::UAT1` |
| environment | [`Environment`](../README.md#environments) | The API environment. <br> **Default: `Environment.SANDBOX`** |
| timeout | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| enableRetries | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| numberOfRetries | `int` | The number of retries to make.<br>*Default*: `0` |
| retryInterval | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| backOffFactor | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| maximumRetryWaitTime | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| retryOnTimeout | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| httpStatusCodesToRetry | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| httpMethodsToRetry | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| loggingConfiguration | [`LoggingConfigurationBuilder`](../doc/logging-configuration-builder.md) | Represents the logging configurations for API calls |
| proxyConfiguration | [`ProxyConfigurationBuilder`](../doc/proxy-configuration-builder.md) | Represents the proxy configurations for API calls |
| serverCredentials | [`ServerCredentials`](auth/oauth-2-client-credentials-grant.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |
| clientsideCredentials | [`ClientsideCredentials`](auth/oauth-2-bearer-token.md) | The Credentials Setter for OAuth 2 Bearer token |

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

## PQ API v2 Client

The gateway for the SDK. This class acts as a factory for the Controllers and also holds the configuration of the SDK.

## Controllers

| Name | Description |
|  --- | --- |
| getAgreementsController() | Gets AgreementsController |
| getBalancesController() | Gets BalancesController |
| getBankAccountsController() | Gets BankAccountsController |
| getClientSideController() | Gets ClientSideController |
| getComplianceController() | Gets ComplianceController |
| getDocumentsController() | Gets DocumentsController |
| getElectronicWalletsController() | Gets ElectronicWalletsController |
| getEventsController() | Gets EventsController |
| getPaymentsController() | Gets PaymentsController |
| getPrepaidCardsController() | Gets PrepaidCardsController |
| getProgramController() | Gets ProgramController |
| getReceiptsController() | Gets ReceiptsController |
| getSpendbackController() | Gets SpendbackController |
| getSpendbackRefundsController() | Gets SpendbackRefundsController |
| getStatementsController() | Gets StatementsController |
| getTransfersController() | Gets TransfersController |
| getUsersController() | Gets UsersController |
| getWebhooksController() | Gets WebhooksController |
| getJobsController() | Gets JobsController |
| getInvitationsController() | Gets InvitationsController |
| getOAuthAuthorizationController() | Gets OAuthAuthorizationController |

