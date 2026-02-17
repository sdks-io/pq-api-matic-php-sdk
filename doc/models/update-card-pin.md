
# Update Card Pin

## Structure

`UpdateCardPin`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardPinToken` | `?string` | Optional | [Token](#/rest/models/structures/prepaid-card-pin-token) used as part of a two-leg card PIN reveal request sent directly from the client that generally involves a second piece of data, such as the CVV code on the back of the card. | getCardPinToken(): ?string | setCardPinToken(?string cardPinToken): void |
| `cardPin` | `?string` | Optional | [Card PIN](#/rest/models/structures/prepaid-card-pin) for ATM and Debit usage | getCardPin(): ?string | setCardPin(?string cardPin): void |

## Example (as JSON)

```json
{
  "cardPinToken": "string",
  "cardPin": "string"
}
```

