
# Hateoas Self Ref

Indicates the external link with the full URL of the same page on which the link appears.

## Structure

`HateoasSelfRef`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `href` | `?string` | Optional | - | getHref(): ?string | setHref(?string href): void |
| `params` | [`?HateoasRelationship`](../../doc/models/hateoas-relationship.md) | Optional | Indicates the HATEOS relationship between the target and current resources. | getParams(): ?HateoasRelationship | setParams(?HateoasRelationship params): void |

## Example (as JSON)

```json
{
  "href": "string",
  "params": {
    "rel": "self"
  }
}
```

