
# Idv Check Result

## Structure

`IdvCheckResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `?string` | Optional | [Token](#/rest/models/structures/token) representing the resource | getToken(): ?string | setToken(?string token): void |
| `userToken` | `?string` | Optional | [Token](#/rest/models/structures/token) representing the resource | getUserToken(): ?string | setUserToken(?string userToken): void |
| `idvProviderReference` | `?string` | Optional | [Provider reference](#/rest/models/structures/identity-verification-provider-reference) used for performing identity checks for the provider | getIdvProviderReference(): ?string | setIdvProviderReference(?string idvProviderReference): void |
| `idvResult` | [`?string(IdentityVerificationResultTypes)`](../../doc/models/identity-verification-result-types.md) | Optional | Result type of [verification](#/rest/models/structures/identity-verification-result-type) | getIdvResult(): ?string | setIdvResult(?string idvResult): void |
| `idvSubResult` | [`?string(IdentityVerificationResultSubTypes)`](../../doc/models/identity-verification-result-sub-types.md) | Optional | Sub result type of [verification](#/rest/models/structures/identity-verification-sub-result-type) | getIdvSubResult(): ?string | setIdvSubResult(?string idvSubResult): void |
| `idvProvider` | [`?string(IdentityVerificationProviders)`](../../doc/models/identity-verification-providers.md) | Optional | Provider types of [verification](#/rest/models/structures/identity-verification-provider-type) that can be used for performing identity checks | getIdvProvider(): ?string | setIdvProvider(?string idvProvider): void |
| `createdOn` | `?DateTime` | Optional | Time object was [created](#/rest/models/structures/created-on) | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `raw` | `?string` | Optional | Contains the raw (unprocessed) [output](/#/rest/models/structures/identity-verification-provider-raw-output) from the IDV provider | getRaw(): ?string | setRaw(?string raw): void |
| `idvCheckType` | `?string` | Optional | [Type](#/rest/models/structures/identity-verification-check-type) of verification used for performing an identity check | getIdvCheckType(): ?string | setIdvCheckType(?string idvCheckType): void |
| `idvDisposition` | `?string` | Optional | Disposition type of [verification](#/rest/models/structures/identity-verification-disposition-type) | getIdvDisposition(): ?string | setIdvDisposition(?string idvDisposition): void |
| `links` | [`?(HateoasSelfRef[])`](../../doc/models/hateoas-self-ref.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10`, *Unique Items Required* | getLinks(): ?array | setLinks(?array links): void |
| `meta` | [`?MetadataItems`](../../doc/models/metadata-items.md) | Optional | - | getMeta(): ?MetadataItems | setMeta(?MetadataItems meta): void |

## Example (as JSON)

```json
{
  "token": "string",
  "userToken": "string",
  "idvProviderReference": "string",
  "idvResult": "PASS",
  "idvSubResult": "HARD",
  "idvProvider": "EQUIFAX",
  "createdOn": "2026-02-07T22:23:09.9667010Z",
  "raw": "string",
  "idvCheckType": "string",
  "idvDisposition": "string",
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

