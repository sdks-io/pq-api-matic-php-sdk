
# Gateway Transfer Quote

TODO

## Structure

`GatewayTransferQuote`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sourceToken` | `?string` | Optional | Unique identifier representing the [source of funds](#/rest/models/structures/source-token)<br><br>**Default**: `'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860'`<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^(acct\|user\|dest)-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` | getSourceToken(): ?string | setSourceToken(?string sourceToken): void |
| `destinationToken` | `?string` | Optional | Unique identifier representing the [destination of funds](#/rest/models/structures/destination-token)<br><br>**Default**: `'dest-631b200f-665d-4dbe-bd01-3063c9dec97d'`<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^(acct\|dest\|user)-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` | getDestinationToken(): ?string | setDestinationToken(?string destinationToken): void |
| `note` | `?string` | Optional | [Optional comments](#/rest/models/structures/notes) visible to the user | getNote(): ?string | setNote(?string note): void |
| `memo` | `?string` | Optional | Optional internal [memo](#/rest/models/structures/memo) not visible to the user | getMemo(): ?string | setMemo(?string memo): void |
| `autoAcceptQuote` | `?bool` | Optional | Determines whether the quote is [automatically accepted](#/rest/models/structures/auto-accept-quote) or if a `POST` utilizing the token for the quote is required. | getAutoAcceptQuote(): ?bool | setAutoAcceptQuote(?bool autoAcceptQuote): void |
| `clientTransferId` | `?string` | Optional | [Unique value](#/rest/models/structures/client-transfer-id) provided by the client for the transfer, utilized for reference and deduplication. | getClientTransferId(): ?string | setClientTransferId(?string clientTransferId): void |
| `destinationAmount` | `?float` | Optional | Allocated money to be sent in the transaction. | getDestinationAmount(): ?float | setDestinationAmount(?float destinationAmount): void |
| `destinationCurrency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Optional | [Currency code type](#/rest/models/structures/country) for the object<br><br>**Default**: `Currencies::USD` | getDestinationCurrency(): ?string | setDestinationCurrency(?string destinationCurrency): void |
| `transferLockSide` | [`?string(LockSideTypes)`](../../doc/models/lock-side-types.md) | Optional | Type of [lockside](page:additional-api-information/transfer-lockside-types) for transfers. | getTransferLockSide(): ?string | setTransferLockSide(?string transferLockSide): void |
| `transferMethodType` | [`?string(TransferMethodTypes)`](../../doc/models/transfer-method-types.md) | Optional | Optional transfer methods applicable only to bank and e-wallet transfers. | getTransferMethodType(): ?string | setTransferMethodType(?string transferMethodType): void |

## Example (as JSON)

```json
{
  "sourceToken": "acct-3908ab5a-6ce1-474d-8b80-a63a7b147860",
  "destinationToken": "dest-631b200f-665d-4dbe-bd01-3063c9dec97d",
  "note": "string",
  "memo": "string",
  "autoAcceptQuote": true,
  "clientTransferId": "string",
  "destinationAmount": 50,
  "destinationCurrency": "USD",
  "transferLockSide": "SOURCE",
  "transferMethodType": "IACH"
}
```

