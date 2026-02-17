
# Portal Payment Quote

Response from a invitation request

## Structure

`PortalPaymentQuote`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?float` | Optional | Allocated money to be sent in the transaction.<br><br>**Default**: `1.02` | getAmount(): ?float | setAmount(?float amount): void |
| `currency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Optional | [Currency code type](#/rest/models/structures/country) for the object<br><br>**Default**: `Currencies::USD` | getCurrency(): ?string | setCurrency(?string currency): void |
| `sourceToken` | `?string` | Optional | Unique identifier representing the [source of funds](#/rest/models/structures/source-token)<br><br>**Default**: `'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860'`<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^(acct\|user\|dest)-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` | getSourceToken(): ?string | setSourceToken(?string sourceToken): void |
| `programUserId` | `?string` | Optional | [Program identifier](#/rest/models/structures/program-user-id) for the user<br><br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `100` | getProgramUserId(): ?string | setProgramUserId(?string programUserId): void |
| `email` | `?string` | Optional | Contact [email address](#/rest/models/structures/email-address) for the user account for the user account<br><br>**Constraints**: *Minimum Length*: `8`, *Maximum Length*: `100`, *Pattern*: `^.+@.+\..+` | getEmail(): ?string | setEmail(?string email): void |
| `note` | `?string` | Optional | [Optional comments](#/rest/models/structures/notes) visible to the user | getNote(): ?string | setNote(?string note): void |
| `memo` | `?string` | Optional | Optional internal [memo](#/rest/models/structures/memo) not visible to the user | getMemo(): ?string | setMemo(?string memo): void |
| `purpose` | [`?string(PaymentPurposes)`](../../doc/models/payment-purposes.md) | Optional | Used to identify the [purpose of a payment](#/models/structures/payment-object) and impacts reporting and calculated taxable earnings (if utilizing tax services) | getPurpose(): ?string | setPurpose(?string purpose): void |
| `clientPaymentId` | `?string` | Optional | Unique value provided by the client for the [payment](page:resources/payments), utilized for reference and deduplication.<br><br>**Default**: `'d4b6f130-1d1c-4ce2-903a-0c1ad128f55e'` | getClientPaymentId(): ?string | setClientPaymentId(?string clientPaymentId): void |
| `autoAcceptQuote` | `?bool` | Optional | Determines whether the quote is [automatically accepted](#/rest/models/structures/auto-accept-quote) or if a `POST` utilizing the token for the quote is required. | getAutoAcceptQuote(): ?bool | setAutoAcceptQuote(?bool autoAcceptQuote): void |
| `notBefore` | `?DateTime` | Optional | [Transfer](#/rest/models/structures/not-before-or-after) is scheduled and will not process before this time. | getNotBefore(): ?\DateTime | setNotBefore(?\DateTime notBefore): void |
| `notAfter` | `?DateTime` | Optional | [Transfer](#/rest/models/structures/not-before-or-after) expires if not completed prior to this time. | getNotAfter(): ?\DateTime | setNotAfter(?\DateTime notAfter): void |

## Example (as JSON)

```json
{
  "amount": 1.02,
  "currency": "USD",
  "sourceToken": "acct-3908ab5a-6ce1-474d-8b80-a63a7b147860",
  "programUserId": "pdekt",
  "email": "john.doe@email.com",
  "note": "string",
  "memo": "string",
  "purpose": "BONUS",
  "clientPaymentId": "d4b6f130-1d1c-4ce2-903a-0c1ad128f55e",
  "autoAcceptQuote": true,
  "notBefore": "2022-04-26T15:16:18Z",
  "notAfter": "2019-08-24T14:15:22Z"
}
```

