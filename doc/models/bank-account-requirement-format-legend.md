
# Bank Account Requirement Format Legend

Classifies the [legend format](#/rest/models/structures/bank-account-requirement-format-legend) of the required information for a bank account

## Structure

`BankAccountRequirementFormatLegend`

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

