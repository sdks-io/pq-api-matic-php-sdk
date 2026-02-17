
# Electronic Wallet Requirement

Classifies the electronic wallet [required](#/rest/models/structures/electronic-wallet-requirement) information

## Structure

`ElectronicWalletRequirement`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `electronicWalletType` | [`?string(ElectronicWalletTypes)`](../../doc/models/electronic-wallet-types.md) | Optional | Name of the electronic wallet | getElectronicWalletType(): ?string | setElectronicWalletType(?string electronicWalletType): void |
| `electronicWalletCountry` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getElectronicWalletCountry(): ?string | setElectronicWalletCountry(?string electronicWalletCountry): void |
| `electronicWalletCurrency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Optional | [Currency code type](#/rest/models/structures/country) for the object<br><br>**Default**: `Currencies::USD` | getElectronicWalletCurrency(): ?string | setElectronicWalletCurrency(?string electronicWalletCurrency): void |
| `fee` | [`?FeeConfiguration`](../../doc/models/fee-configuration.md) | Optional | - | getFee(): ?FeeConfiguration | setFee(?FeeConfiguration fee): void |
| `sourceCountry` | [`?string(Countries)`](../../doc/models/countries.md) | Optional | Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country name, e.g., for bank country or residential country.<br><br>The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience. | getSourceCountry(): ?string | setSourceCountry(?string sourceCountry): void |
| `sourceCurrency` | [`?string(Currencies)`](../../doc/models/currencies.md) | Optional | [Currency code type](#/rest/models/structures/country) for the object<br><br>**Default**: `Currencies::USD` | getSourceCurrency(): ?string | setSourceCurrency(?string sourceCurrency): void |
| `requirements` | [`?(ElectronicWalletRequiredFields[])`](../../doc/models/electronic-wallet-required-fields.md) | Optional | - | getRequirements(): ?array | setRequirements(?array requirements): void |

## Example (as JSON)

```json
{
  "electronicWalletType": "AIRTEL_MONEY",
  "electronicWalletCountry": "US",
  "electronicWalletCurrency": "USD",
  "fee": {
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
  },
  "sourceCountry": "US",
  "sourceCurrency": "USD",
  "requirements": [
    {
      "format": {
        "example": "string",
        "legend": [
          {
            "key": "string",
            "descriptions": [
              {
                "language": "en-US",
                "translation": "string"
              }
            ]
          }
        ]
      },
      "requirement": "UNDEFINED",
      "description": [
        {
          "language": "en-US",
          "translation": "string"
        }
      ],
      "validators": [
        {
          "validatorType": "LENGTH",
          "expression": "string"
        }
      ]
    }
  ]
}
```

