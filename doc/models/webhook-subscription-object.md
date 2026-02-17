
# Webhook Subscription Object

Webhook subscription object

## Structure

`WebhookSubscriptionObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `?string` | Optional | [Token](#/rest/models/structures/token) representing the resource | getToken(): ?string | setToken(?string token): void |
| `created` | `?DateTime` | Optional | Time object was [created](#/rest/models/structures/created-on) | getCreated(): ?\DateTime | setCreated(?\DateTime created): void |
| `lastUpdated` | `?DateTime` | Optional | Date and time that the object was last updated | getLastUpdated(): ?\DateTime | setLastUpdated(?\DateTime lastUpdated): void |
| `url` | `?string` | Optional | Full path of the URI used for this object | getUrl(): ?string | setUrl(?string url): void |
| `namespace` | [`?string(WebhookNamespaces)`](../../doc/models/webhook-namespaces.md) | Optional | Namespace used to identify and refer to the object | getNamespace(): ?string | setNamespace(?string namespace): void |
| `status` | [`?string(WebhookSubscriptionStatuses)`](../../doc/models/webhook-subscription-statuses.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `links` | [`?(HateoasSelfRef[])`](../../doc/models/hateoas-self-ref.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10`, *Unique Items Required* | getLinks(): ?array | setLinks(?array links): void |

## Example (as JSON)

```json
{
  "token": "string",
  "created": "02/07/2026 22:23:09",
  "lastUpdated": "02/07/2026 22:23:10",
  "url": "string",
  "namespace": "BANKACCOUNTS.CREATED",
  "status": "AVAILABLE",
  "links": [
    {
      "href": "string",
      "params": {
        "rel": "self"
      }
    }
  ]
}
```

