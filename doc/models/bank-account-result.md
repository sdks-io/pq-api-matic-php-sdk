
# Bank Account Result

## Structure

`BankAccountResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `?string` | Optional | Unique identifier representing the [destination of funds](#/rest/models/structures/destination-token)<br><br>**Default**: `'dest-631b200f-665d-4dbe-bd01-3063c9dec97d'`<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^(acct\|dest\|user)-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` | getToken(): ?string | setToken(?string token): void |
| `bankAccountOwnershipType` | [`?string(BankAccountOwnership)`](../../doc/models/bank-account-ownership.md) | Optional | Account [ownership types](#/rest/models/structures/bank-account-ownership) | getBankAccountOwnershipType(): ?string | setBankAccountOwnershipType(?string bankAccountOwnershipType): void |
| `bankCountry` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getBankCountry(): ?string | setBankCountry(?string bankCountry): void |
| `bankCurrency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Optional | [Currency code type](#/rest/models/structures/country) for the object<br><br>**Default**: `Currencies::USD` | getBankCurrency(): ?string | setBankCurrency(?string bankCurrency): void |
| `address` | [`?BankAccountAddress`](../../doc/models/bank-account-address.md) | Optional | - | getAddress(): ?BankAccountAddress | setAddress(?BankAccountAddress address): void |
| `createdOn` | `?DateTime` | Optional | Time object was [created](#/rest/models/structures/created-on) | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `description` | `?string` | Optional | User-supplied description of the bank account for reference | getDescription(): ?string | setDescription(?string description): void |
| `fields` | [`?(BankAccountField[])`](../../doc/models/bank-account-field.md) | Optional | - | getFields(): ?array | setFields(?array fields): void |
| `status` | [`?string(BankAccountStatuses)`](../../doc/models/bank-account-statuses.md) | Optional | Current verification status type of the [bank account](#/rest/models/structures/bank-account-status) | getStatus(): ?string | setStatus(?string status): void |
| `type` | [`?string(BankAccountTypes)`](../../doc/models/bank-account-types.md) | Optional | Financial purpose of the [bank account](#/rest/models/structures/bank-account-type) | getType(): ?string | setType(?string type): void |
| `transferMethodType` | [`?string(TransferMethodTypes)`](../../doc/models/transfer-method-types.md) | Optional | Optional transfer methods applicable only to bank and e-wallet transfers. | getTransferMethodType(): ?string | setTransferMethodType(?string transferMethodType): void |
| `links` | [`?(HateoasSelfRef[])`](../../doc/models/hateoas-self-ref.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10`, *Unique Items Required* | getLinks(): ?array | setLinks(?array links): void |
| `meta` | [`?MetadataItems`](../../doc/models/metadata-items.md) | Optional | - | getMeta(): ?MetadataItems | setMeta(?MetadataItems meta): void |

## Example (as JSON)

```json
{
  "token": "dest-631b200f-665d-4dbe-bd01-3063c9dec97d",
  "bankAccountOwnershipType": "BUSINESS",
  "bankcountry": "US",
  "bankCurrency": "USD",
  "address": {
    "address1": "string",
    "address2": "string",
    "address3": "string",
    "city": "string",
    "region": "string",
    "postalCode": "nzl",
    "country": "US"
  },
  "createdOn": "2026-02-07T22:23:09.9667010Z",
  "description": "string",
  "fields": [
    {
      "key": "BANK_ACH_ABA",
      "value": "string"
    }
  ],
  "status": "ACTIVE",
  "type": "CHECKING",
  "transferMethodType": "IACH",
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
  },
  "bankCountry": "RE"
}
```

