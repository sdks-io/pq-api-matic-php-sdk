
# Api Error Result Exception

## Structure

`ApiErrorResultException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `severity` | `string` | Required | Error Severity | getSeverity(): string | setSeverity(string severity): void |
| `error` | `string` | Required | Error Code Name | getError(): string | setError(string error): void |
| `code` | `float` | Required | Error Code Number | getCode(): float | setCode(float code): void |
| `message` | `string` | Required | Description of the error. | getMessage(): string | setMessage(string message): void |
| `referenceId` | `string` | Required | Reference ID for issue tracking. | getReferenceId(): string | setReferenceId(string referenceId): void |
| `timestamp` | `string` | Required | Timestamp of when the error occurred. | getTimestamp(): string | setTimestamp(string timestamp): void |
| `requestRef` | `?string` | Optional | Request reference for issue tracking. | getRequestRef(): ?string | setRequestRef(?string requestRef): void |

## Example (as JSON)

```json
{
  "severity": "string",
  "error": "string",
  "code": 50.0,
  "message": "string",
  "referenceId": "string",
  "timestamp": "string",
  "requestRef": "20260207T231757Z-r1d65bb46d495mgjhC1BL1qvx400000004rg00000000c2uh"
}
```

