
# Receipt Details

## Structure

`ReceiptDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankAccountId` | `?string` | Optional | Bank account ID for the bank account | getBankAccountId(): ?string | setBankAccountId(?string bankAccountId): void |
| `bankAccountIdType` | [`?string(BankAccountFields)`](../../doc/models/bank-account-fields.md) | Optional | Classifies bank account [field types](#/rest/models/structures/bank-account-fields) | getBankAccountIdType(): ?string | setBankAccountIdType(?string bankAccountIdType): void |
| `bankName` | `?string` | Optional | Name of the bank the account is registered to | getBankName(): ?string | setBankName(?string bankName): void |
| `bankId` | `?string` | Optional | The bank id | getBankId(): ?string | setBankId(?string bankId): void |
| `bankIdType` | [`?string(BankAccountFields)`](../../doc/models/bank-account-fields.md) | Optional | Classifies bank account [field types](#/rest/models/structures/bank-account-fields) | getBankIdType(): ?string | setBankIdType(?string bankIdType): void |
| `branchAddress` | `?string` | Optional | The bank branch address | getBranchAddress(): ?string | setBranchAddress(?string branchAddress): void |
| `branchCity` | `?string` | Optional | The bank branch city | getBranchCity(): ?string | setBranchCity(?string branchCity): void |
| `branchId` | `?string` | Optional | The bank branch id | getBranchId(): ?string | setBranchId(?string branchId): void |
| `branchName` | `?string` | Optional | The bank branch name | getBranchName(): ?string | setBranchName(?string branchName): void |
| `branchPostalCode` | `?string` | Optional | The bank branch postal code | getBranchPostalCode(): ?string | setBranchPostalCode(?string branchPostalCode): void |
| `branchPhoneNumber` | `?string` | Optional | The bank branch phone number | getBranchPhoneNumber(): ?string | setBranchPhoneNumber(?string branchPhoneNumber): void |
| `branchRegion` | `?string` | Optional | The bank branch region | getBranchRegion(): ?string | setBranchRegion(?string branchRegion): void |
| `beneficaryTaxId` | `?string` | Optional | The beneficiary's tax id | getBeneficaryTaxId(): ?string | setBeneficaryTaxId(?string beneficaryTaxId): void |
| `beneficaryTaxIdType` | [`?string(BankAccountFields)`](../../doc/models/bank-account-fields.md) | Optional | Classifies bank account [field types](#/rest/models/structures/bank-account-fields) | getBeneficaryTaxIdType(): ?string | setBeneficaryTaxIdType(?string beneficaryTaxIdType): void |
| `beneficaryName` | `?string` | Optional | The name of the person chosen to inherit your account | getBeneficaryName(): ?string | setBeneficaryName(?string beneficaryName): void |
| `memo` | `?string` | Optional | Optional internal [memo](#/rest/models/structures/memo) not visible to the user | getMemo(): ?string | setMemo(?string memo): void |
| `note` | `?string` | Optional | [Optional comments](#/rest/models/structures/notes) visible to the user | getNote(): ?string | setNote(?string note): void |
| `correlationToken` | `?string` | Optional | [Token](#/rest/models/structures/token) representing the resource | getCorrelationToken(): ?string | setCorrelationToken(?string correlationToken): void |
| `cardExpiryDate` | `?string` | Optional | Date that the card will expire | getCardExpiryDate(): ?string | setCardExpiryDate(?string cardExpiryDate): void |
| `cardHolderName` | `?string` | Optional | Name of the card's owner | getCardHolderName(): ?string | setCardHolderName(?string cardHolderName): void |
| `cardNumber` | `?string` | Optional | Unique number on the prepaid card | getCardNumber(): ?string | setCardNumber(?string cardNumber): void |
| `electronicWalletAccountNumber` | `?string` | Optional | Account number for the electronic wallet | getElectronicWalletAccountNumber(): ?string | setElectronicWalletAccountNumber(?string electronicWalletAccountNumber): void |
| `electronicWalletAccountNumberType` | [`?string(ElectronicWalletFields)`](../../doc/models/electronic-wallet-fields.md) | Optional | Classifies electronic wallet [field types](#/rest/models/structures/electronic-wallet-fields) | getElectronicWalletAccountNumberType(): ?string | setElectronicWalletAccountNumberType(?string electronicWalletAccountNumberType): void |
| `electronicWalletGovernmentId` | `?string` | Optional | Government ID for the electronic wallet | getElectronicWalletGovernmentId(): ?string | setElectronicWalletGovernmentId(?string electronicWalletGovernmentId): void |
| `electronicWalletGovernmentIdType` | [`?string(ElectronicWalletFields)`](../../doc/models/electronic-wallet-fields.md) | Optional | Classifies electronic wallet [field types](#/rest/models/structures/electronic-wallet-fields) | getElectronicWalletGovernmentIdType(): ?string | setElectronicWalletGovernmentIdType(?string electronicWalletGovernmentIdType): void |
| `electronicWalletType` | [`?string(ElectronicWalletTypes)`](../../doc/models/electronic-wallet-types.md) | Optional | Name of the electronic wallet | getElectronicWalletType(): ?string | setElectronicWalletType(?string electronicWalletType): void |
| `mobilePhoneNumber` | `?string` | Optional | - | getMobilePhoneNumber(): ?string | setMobilePhoneNumber(?string mobilePhoneNumber): void |
| `electronicFundsTransferType` | [`?string(ElectronicFundsTransferTypes)`](../../doc/models/electronic-funds-transfer-types.md) | Optional | The type of transfer performed | getElectronicFundsTransferType(): ?string | setElectronicFundsTransferType(?string electronicFundsTransferType): void |
| `electronicFundsTransferFailureType` | [`?string(ElectronicTransferFailureTypes)`](../../doc/models/electronic-transfer-failure-types.md) | Optional | The type of failure for a bank transfer | getElectronicFundsTransferFailureType(): ?string | setElectronicFundsTransferFailureType(?string electronicFundsTransferFailureType): void |
| `electronicTransferStatusType` | [`?string(ElectronicTransferStatusTypes)`](../../doc/models/electronic-transfer-status-types.md) | Optional | The status of a bank transfer | getElectronicTransferStatusType(): ?string | setElectronicTransferStatusType(?string electronicTransferStatusType): void |

## Example (as JSON)

```json
{
  "bankAccountId": "string",
  "bankAccountIdType": "BANK_ACH_ABA",
  "bankName": "string",
  "bankId": "string",
  "bankIdType": "BANK_ACH_ABA",
  "branchAddress": "string",
  "branchCity": "string",
  "branchId": "string",
  "branchName": "string",
  "branchPostalCode": "string",
  "branchPhoneNumber": "string",
  "branchRegion": "string",
  "beneficaryTaxId": "string",
  "beneficaryTaxIdType": "BANK_ACH_ABA",
  "beneficaryName": "string",
  "memo": "string",
  "note": "string",
  "correlationToken": "string",
  "cardExpiryDate": "string",
  "cardHolderName": "string",
  "cardNumber": "483318******4628",
  "electronicWalletAccountNumber": "string",
  "electronicWalletAccountNumberType": "UNDEFINED",
  "electronicWalletGovernmentId": "string",
  "electronicWalletGovernmentIdType": "UNDEFINED",
  "electronicWalletType": "AIRTEL_MONEY",
  "mobilePhoneNumber": "string",
  "electronicFundsTransferType": "MANUAL",
  "electronicFundsTransferFailureType": "INCORRECT_ACCOUNT_NUMBER",
  "electronicTransferStatusType": "IN_PROGRESS"
}
```

