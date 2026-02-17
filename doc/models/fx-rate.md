
# Fx Rate

Exchange rate

## Structure

`FxRate`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `destinationAmount` | `?float` | Optional | Allocated money to be sent in the transaction. | getDestinationAmount(): ?float | setDestinationAmount(?float destinationAmount): void |
| `destinationCurrency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Optional | [Currency code type](#/rest/models/structures/country) for the object<br><br>**Default**: `Currencies::USD` | getDestinationCurrency(): ?string | setDestinationCurrency(?string destinationCurrency): void |
| `destinationFormattedAmount` | `?string` | Optional | Combination of the amount and currency type<br><br>**Default**: `'$0.05 USD'` | getDestinationFormattedAmount(): ?string | setDestinationFormattedAmount(?string destinationFormattedAmount): void |
| `rate` | `?float` | Optional | Exchange [rate](#/rest/models/structures/rate)<br><br>**Constraints**: `>= 0`, `<= 1` | getRate(): ?float | setRate(?float rate): void |
| `sourceAmount` | `?float` | Optional | Allocated money to be sent in the transaction.<br><br>**Default**: `1.02` | getSourceAmount(): ?float | setSourceAmount(?float sourceAmount): void |
| `sourceCurrency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Optional | [Currency code type](#/rest/models/structures/country) for the object<br><br>**Default**: `Currencies::USD` | getSourceCurrency(): ?string | setSourceCurrency(?string sourceCurrency): void |
| `sourceFormattedAmount` | `?string` | Optional | Combination of the amount and currency type<br><br>**Default**: `'$0.05 USD'` | getSourceFormattedAmount(): ?string | setSourceFormattedAmount(?string sourceFormattedAmount): void |

## Example (as JSON)

```json
{
  "destinationAmount": 50.0,
  "destinationCurrency": "USD",
  "destinationFormattedAmount": "$0.05 USD",
  "rate": 0.85,
  "sourceAmount": 1.02,
  "sourceCurrency": "USD",
  "sourceFormattedAmount": "$0.05 USD"
}
```

