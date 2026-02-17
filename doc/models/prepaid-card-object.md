
# Prepaid Card Object

## Structure

`PrepaidCardObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `?string` | Optional | [Token](#/rest/models/structures/token) representing the resource | getToken(): ?string | setToken(?string token): void |
| `cardNetwork` | [`?string(CardNetworks)`](../../doc/models/card-networks.md) | Optional | Major [credit card network](#/rest/models/structures/card-network) types | getCardNetwork(): ?string | setCardNetwork(?string cardNetwork): void |
| `cardNumber` | `?string` | Optional | Unique number on the prepaid card | getCardNumber(): ?string | setCardNumber(?string cardNumber): void |
| `cardPackage` | `?string` | Optional | [Package](#/rest/models/structures/prepaid-card-package) for the card being displayed, including artwork, packaging, and delivery method | getCardPackage(): ?string | setCardPackage(?string cardPackage): void |
| `country` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getCountry(): ?string | setCountry(?string country): void |
| `createdOn` | `?DateTime` | Optional | Time object was [created](#/rest/models/structures/created-on) | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `currency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Optional | [Currency code type](#/rest/models/structures/country) for the object<br><br>**Default**: `Currencies::USD` | getCurrency(): ?string | setCurrency(?string currency): void |
| `cvv` | `?string` | Optional | Three- or four-digit [Card Verification Value (CVV)](#/rest/models/structures/cvv) number displayed on the back of a credit or debit card | getCvv(): ?string | setCvv(?string cvv): void |
| `expires` | `?string` | Optional | Date and time the object will [expire](#/rest/models/structures/expiration) | getExpires(): ?string | setExpires(?string expires): void |
| `status` | [`?string(PrepaidCardStatuses)`](../../doc/models/prepaid-card-statuses.md) | Optional | Current [status](#/rest/models/structures/prepaid-card-status) of the prepaid card | getStatus(): ?string | setStatus(?string status): void |
| `bankInDetails` | [`?(BankAccountField[])`](../../doc/models/bank-account-field.md) | Optional | - | getBankInDetails(): ?array | setBankInDetails(?array bankInDetails): void |
| `capabilities` | [`?(string(PrepaidCardCapabilities)[])`](../../doc/models/prepaid-card-capabilities.md) | Optional | - | getCapabilities(): ?array | setCapabilities(?array capabilities): void |
| `userToken` | `?string` | Optional | Auto-generated unique identifier representing a user, prefixed with `user-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^user-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` | getUserToken(): ?string | setUserToken(?string userToken): void |
| `links` | [`?(HateoasSelfRef[])`](../../doc/models/hateoas-self-ref.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10`, *Unique Items Required* | getLinks(): ?array | setLinks(?array links): void |

## Example (as JSON)

```json
{
  "token": "string",
  "cardNetwork": "MASTER_CARD",
  "cardNumber": "483318******4628",
  "cardPackage": "71290",
  "country": "US",
  "createdOn": "2026-02-07T22:23:09.9667010Z",
  "currency": "USD",
  "cvv": "string",
  "expires": "string",
  "status": "ACTIVATED",
  "bankInDetails": [
    {
      "key": "BANK_ACH_ABA",
      "value": "string"
    }
  ],
  "capabilities": [
    "APPLEPAY"
  ],
  "userToken": "user-2bbfc967-d12e-4647-a887-d905172fb4bc",
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

