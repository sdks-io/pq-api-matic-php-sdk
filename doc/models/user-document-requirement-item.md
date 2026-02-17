
# User Document Requirement Item

## Structure

`UserDocumentRequirementItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `countryOfBirth` | `?string` | Optional | - | getCountryOfBirth(): ?string | setCountryOfBirth(?string countryOfBirth): void |
| `countryOfNationality` | `?string` | Optional | - | getCountryOfNationality(): ?string | setCountryOfNationality(?string countryOfNationality): void |
| `documents` | [`?(UserDocumentRequirementItemDocumentsItems[])`](../../doc/models/user-document-requirement-item-documents-items.md) | Optional | - | getDocuments(): ?array | setDocuments(?array documents): void |

## Example (as JSON)

```json
{
  "countryOfBirth": "string",
  "countryOfNationality": "string",
  "documents": [
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
  ]
}
```

