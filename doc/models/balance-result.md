
# Balance Result

## Structure

`BalanceResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `float` | Required | Amount of money in the account<br><br>**Default**: `0` | getAmount(): float | setAmount(float amount): void |
| `currency` | [`string(Currencies)`](../../doc/models/currencies.md) | Required | [Currency code type](#/rest/models/structures/country) for the object<br><br>**Default**: `Currencies::USD` | getCurrency(): string | setCurrency(string currency): void |
| `formattedAmount` | `string` | Required | Combination of the amount and currency type<br><br>**Default**: `'$0.05 USD'` | getFormattedAmount(): string | setFormattedAmount(string formattedAmount): void |
| `token` | `string` | Required | [Token](#/rest/models/structures/token) representing the resource | getToken(): string | setToken(string token): void |
| `links` | [`?(HateoasSelfRef[])`](../../doc/models/hateoas-self-ref.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10`, *Unique Items Required* | getLinks(): ?array | setLinks(?array links): void |
| `meta` | [`?MetadataItems`](../../doc/models/metadata-items.md) | Optional | - | getMeta(): ?MetadataItems | setMeta(?MetadataItems meta): void |

## Example (as JSON)

```json
{
  "amount": 0.0,
  "currency": "USD",
  "formattedAmount": "$0.05 USD",
  "token": "string",
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

