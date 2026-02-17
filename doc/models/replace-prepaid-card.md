
# Replace Prepaid Card

## Structure

`ReplacePrepaidCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardPackage` | `?string` | Optional | [Package](#/rest/models/structures/prepaid-card-package) for the card being displayed, including artwork, packaging, and delivery method | getCardPackage(): ?string | setCardPackage(?string cardPackage): void |
| `cardReplacementReason` | [`?string(PrepaidCardReplacementReasons)`](../../doc/models/prepaid-card-replacement-reasons.md) | Optional | Reason for [prepaid card](page:resources/prepaid-cards) replacement. | getCardReplacementReason(): ?string | setCardReplacementReason(?string cardReplacementReason): void |

## Example (as JSON)

```json
{
  "cardPackage": "71290",
  "cardReplacementReason": "COMPROMISED"
}
```

