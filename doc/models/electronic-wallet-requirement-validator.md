
# Electronic Wallet Requirement Validator

[Validator type](#/rest/models/structures/electronic-wallet-requirement-validator) that for the required electronic wallet information.

## Structure

`ElectronicWalletRequirementValidator`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `validatorType` | [`?string(ValidatorTypes)`](../../doc/models/validator-types.md) | Optional | [Validator types](#/rest/models/structures/bank-account-requirement-validator) for the required bank account information. | getValidatorType(): ?string | setValidatorType(?string validatorType): void |
| `expression` | `string` | Required | Validation regular expression | getExpression(): string | setExpression(string expression): void |

## Example (as JSON)

```json
{
  "validatorType": "LENGTH",
  "expression": "string"
}
```

