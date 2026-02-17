
# Create Webhook Request

## Structure

`CreateWebhookRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `namespace` | [`?string(WebhookNamespaces)`](../../doc/models/webhook-namespaces.md) | Optional | Namespace used to identify and refer to the object | getNamespace(): ?string | setNamespace(?string namespace): void |
| `url` | `?string` | Optional | Full path of the URI used for this object | getUrl(): ?string | setUrl(?string url): void |

## Example (as JSON)

```json
{
  "namespace": "BANKACCOUNTS.CREATED",
  "url": "string"
}
```

