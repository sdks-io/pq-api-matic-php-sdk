
# Receipt Descriptions

## Structure

`ReceiptDescriptions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `language` | [`?string(Languages)`](../../doc/models/languages.md) | Optional | The [Language](#/rest/models/structures/language) type in IETF's BCP 47 format | getLanguage(): ?string | setLanguage(?string language): void |
| `translation` | `?string` | Optional | Description translated to the indicated language | getTranslation(): ?string | setTranslation(?string translation): void |

## Example (as JSON)

```json
{
  "language": "en-US",
  "translation": "string"
}
```

