
# Electronic Wallet Required Fields

Classifies the required [electronic wallet field](#/rest/models/structures/electronic-wallet-required-fields) objects

## Structure

`ElectronicWalletRequiredFields`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `format` | [`?ElectronicWalletRequirementFormat`](../../doc/models/electronic-wallet-requirement-format.md) | Optional | Classifies the [format](#/rest/models/structures/electronic-wallet-requirement-format) of the required information for an electronic wallet | getFormat(): ?ElectronicWalletRequirementFormat | setFormat(?ElectronicWalletRequirementFormat format): void |
| `requirement` | [`?string(ElectronicWalletFields)`](../../doc/models/electronic-wallet-fields.md) | Optional | Classifies electronic wallet [field types](#/rest/models/structures/electronic-wallet-fields) | getRequirement(): ?string | setRequirement(?string requirement): void |
| `description` | [`?(Translation[])`](../../doc/models/translation.md) | Optional | Localized requirement description for display purposes | getDescription(): ?array | setDescription(?array description): void |
| `validators` | [`?(ElectronicWalletRequirementValidator[])`](../../doc/models/electronic-wallet-requirement-validator.md) | Optional | - | getValidators(): ?array | setValidators(?array validators): void |

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
  "requirement": "UNDEFINED",
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

