
# Bank Account Required Fields

Classifies the required [bank account field](#/rest/models/structures/bank-account-required-fields) objects

## Structure

`BankAccountRequiredFields`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `format` | [`?BankAccountRequirementFormat`](../../doc/models/bank-account-requirement-format.md) | Optional | Classifies the [format](#/rest/models/structures/bank-account-requirement-format) of the required information for a bank account | getFormat(): ?BankAccountRequirementFormat | setFormat(?BankAccountRequirementFormat format): void |
| `requirement` | [`?string(BankAccountFields)`](../../doc/models/bank-account-fields.md) | Optional | Classifies bank account [field types](#/rest/models/structures/bank-account-fields) | getRequirement(): ?string | setRequirement(?string requirement): void |
| `description` | [`?(Translation[])`](../../doc/models/translation.md) | Optional | Localized requirement description for display purposes | getDescription(): ?array | setDescription(?array description): void |
| `validators` | [`?(BankAccountRequirementValidator[])`](../../doc/models/bank-account-requirement-validator.md) | Optional | - | getValidators(): ?array | setValidators(?array validators): void |

## Example (as JSON)

```json
{
  "format": {
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
  },
  "requirement": "BANK_ACH_ABA",
  "description": [
    {
      "language": "en-US",
      "translation": "string"
    }
  ],
  "validators": [
    {
      "validatorType": "LENGTH",
      "expression": "string"
    }
  ]
}
```

