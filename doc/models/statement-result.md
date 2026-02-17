
# Statement Result

## Structure

`StatementResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fileContents` | `?string` | Optional | The string representation of the file content. | getFileContents(): ?string | setFileContents(?string fileContents): void |
| `filename` | `?string` | Optional | The name given to a computer file in order to distinguish it from other files | getFilename(): ?string | setFilename(?string filename): void |
| `mimeType` | `?string` | Optional | A label used to identify a type of data.  Acts like a file extension on the internet. | getMimeType(): ?string | setMimeType(?string mimeType): void |
| `token` | `?string` | Optional | [Token](#/rest/models/structures/token) representing the resource | getToken(): ?string | setToken(?string token): void |
| `userToken` | `?string` | Optional | Auto-generated unique identifier representing a user, prefixed with `user-`.<br><br>**Constraints**: *Minimum Length*: `41`, *Maximum Length*: `41`, *Pattern*: `^user-[0-9A-Fa-f]{8}(?:-[0-9A-Fa-f]{4}){3}-[0-9A-Fa-f]{12}$` | getUserToken(): ?string | setUserToken(?string userToken): void |
| `prepaidCardToken` | `?string` | Optional | Auto-generated unique identifier representing a dest, prefixed with dest-. | getPrepaidCardToken(): ?string | setPrepaidCardToken(?string prepaidCardToken): void |
| `from` | `?DateTime` | Optional | Beginning date and time of a prepaid card statement | getFrom(): ?\DateTime | setFrom(?\DateTime from): void |
| `to` | `?DateTime` | Optional | Ending date and time of a prepaid card statement | getTo(): ?\DateTime | setTo(?\DateTime to): void |
| `links` | [`?(HateoasSelfRef[])`](../../doc/models/hateoas-self-ref.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10`, *Unique Items Required* | getLinks(): ?array | setLinks(?array links): void |
| `meta` | [`?MetadataItems`](../../doc/models/metadata-items.md) | Optional | - | getMeta(): ?MetadataItems | setMeta(?MetadataItems meta): void |

## Example (as JSON)

```json
{
  "fileContents": "string",
  "filename": "exampleFile.jpg",
  "mimeType": "image/jpeg",
  "token": "string",
  "userToken": "user-2bbfc967-d12e-4647-a887-d905172fb4bc",
  "prepaidCardToken": "string",
  "from": "2026-02-07T22:23:11.2214335Z",
  "to": "2026-02-07T22:23:11.2356996Z",
  "links": [
    {
      "href": "string",
      "params": {
        "rel": "self"
      }
    }
  ],
  "meta": {
    "timezone": "GMT",
    "requestRef": "20260207T231757Z-r1d65bb46d495mgjhC1BL1qvx400000004rg00000000c2uh"
  }
}
```

