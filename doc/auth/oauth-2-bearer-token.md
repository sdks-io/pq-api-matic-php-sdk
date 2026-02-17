
# OAuth 2 Bearer token



Documentation for accessing and setting credentials for clientside.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| AccessToken | `string` | The OAuth 2.0 Access Token to use for API requests. | `accessToken` | `getAccessToken()` |



**Note:** Auth credentials can be set using `ClientsideCredentialsBuilder::init()` in `clientsideCredentials` method in the client builder and accessed through `getClientsideCredentials` method in the client instance.

## Usage Example

### Client Initialization

You must provide credentials in the client as shown in the following code snippet.

```php
use PayQuickerSDKLib\Authentication\ClientsideCredentialsBuilder;
use PayQuickerSDKLib\PayQuickerSDKClientBuilder;

$client = PayQuickerSDKClientBuilder::init()
    ->clientsideCredentials(
        ClientsideCredentialsBuilder::init(
            'AccessToken'
        )
    )
    ->build();
```


