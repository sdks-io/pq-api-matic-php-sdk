
# User Doc Req Item Docs Items Metadata Items

## Structure

`UserDocReqItemDocsItemsMetadataItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dataType` | `?string` | Optional | - | getDataType(): ?string | setDataType(?string dataType): void |
| `fieldType` | `?string` | Optional | - | getFieldType(): ?string | setFieldType(?string fieldType): void |
| `name` | [`?(UserDocReqItemDocsItemsMetadataItemsNameItems[])`](../../doc/models/user-doc-req-item-docs-items-metadata-items-name-items.md) | Optional | - | getName(): ?array | setName(?array name): void |

## Example (as JSON)

```json
{
  "dataType": "string",
  "fieldType": "string",
  "name": [
    {
      "language": "string",
      "translation": "string"
    }
  ]
}
```

