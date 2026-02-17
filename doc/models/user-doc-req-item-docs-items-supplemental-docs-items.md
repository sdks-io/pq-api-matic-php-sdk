
# User Doc Req Item Docs Items Supplemental Docs Items

## Structure

`UserDocReqItemDocsItemsSupplementalDocsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `exampleImage` | `?string` | Optional | Full path of the URI used for this object | getExampleImage(): ?string | setExampleImage(?string exampleImage): void |
| `status` | [`?string(DocumentStatusTypes)`](../../doc/models/document-status-types.md) | Optional | Status Type of a document | getStatus(): ?string | setStatus(?string status): void |
| `type` | [`?string(DocumentTypes)`](../../doc/models/document-types.md) | Optional | Indicates the enums for KYC. | getType(): ?string | setType(?string type): void |

## Example (as JSON)

```json
{
  "exampleImage": "string",
  "status": "NOT_PROVIDED",
  "type": "UNDEFINED"
}
```

