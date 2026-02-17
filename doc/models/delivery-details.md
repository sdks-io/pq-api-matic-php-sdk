
# Delivery Details

The delivery details of a Bank transfer with the minimum and maximum delivery in minutes or the expected delivery time.

## Structure

`DeliveryDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `minimumDeliveryMinutes` | `?int` | Optional | - | getMinimumDeliveryMinutes(): ?int | setMinimumDeliveryMinutes(?int minimumDeliveryMinutes): void |
| `maximumDeliveryMinutes` | `?int` | Optional | - | getMaximumDeliveryMinutes(): ?int | setMaximumDeliveryMinutes(?int maximumDeliveryMinutes): void |
| `expectedDelivery` | [`?string(ExpectedDeliveryTypes)`](../../doc/models/expected-delivery-types.md) | Optional | Transfer expected delivery types | getExpectedDelivery(): ?string | setExpectedDelivery(?string expectedDelivery): void |
| `expectedDeliveryTime` | `?DateTime` | Optional | The time of the expected delivery. Does not include the date. | getExpectedDeliveryTime(): ?\DateTime | setExpectedDeliveryTime(?\DateTime expectedDeliveryTime): void |

## Example (as JSON)

```json
{
  "minimumDeliveryMinutes": 50,
  "maximumDeliveryMinutes": 50,
  "expectedDelivery": "SAME_DAY",
  "expectedDeliveryTime": "2016-03-13T12:52:32.123Z"
}
```

