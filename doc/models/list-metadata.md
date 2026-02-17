
# List Metadata

## Structure

`ListMetadata`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pageNo` | `string` | Required | **Default**: `'1'` | getPageNo(): string | setPageNo(string pageNo): void |
| `pageSize` | `string` | Required | **Default**: `'10'` | getPageSize(): string | setPageSize(string pageSize): void |
| `pageCount` | `string` | Required | **Default**: `'1'` | getPageCount(): string | setPageCount(string pageCount): void |
| `recordCount` | `string` | Required | - | getRecordCount(): string | setRecordCount(string recordCount): void |
| `timezone` | `string` | Required | Timezone of the datetime objects in the response | getTimezone(): string | setTimezone(string timezone): void |
| `requestRef` | `string` | Required | - | getRequestRef(): string | setRequestRef(string requestRef): void |

## Example (as JSON)

```json
{
  "pageNo": "string",
  "pageSize": "string",
  "pageCount": "string",
  "recordCount": "string",
  "timezone": "GMT",
  "requestRef": "20260207T231757Z-r1d65bb46d495mgjhC1BL1qvx400000004rg00000000c2uh"
}
```

