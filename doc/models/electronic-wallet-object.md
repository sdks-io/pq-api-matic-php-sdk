
# Electronic Wallet Object

Unique identifier for the [electronic wallet](#/rest/models/enumerations/electronic-wallet-types)

## Structure

`ElectronicWalletObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `?string` | Optional | Unique identifier representing the [destination of funds](#/rest/models/structures/destination-token)<br><br>**Default**: `'dest-631b200f-665d-4dbe-bd01-3063c9dec97d'`<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^(acct\|dest\|user)-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` | getToken(): ?string | setToken(?string token): void |
| `type` | [`?string(ElectronicWalletTypes)`](../../doc/models/electronic-wallet-types.md) | Optional | Name of the electronic wallet | getType(): ?string | setType(?string type): void |
| `electronicWalletCountry` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getElectronicWalletCountry(): ?string | setElectronicWalletCountry(?string electronicWalletCountry): void |
| `electronicWalletCurrency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Optional | [Currency code type](#/rest/models/structures/country) for the object<br><br>**Default**: `Currencies::USD` | getElectronicWalletCurrency(): ?string | setElectronicWalletCurrency(?string electronicWalletCurrency): void |
| `createdOn` | `?DateTime` | Optional | Time object was [created](#/rest/models/structures/created-on) | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `fields` | [`?(ElectronicWalletField[])`](../../doc/models/electronic-wallet-field.md) | Optional | - | getFields(): ?array | setFields(?array fields): void |
| `status` | [`?string(ElectronicWalletStatuses)`](../../doc/models/electronic-wallet-statuses.md) | Optional | Current verification status type of the electronic wallet | getStatus(): ?string | setStatus(?string status): void |
| `links` | [`?(HateoasSelfRef[])`](../../doc/models/hateoas-self-ref.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10`, *Unique Items Required* | getLinks(): ?array | setLinks(?array links): void |

## Example (as JSON)

```json
{
  "token": "dest-631b200f-665d-4dbe-bd01-3063c9dec97d",
  "type": "AIRTEL_MONEY",
  "electronicWalletCountry": "US",
  "electronicWalletCurrency": "USD",
  "createdOn": "02/07/2026 22:23:09",
  "fields": [
    {
      "key": "UNDEFINED",
      "value": "string"
    }
  ],
  "status": "ACTIVE",
  "links": [
    {
      "href": "string",
      "params": {
        "rel": "self"
      }
    }
  ]
}
```

