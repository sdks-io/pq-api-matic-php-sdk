
# Agreement List Result Json

## Structure

`AgreementListResultJson`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `payload` | [`AgreementObject[]`](../../doc/models/agreement-object.md) | Required | **Constraints**: *Minimum Items*: `1`, *Unique Items Required* | getPayload(): array | setPayload(array payload): void |
| `meta` | [`ListMetadata`](../../doc/models/list-metadata.md) | Required | - | getMeta(): ListMetadata | setMeta(ListMetadata meta): void |
| `links` | [`HateoasSelfRef[]`](../../doc/models/hateoas-self-ref.md) | Required | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10`, *Unique Items Required* | getLinks(): array | setLinks(array links): void |

## Example (as JSON)

```json
{
  "payload": [
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
      ]
    }
  ],
  "meta": {
    "pageNo": "string",
    "pageSize": "string",
    "pageCount": "string",
    "recordCount": "string",
    "timezone": "GMT",
    "requestRef": "20260207T231757Z-r1d65bb46d495mgjhC1BL1qvx400000004rg00000000c2uh"
  },
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

