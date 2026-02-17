
# Create or Update Document

## Structure

`CreateOrUpdateDocument`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fields` | [`?CreateOrUpdateDocumentFields`](../../doc/models/create-or-update-document-fields.md) | Optional | - | getFields(): ?CreateOrUpdateDocumentFields | setFields(?CreateOrUpdateDocumentFields fields): void |
| `upload` | `mixed` | Optional | Document to be uploaded | getUpload(): | setUpload( upload): void |

## Example (as JSON)

```json
{
  "fields": {
    "fields": [
      {
        "key": "EXPIRATION_DATE",
        "value": "string"
      }
    ]
  },
  "upload": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

