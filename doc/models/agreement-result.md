
# Agreement Result

## Structure

`AgreementResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `?string` | Optional | [Token](#/rest/models/structures/token) representing the resource | getToken(): ?string | setToken(?string token): void |
| `contentBase64` | `?string` | Optional | Program agreement content | getContentBase64(): ?string | setContentBase64(?string contentBase64): void |
| `url` | `?string` | Optional | Full path of the URI to the content for the program agreement | getUrl(): ?string | setUrl(?string url): void |
| `type` | [`?string(AgreementTypes)`](../../doc/models/agreement-types.md) | Optional | - | getType(): ?string | setType(?string type): void |
| `links` | [`?(HateoasSelfRef[])`](../../doc/models/hateoas-self-ref.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10`, *Unique Items Required* | getLinks(): ?array | setLinks(?array links): void |
| `meta` | [`?MetadataItems`](../../doc/models/metadata-items.md) | Optional | - | getMeta(): ?MetadataItems | setMeta(?MetadataItems meta): void |

## Example (as JSON)

```json
{
  "token": "string",
  "contentBase64": "string",
  "url": "string",
  "type": "CARD_HOLDER_AGREEMENT",
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

