
# Prepaid Card Data Token Result

## Structure

`PrepaidCardDataTokenResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardProcessorType` | [`string(CardProcessors)`](../../doc/models/card-processors.md) | Required | The processor type for the prepaid card | getCardProcessorType(): string | setCardProcessorType(string cardProcessorType): void |
| `resourceValue` | `?string` | Optional | Value of the target resource | getResourceValue(): ?string | setResourceValue(?string resourceValue): void |
| `token` | `?string` | Optional | [Token](#/rest/models/structures/token) representing the resource | getToken(): ?string | setToken(?string token): void |
| `tokenPurposeType` | [`string(TokenPurposes)`](../../doc/models/token-purposes.md) | Required | Purpose of the token | getTokenPurposeType(): string | setTokenPurposeType(string tokenPurposeType): void |
| `url` | `?string` | Optional | Full path of the URI to perform the request action against a prepaid card that replaces the need to build the URL with query params. | getUrl(): ?string | setUrl(?string url): void |
| `links` | [`?(HateoasSelfRef[])`](../../doc/models/hateoas-self-ref.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10`, *Unique Items Required* | getLinks(): ?array | setLinks(?array links): void |
| `meta` | [`?MetadataItems`](../../doc/models/metadata-items.md) | Optional | - | getMeta(): ?MetadataItems | setMeta(?MetadataItems meta): void |

## Example (as JSON)

```json
{
  "cardProcessorType": "QOLO",
  "resourceValue": "string",
  "token": "string",
  "tokenPurposeType": "CARD_OPERATION",
  "url": "string",
  "links": [
    {
      "href": "string",
      "params": {
        "rel": "self"
      }
    }
  ],
  "meta": {
    "timezone": "GMT",
    "requestRef": "20260207T231757Z-r1d65bb46d495mgjhC1BL1qvx400000004rg00000000c2uh"
  }
}
```

