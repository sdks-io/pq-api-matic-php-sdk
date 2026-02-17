
# Document Details

1...N required [fields](#/rest/models/structures/key-value-pair-upload-field-types-string) as determined by call to get requirements

## Structure

`DocumentDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `key` | [`string(UploadFields)`](../../doc/models/upload-fields.md) | Required | - | getKey(): string | setKey(string key): void |
| `value` | `string` | Required | - | getValue(): string | setValue(string value): void |

## Example (as JSON)

```json
{
  "key": "EXPIRATION_DATE",
  "value": "string"
}
```

