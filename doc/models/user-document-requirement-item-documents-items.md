
# User Document Requirement Item Documents Items

## Structure

`UserDocumentRequirementItemDocumentsItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `exampleImage` | `?string` | Optional | Full path of the URI used for this object | getExampleImage(): ?string | setExampleImage(?string exampleImage): void |
| `supplementalDocuments` | [`?(UserDocReqItemDocsItemsSupplementalDocsItems[])`](../../doc/models/user-doc-req-item-docs-items-supplemental-docs-items.md) | Optional | - | getSupplementalDocuments(): ?array | setSupplementalDocuments(?array supplementalDocuments): void |
| `metadata` | [`?(UserDocReqItemDocsItemsMetadataItems[])`](../../doc/models/user-doc-req-item-docs-items-metadata-items.md) | Optional | - | getMetadata(): ?array | setMetadata(?array metadata): void |
| `status` | [`?string(DocumentStatusTypes)`](../../doc/models/document-status-types.md) | Optional | Status Type of a document | getStatus(): ?string | setStatus(?string status): void |
| `type` | [`?string(DocumentTypes)`](../../doc/models/document-types.md) | Optional | Indicates the enums for KYC. | getType(): ?string | setType(?string type): void |

## Example (as JSON)

```json
{
  "exampleImage": "string",
  "supplementalDocuments": [
    {
      "exampleImage": "string",
      "status": "NOT_PROVIDED",
      "type": "UNDEFINED"
    }
  ],
  "metadata": [
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
  ],
  "status": "NOT_PROVIDED",
  "type": "UNDEFINED"
}
```

