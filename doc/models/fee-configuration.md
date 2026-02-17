
# Fee Configuration

## Structure

`FeeConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `category` | [`?string(CategoryTypes)`](../../doc/models/category-types.md) | Optional | Category types | getCategory(): ?string | setCategory(?string category): void |
| `distribution` | [`?(FeeDistribution[])`](../../doc/models/fee-distribution.md) | Optional | - | getDistribution(): ?array | setDistribution(?array distribution): void |
| `source` | [`?string(FeeSources)`](../../doc/models/fee-sources.md) | Optional | Fee source types | getSource(): ?string | setSource(?string source): void |
| `totalAmount` | `?float` | Optional | Total amount of money for all transactions | getTotalAmount(): ?float | setTotalAmount(?float totalAmount): void |
| `transactionAmount` | `?float` | Optional | Total amount of money for the transaction | getTransactionAmount(): ?float | setTransactionAmount(?float transactionAmount): void |
| `type` | [`?string(Fees)`](../../doc/models/fees.md) | Optional | Fee types | getType(): ?string | setType(?string type): void |
| `valueAmount` | `?string` | Optional | Value of the target resource | getValueAmount(): ?string | setValueAmount(?string valueAmount): void |
| `valueType` | [`?string(FeeValues)`](../../doc/models/fee-values.md) | Optional | Fee value types | getValueType(): ?string | setValueType(?string valueType): void |

## Example (as JSON)

```json
{
  "category": "COMPANY",
  "distribution": [
    {
      "amount": 1.02,
      "currency": "USD",
      "description": [
        {
          "language": "en-US",
          "translation": "string"
        }
      ],
      "formattedAmount": "$0.05 USD",
      "percentage": 50.0,
      "responsibility": "COMPANY",
      "responsibilitySource": "CREDIT",
      "sourceToken": "acct-3908ab5a-6ce1-474d-8b80-a63a7b147860"
    }
  ],
  "source": "TRANSACTION",
  "totalAmount": 50.0,
  "transactionAmount": 50.0,
  "type": "BANK_TRANSFER_REVERSAL_STOP_NOC",
  "valueAmount": "string",
  "valueType": "PERCENTAGE"
}
```

