
# Event Object

## Structure

`EventObject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `token` | `?string` | Optional | [Token](#/rest/models/structures/token) representing the resource | getToken(): ?string | setToken(?string token): void |
| `canBeCancelled` | `?bool` | Optional | - | getCanBeCancelled(): ?bool | setCanBeCancelled(?bool canBeCancelled): void |
| `eventRequirementCategoryType` | [`?string(EventRequirementCategories)`](../../doc/models/event-requirement-categories.md) | Optional | - | getEventRequirementCategoryType(): ?string | setEventRequirementCategoryType(?string eventRequirementCategoryType): void |
| `eventRequirementType` | [`?string(EventRequirements)`](../../doc/models/event-requirements.md) | Optional | - | getEventRequirementType(): ?string | setEventRequirementType(?string eventRequirementType): void |
| `eventStatus` | [`?string(EventStatuses)`](../../doc/models/event-statuses.md) | Optional | Indicates the current verification status type of an event. | getEventStatus(): ?string | setEventStatus(?string eventStatus): void |
| `eventType` | [`?string(EventTypes)`](../../doc/models/event-types.md) | Optional | - | getEventType(): ?string | setEventType(?string eventType): void |
| `isComplete` | `?bool` | Optional | - | getIsComplete(): ?bool | setIsComplete(?bool isComplete): void |
| `userAction` | [`?string(UserAction)`](../../doc/models/user-action.md) | Optional | - | getUserAction(): ?string | setUserAction(?string userAction): void |
| `userImpact` | [`?string(UserImpact)`](../../doc/models/user-impact.md) | Optional | - | getUserImpact(): ?string | setUserImpact(?string userImpact): void |
| `event` | [`string(EventCategoryTypes)`](../../doc/models/event-category-types.md) | Required | The type of Registration tied to a particular event | getEvent(): string | setEvent(string event): void |
| `links` | [`?(HateoasSelfRef[])`](../../doc/models/hateoas-self-ref.md) | Optional | **Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10`, *Unique Items Required* | getLinks(): ?array | setLinks(?array links): void |

## Example (as JSON)

```json
{
  "token": "string",
  "canBeCancelled": true,
  "eventRequirementCategoryType": "ACKNOWLEDGEMENT",
  "eventRequirementType": "ACH_UPGRADE_PII_DETAILS_VALIDATED",
  "eventStatus": "UNDEFINED",
  "eventType": "REQUIRED",
  "isComplete": true,
  "userAction": "NO_ACTION",
  "userImpact": "NO_IMPACT",
  "event": "WALLET_REGISTRATION",
  "links": [
    {
      "href": "string",
      "params": {
        "rel": "self"
      }
    }
  ]
}
```

