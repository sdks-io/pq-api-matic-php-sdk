
# Bank Account Address

## Structure

`BankAccountAddress`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `address1` | `string` | Required | Address Line 1<br><br>**Constraints**: *Maximum Length*: `255` | getAddress1(): string | setAddress1(string address1): void |
| `address2` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getAddress2(): ?string | setAddress2(?string address2): void |
| `address3` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getAddress3(): ?string | setAddress3(?string address3): void |
| `city` | `string` | Required | **Constraints**: *Maximum Length*: `50` | getCity(): string | setCity(string city): void |
| `region` | `?string` | Optional | **Constraints**: *Maximum Length*: `50` | getRegion(): ?string | setRegion(?string region): void |
| `postalCode` | `string` | Required | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `50` | getPostalCode(): string | setPostalCode(string postalCode): void |
| `country` | [`string(Countries)`](../../doc/models/countries.md) | Required | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getCountry(): string | setCountry(string country): void |

## Example (as JSON)

```json
{
  "address1": "string",
  "address2": "string",
  "address3": "string",
  "city": "string",
  "region": "string",
  "postalCode": "nzl",
  "country": "US"
}
```

