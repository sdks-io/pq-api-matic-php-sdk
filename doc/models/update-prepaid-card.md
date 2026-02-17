
# Update Prepaid Card

## Structure

`UpdatePrepaidCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardPackage` | `?string` | Optional | [Package](#/rest/models/structures/prepaid-card-package) for the card being displayed, including artwork, packaging, and delivery method | getCardPackage(): ?string | setCardPackage(?string cardPackage): void |
| `status` | [`?string(PrepaidCardStatuses)`](../../doc/models/prepaid-card-statuses.md) | Optional | Current [status](#/rest/models/structures/prepaid-card-status) of the prepaid card | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "cardPackage": "71290",
  "status": "ACTIVATED"
}
```

