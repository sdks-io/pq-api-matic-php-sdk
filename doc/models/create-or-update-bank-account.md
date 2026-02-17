
# Create or Update Bank Account

## Structure

`CreateOrUpdateBankAccount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankAccountOwnershipType` | [`?string(BankAccountOwnership)`](../../doc/models/bank-account-ownership.md) | Optional | Account [ownership types](#/rest/models/structures/bank-account-ownership) | getBankAccountOwnershipType(): ?string | setBankAccountOwnershipType(?string bankAccountOwnershipType): void |
| `bankCountry` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getBankCountry(): ?string | setBankCountry(?string bankCountry): void |
| `bankCurrency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Optional | [Currency code type](#/rest/models/structures/country) for the object<br><br>**Default**: `Currencies::USD` | getBankCurrency(): ?string | setBankCurrency(?string bankCurrency): void |
| `description` | `?string` | Optional | User-supplied description of the bank account for reference | getDescription(): ?string | setDescription(?string description): void |
| `fields` | [`?(BankAccountField[])`](../../doc/models/bank-account-field.md) | Optional | - | getFields(): ?array | setFields(?array fields): void |
| `type` | [`?string(BankAccountTypes)`](../../doc/models/bank-account-types.md) | Optional | Financial purpose of the [bank account](#/rest/models/structures/bank-account-type) | getType(): ?string | setType(?string type): void |
| `transferMethodType` | [`?string(TransferMethodTypes)`](../../doc/models/transfer-method-types.md) | Optional | Optional transfer methods applicable only to bank and e-wallet transfers. | getTransferMethodType(): ?string | setTransferMethodType(?string transferMethodType): void |
| `address` | [`?BankAccountAddress`](../../doc/models/bank-account-address.md) | Optional | - | getAddress(): ?BankAccountAddress | setAddress(?BankAccountAddress address): void |

## Example (as JSON)

```json
{
  "bankAccountOwnershipType": "BUSINESS",
  "bankcountry": "US",
  "bankCurrency": "USD",
  "description": "string",
  "fields": [
    {
      "key": "BANK_ACH_ABA",
      "value": "string"
    }
  ],
  "type": "CHECKING",
  "transferMethodType": "IACH",
  "bankCountry": "BV"
}
```

