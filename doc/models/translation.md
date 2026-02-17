
# Translation

[Localized](#/rest/models/structures/key-value-pair-language-type-string) requirement description for display purposes

## Structure

`Translation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `language` | [`?string(Languages)`](../../doc/models/languages.md) | Optional | The [Language](#/rest/models/structures/language) type in IETF's BCP 47 format | getLanguage(): ?string | setLanguage(?string language): void |
| `translation` | `?string` | Optional | Translated string in the specified language | getTranslation(): ?string | setTranslation(?string translation): void |

## Example (as JSON)

```json
{
  "language": "en-US",
  "translation": "string"
}
```

