
# Bank Account Requirement Format

Classifies the [format](#/rest/models/structures/bank-account-requirement-format) of the required information for a bank account

## Structure

`BankAccountRequirementFormat`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `example` | `?string` | Optional | Example of a requirement generated from the validator(s) | getExample(): ?string | setExample(?string example): void |
| `legend` | [`?(BankAccountRequirementFormatLegend[])`](../../doc/models/bank-account-requirement-format-legend.md) | Optional | - | getLegend(): ?array | setLegend(?array legend): void |

## Example (as JSON)

```json
{
  "example": "string",
  "legend": [
    {
      "key": "string",
      "descriptions": [
        {
          "language": "en-US",
          "translation": "string"
        }
      ]
    }
  ]
}
```

