# Invitations

# Invitations

---


The *Invitations* resource allows you to list, create, retrieve, and modify invitations.

```php
$invitationsController = $client->getInvitationsController();
```

## Class Name

`InvitationsController`

## Methods

* [Cancel Invitation](../../doc/controllers/invitations.md#cancel-invitation)
* [Create Invitation](../../doc/controllers/invitations.md#create-invitation)
* [List Invitations](../../doc/controllers/invitations.md#list-invitations)
* [Retrieve Invitation](../../doc/controllers/invitations.md#retrieve-invitation)
* [Update Invitation](../../doc/controllers/invitations.md#update-invitation)


# Cancel Invitation

Cancel an open [invitation](page:resources/invitations) quote.

```php
function cancelInvitation(string $invitationToken): InvitationResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `invitationToken` | `string` | Template, Required | Auto-generated unique identifier representing an invite, prefixed with `invt-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^invt-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |

## Requires scope

### server

`modify`

## Response Type

[`InvitationResult`](../../doc/models/invitation-result.md)

## Example Usage

```php
$invitationToken = 'invt-2bbfc967-d12e-4647-a887-d905172fb4bc';

$invitationsController = $client->getInvitationsController();

try {
    $result = $invitationsController->cancelInvitation($invitationToken);
    echo 'InvitationResult:';
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


# Create Invitation

Create a [invitation](page:resources/invitations) quote.

```php
function createInvitation(?CreateInvitation $body = null): InvitationResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?CreateInvitation`](../../doc/models/create-invitation.md) | Body, Optional | - |

## Requires scope

### server

`modify`

## Response Type

[`InvitationResult`](../../doc/models/invitation-result.md)

## Example Usage

```php
$body = CreateInvitationBuilder::init()
    ->currency(Currencies::USD)
    ->build();

$invitationsController = $client->getInvitationsController();

try {
    $result = $invitationsController->createInvitation($body);
    echo 'InvitationResult:';
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


# List Invitations

Retrieve a list of [invitations](page:resources/invitations) that supports filtering, sorting, and pagination through existing mechanisms.

```php
function listInvitations(
    int $page,
    int $pageSize,
    ?string $filter = null,
    ?string $sort = null,
    ?string $language = null
): InvitationListResult
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

[`InvitationListResult`](../../doc/models/invitation-list-result.md)

## Example Usage

```php
$page = 1;

$pageSize = 20;

$filter = 'string';

$sort = 'string';

$language = Languages::ENUS;

$invitationsController = $client->getInvitationsController();

try {
    $result = $invitationsController->listInvitations(
        $page,
        $pageSize,
        $filter,
        $sort,
        $language
    );
    echo 'InvitationListResult:';
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


# Retrieve Invitation

Retrieve a single [invitation](page:resources/invitations).

```php
function retrieveInvitation(
    string $invitationToken,
    ?string $filter = null,
    ?string $language = null
): InvitationResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `invitationToken` | `string` | Template, Required | Auto-generated unique identifier representing an invite, prefixed with `invt-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^invt-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |
| `filter` | `?string` | Query, Optional | Filter request results by specific criteria. |
| `language` | [`?string(Languages)`](../../doc/models/languages.md) | Query, Optional | Filter results by language type. |

## Requires scope

### server

`readonly`

## Response Type

[`InvitationResult`](../../doc/models/invitation-result.md)

## Example Usage

```php
$invitationToken = 'invt-2bbfc967-d12e-4647-a887-d905172fb4bc';

$filter = 'string';

$language = Languages::ENUS;

$invitationsController = $client->getInvitationsController();

try {
    $result = $invitationsController->retrieveInvitation(
        $invitationToken,
        $filter,
        $language
    );
    echo 'InvitationResult:';
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


# Update Invitation

Accept an open [invitation](page:resources/invitations) quote.

```php
function updateInvitation(string $invitationToken): InvitationResult
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `invitationToken` | `string` | Template, Required | Auto-generated unique identifier representing an invite, prefixed with `invt-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^invt-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` |

## Requires scope

### server

`modify`

## Response Type

[`InvitationResult`](../../doc/models/invitation-result.md)

## Example Usage

```php
$invitationToken = 'invt-2bbfc967-d12e-4647-a887-d905172fb4bc';

$invitationsController = $client->getInvitationsController();

try {
    $result = $invitationsController->updateInvitation($invitationToken);
    echo 'InvitationResult:';
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

