
# Electronic Wallet Requirement Format Legend

Classifies the [legend format](#/rest/models/structures/electronic-wallet-requirement-format-legend) of the required information for a electronic wallet

## Structure

`ElectronicWalletRequirementFormatLegend`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `key` | `?string` | Optional | - | getKey(): ?string | setKey(?string key): void |
| `descriptions` | [`?(Translation[])`](../../doc/models/translation.md) | Optional | Localized requirement description for display purposes | getDescriptions(): ?array | setDescriptions(?array descriptions): void |

## Example (as JSON)

```json
{
  "key": "string",
  "descriptions": [
    {
      "language": "en-US",
      "translation": "string"
    }
  ]
}
```

