
# Hateoas Relationship

Indicates the HATEOS relationship between the target and current resources.

## Structure

`HateoasRelationship`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `rel` | `string` | Required | Indicates the relationship between the target and current resources.<br><br>**Default**: `'self'` | getRel(): string | setRel(string rel): void |

## Example (as JSON)

```json
{
  "rel": "self"
}
```

