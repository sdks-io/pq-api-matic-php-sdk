
# Prepaid Card Pin Token Result

## Structure

`PrepaidCardPinTokenResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardProcessorType` | [`?string(CardProcessors)`](../../doc/models/card-processors.md) | Optional | The processor type for the prepaid card | getCardProcessorType(): ?string | setCardProcessorType(?string cardProcessorType): void |
| `cardPinToken` | `?string` | Optional | [Token](#/rest/models/structures/prepaid-card-pin-token) used as part of a two-leg card PIN reveal request sent directly from the client that generally involves a second piece of data, such as the CVV code on the back of the card. | getCardPinToken(): ?string | setCardPinToken(?string cardPinToken): void |
| `token` | `?string` | Optional | [Token](#/rest/models/structures/token) representing the resource | getToken(): ?string | setToken(?string token): void |
| `url` | `?string` | Optional | Full path of the URI to perform the request action against a prepaid card that replaces the need to build the URL with query params. | getUrl(): ?string | setUrl(?string url): void |
| `links` | [`?(HateoasSelfRef[])`](../../doc/models/hateoas-self-ref.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10`, *Unique Items Required* | getLinks(): ?array | setLinks(?array links): void |
| `meta` | [`?MetadataItems`](../../doc/models/metadata-items.md) | Optional | - | getMeta(): ?MetadataItems | setMeta(?MetadataItems meta): void |

## Example (as JSON)

```json
{
  "cardProcessorType": "QOLO",
  "cardPinToken": "string",
  "token": "string",
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

