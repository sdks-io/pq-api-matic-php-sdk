<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models;

use PayQuickerSDKLib\ApiHelper;
use stdClass;

class ReceiptDetails implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $bankAccountId;

    /**
     * @var string|null
     */
    private $bankAccountIdType;

    /**
     * @var string|null
     */
    private $bankName;

    /**
     * @var string|null
     */
    private $bankId;

    /**
     * @var string|null
     */
    private $bankIdType;

    /**
     * @var string|null
     */
    private $branchAddress;

    /**
     * @var string|null
     */
    private $branchCity;

    /**
     * @var string|null
     */
    private $branchId;

    /**
     * @var string|null
     */
    private $branchName;

    /**
     * @var string|null
     */
    private $branchPostalCode;

    /**
     * @var string|null
     */
    private $branchPhoneNumber;

    /**
     * @var string|null
     */
    private $branchRegion;

    /**
     * @var string|null
     */
    private $beneficaryTaxId;

    /**
     * @var string|null
     */
    private $beneficaryTaxIdType;

    /**
     * @var string|null
     */
    private $beneficaryName;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $note;

    /**
     * @var string|null
     */
    private $correlationToken;

    /**
     * @var string|null
     */
    private $cardExpiryDate;

    /**
     * @var string|null
     */
    private $cardHolderName;

    /**
     * @var string|null
     */
    private $cardNumber;

    /**
     * @var string|null
     */
    private $electronicWalletAccountNumber;

    /**
     * @var string|null
     */
    private $electronicWalletAccountNumberType;

    /**
     * @var string|null
     */
    private $electronicWalletGovernmentId;

    /**
     * @var string|null
     */
    private $electronicWalletGovernmentIdType;

    /**
     * @var string|null
     */
    private $electronicWalletType;

    /**
     * @var string|null
     */
    private $mobilePhoneNumber;

    /**
     * @var string|null
     */
    private $electronicFundsTransferType;

    /**
     * @var string|null
     */
    private $electronicFundsTransferFailureType;

    /**
     * @var string|null
     */
    private $electronicTransferStatusType;

    /**
     * Returns Bank Account Id.
     * Bank account ID for the bank account
     */
    public function getBankAccountId(): ?string
    {
        return $this->bankAccountId;
    }

    /**
     * Sets Bank Account Id.
     * Bank account ID for the bank account
     *
     * @maps bankAccountId
     */
    public function setBankAccountId(?string $bankAccountId): void
    {
        $this->bankAccountId = $bankAccountId;
    }

    /**
     * Returns Bank Account Id Type.
     * Classifies bank account [field types](#/rest/models/structures/bank-account-fields)
     */
    public function getBankAccountIdType(): ?string
    {
        return $this->bankAccountIdType;
    }

    /**
     * Sets Bank Account Id Type.
     * Classifies bank account [field types](#/rest/models/structures/bank-account-fields)
     *
     * @maps bankAccountIdType
     * @factory \PayQuickerSDKLib\Models\BankAccountFields::checkValue
     */
    public function setBankAccountIdType(?string $bankAccountIdType): void
    {
        $this->bankAccountIdType = $bankAccountIdType;
    }

    /**
     * Returns Bank Name.
     * Name of the bank the account is registered to
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * Sets Bank Name.
     * Name of the bank the account is registered to
     *
     * @maps bankName
     */
    public function setBankName(?string $bankName): void
    {
        $this->bankName = $bankName;
    }

    /**
     * Returns Bank Id.
     * The bank id
     */
    public function getBankId(): ?string
    {
        return $this->bankId;
    }

    /**
     * Sets Bank Id.
     * The bank id
     *
     * @maps bankId
     */
    public function setBankId(?string $bankId): void
    {
        $this->bankId = $bankId;
    }

    /**
     * Returns Bank Id Type.
     * Classifies bank account [field types](#/rest/models/structures/bank-account-fields)
     */
    public function getBankIdType(): ?string
    {
        return $this->bankIdType;
    }

    /**
     * Sets Bank Id Type.
     * Classifies bank account [field types](#/rest/models/structures/bank-account-fields)
     *
     * @maps bankIdType
     * @factory \PayQuickerSDKLib\Models\BankAccountFields::checkValue
     */
    public function setBankIdType(?string $bankIdType): void
    {
        $this->bankIdType = $bankIdType;
    }

    /**
     * Returns Branch Address.
     * The bank branch address
     */
    public function getBranchAddress(): ?string
    {
        return $this->branchAddress;
    }

    /**
     * Sets Branch Address.
     * The bank branch address
     *
     * @maps branchAddress
     */
    public function setBranchAddress(?string $branchAddress): void
    {
        $this->branchAddress = $branchAddress;
    }

    /**
     * Returns Branch City.
     * The bank branch city
     */
    public function getBranchCity(): ?string
    {
        return $this->branchCity;
    }

    /**
     * Sets Branch City.
     * The bank branch city
     *
     * @maps branchCity
     */
    public function setBranchCity(?string $branchCity): void
    {
        $this->branchCity = $branchCity;
    }

    /**
     * Returns Branch Id.
     * The bank branch id
     */
    public function getBranchId(): ?string
    {
        return $this->branchId;
    }

    /**
     * Sets Branch Id.
     * The bank branch id
     *
     * @maps branchId
     */
    public function setBranchId(?string $branchId): void
    {
        $this->branchId = $branchId;
    }

    /**
     * Returns Branch Name.
     * The bank branch name
     */
    public function getBranchName(): ?string
    {
        return $this->branchName;
    }

    /**
     * Sets Branch Name.
     * The bank branch name
     *
     * @maps branchName
     */
    public function setBranchName(?string $branchName): void
    {
        $this->branchName = $branchName;
    }

    /**
     * Returns Branch Postal Code.
     * The bank branch postal code
     */
    public function getBranchPostalCode(): ?string
    {
        return $this->branchPostalCode;
    }

    /**
     * Sets Branch Postal Code.
     * The bank branch postal code
     *
     * @maps branchPostalCode
     */
    public function setBranchPostalCode(?string $branchPostalCode): void
    {
        $this->branchPostalCode = $branchPostalCode;
    }

    /**
     * Returns Branch Phone Number.
     * The bank branch phone number
     */
    public function getBranchPhoneNumber(): ?string
    {
        return $this->branchPhoneNumber;
    }

    /**
     * Sets Branch Phone Number.
     * The bank branch phone number
     *
     * @maps branchPhoneNumber
     */
    public function setBranchPhoneNumber(?string $branchPhoneNumber): void
    {
        $this->branchPhoneNumber = $branchPhoneNumber;
    }

    /**
     * Returns Branch Region.
     * The bank branch region
     */
    public function getBranchRegion(): ?string
    {
        return $this->branchRegion;
    }

    /**
     * Sets Branch Region.
     * The bank branch region
     *
     * @maps branchRegion
     */
    public function setBranchRegion(?string $branchRegion): void
    {
        $this->branchRegion = $branchRegion;
    }

    /**
     * Returns Beneficary Tax Id.
     * The beneficiary's tax id
     */
    public function getBeneficaryTaxId(): ?string
    {
        return $this->beneficaryTaxId;
    }

    /**
     * Sets Beneficary Tax Id.
     * The beneficiary's tax id
     *
     * @maps beneficaryTaxId
     */
    public function setBeneficaryTaxId(?string $beneficaryTaxId): void
    {
        $this->beneficaryTaxId = $beneficaryTaxId;
    }

    /**
     * Returns Beneficary Tax Id Type.
     * Classifies bank account [field types](#/rest/models/structures/bank-account-fields)
     */
    public function getBeneficaryTaxIdType(): ?string
    {
        return $this->beneficaryTaxIdType;
    }

    /**
     * Sets Beneficary Tax Id Type.
     * Classifies bank account [field types](#/rest/models/structures/bank-account-fields)
     *
     * @maps beneficaryTaxIdType
     * @factory \PayQuickerSDKLib\Models\BankAccountFields::checkValue
     */
    public function setBeneficaryTaxIdType(?string $beneficaryTaxIdType): void
    {
        $this->beneficaryTaxIdType = $beneficaryTaxIdType;
    }

    /**
     * Returns Beneficary Name.
     * The name of the person chosen to inherit your account
     */
    public function getBeneficaryName(): ?string
    {
        return $this->beneficaryName;
    }

    /**
     * Sets Beneficary Name.
     * The name of the person chosen to inherit your account
     *
     * @maps beneficaryName
     */
    public function setBeneficaryName(?string $beneficaryName): void
    {
        $this->beneficaryName = $beneficaryName;
    }

    /**
     * Returns Memo.
     * Optional internal [memo](#/rest/models/structures/memo) not visible to the user
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * Optional internal [memo](#/rest/models/structures/memo) not visible to the user
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Note.
     * [Optional comments](#/rest/models/structures/notes) visible to the user
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * Sets Note.
     * [Optional comments](#/rest/models/structures/notes) visible to the user
     *
     * @maps note
     */
    public function setNote(?string $note): void
    {
        $this->note = $note;
    }

    /**
     * Returns Correlation Token.
     * [Token](#/rest/models/structures/token) representing the resource
     */
    public function getCorrelationToken(): ?string
    {
        return $this->correlationToken;
    }

    /**
     * Sets Correlation Token.
     * [Token](#/rest/models/structures/token) representing the resource
     *
     * @maps correlationToken
     */
    public function setCorrelationToken(?string $correlationToken): void
    {
        $this->correlationToken = $correlationToken;
    }

    /**
     * Returns Card Expiry Date.
     * Date that the card will expire
     */
    public function getCardExpiryDate(): ?string
    {
        return $this->cardExpiryDate;
    }

    /**
     * Sets Card Expiry Date.
     * Date that the card will expire
     *
     * @maps cardExpiryDate
     */
    public function setCardExpiryDate(?string $cardExpiryDate): void
    {
        $this->cardExpiryDate = $cardExpiryDate;
    }

    /**
     * Returns Card Holder Name.
     * Name of the card's owner
     */
    public function getCardHolderName(): ?string
    {
        return $this->cardHolderName;
    }

    /**
     * Sets Card Holder Name.
     * Name of the card's owner
     *
     * @maps cardHolderName
     */
    public function setCardHolderName(?string $cardHolderName): void
    {
        $this->cardHolderName = $cardHolderName;
    }

    /**
     * Returns Card Number.
     * Unique number on the prepaid card
     */
    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    /**
     * Sets Card Number.
     * Unique number on the prepaid card
     *
     * @maps cardNumber
     */
    public function setCardNumber(?string $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * Returns Electronic Wallet Account Number.
     * Account number for the electronic wallet
     */
    public function getElectronicWalletAccountNumber(): ?string
    {
        return $this->electronicWalletAccountNumber;
    }

    /**
     * Sets Electronic Wallet Account Number.
     * Account number for the electronic wallet
     *
     * @maps electronicWalletAccountNumber
     */
    public function setElectronicWalletAccountNumber(?string $electronicWalletAccountNumber): void
    {
        $this->electronicWalletAccountNumber = $electronicWalletAccountNumber;
    }

    /**
     * Returns Electronic Wallet Account Number Type.
     * Classifies electronic wallet [field types](#/rest/models/structures/electronic-wallet-fields)
     */
    public function getElectronicWalletAccountNumberType(): ?string
    {
        return $this->electronicWalletAccountNumberType;
    }

    /**
     * Sets Electronic Wallet Account Number Type.
     * Classifies electronic wallet [field types](#/rest/models/structures/electronic-wallet-fields)
     *
     * @maps electronicWalletAccountNumberType
     * @factory \PayQuickerSDKLib\Models\ElectronicWalletFields::checkValue
     */
    public function setElectronicWalletAccountNumberType(?string $electronicWalletAccountNumberType): void
    {
        $this->electronicWalletAccountNumberType = $electronicWalletAccountNumberType;
    }

    /**
     * Returns Electronic Wallet Government Id.
     * Government ID for the electronic wallet
     */
    public function getElectronicWalletGovernmentId(): ?string
    {
        return $this->electronicWalletGovernmentId;
    }

    /**
     * Sets Electronic Wallet Government Id.
     * Government ID for the electronic wallet
     *
     * @maps electronicWalletGovernmentId
     */
    public function setElectronicWalletGovernmentId(?string $electronicWalletGovernmentId): void
    {
        $this->electronicWalletGovernmentId = $electronicWalletGovernmentId;
    }

    /**
     * Returns Electronic Wallet Government Id Type.
     * Classifies electronic wallet [field types](#/rest/models/structures/electronic-wallet-fields)
     */
    public function getElectronicWalletGovernmentIdType(): ?string
    {
        return $this->electronicWalletGovernmentIdType;
    }

    /**
     * Sets Electronic Wallet Government Id Type.
     * Classifies electronic wallet [field types](#/rest/models/structures/electronic-wallet-fields)
     *
     * @maps electronicWalletGovernmentIdType
     * @factory \PayQuickerSDKLib\Models\ElectronicWalletFields::checkValue
     */
    public function setElectronicWalletGovernmentIdType(?string $electronicWalletGovernmentIdType): void
    {
        $this->electronicWalletGovernmentIdType = $electronicWalletGovernmentIdType;
    }

    /**
     * Returns Electronic Wallet Type.
     * Name of the electronic wallet
     */
    public function getElectronicWalletType(): ?string
    {
        return $this->electronicWalletType;
    }

    /**
     * Sets Electronic Wallet Type.
     * Name of the electronic wallet
     *
     * @maps electronicWalletType
     * @factory \PayQuickerSDKLib\Models\ElectronicWalletTypes::checkValue
     */
    public function setElectronicWalletType(?string $electronicWalletType): void
    {
        $this->electronicWalletType = $electronicWalletType;
    }

    /**
     * Returns Mobile Phone Number.
     */
    public function getMobilePhoneNumber(): ?string
    {
        return $this->mobilePhoneNumber;
    }

    /**
     * Sets Mobile Phone Number.
     *
     * @maps mobilePhoneNumber
     */
    public function setMobilePhoneNumber(?string $mobilePhoneNumber): void
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
    }

    /**
     * Returns Electronic Funds Transfer Type.
     * The type of transfer performed
     */
    public function getElectronicFundsTransferType(): ?string
    {
        return $this->electronicFundsTransferType;
    }

    /**
     * Sets Electronic Funds Transfer Type.
     * The type of transfer performed
     *
     * @maps electronicFundsTransferType
     * @factory \PayQuickerSDKLib\Models\ElectronicFundsTransferTypes::checkValue
     */
    public function setElectronicFundsTransferType(?string $electronicFundsTransferType): void
    {
        $this->electronicFundsTransferType = $electronicFundsTransferType;
    }

    /**
     * Returns Electronic Funds Transfer Failure Type.
     * The type of failure for a bank transfer
     */
    public function getElectronicFundsTransferFailureType(): ?string
    {
        return $this->electronicFundsTransferFailureType;
    }

    /**
     * Sets Electronic Funds Transfer Failure Type.
     * The type of failure for a bank transfer
     *
     * @maps electronicFundsTransferFailureType
     * @factory \PayQuickerSDKLib\Models\ElectronicTransferFailureTypes::checkValue
     */
    public function setElectronicFundsTransferFailureType(?string $electronicFundsTransferFailureType): void
    {
        $this->electronicFundsTransferFailureType = $electronicFundsTransferFailureType;
    }

    /**
     * Returns Electronic Transfer Status Type.
     * The status of a bank transfer
     */
    public function getElectronicTransferStatusType(): ?string
    {
        return $this->electronicTransferStatusType;
    }

    /**
     * Sets Electronic Transfer Status Type.
     * The status of a bank transfer
     *
     * @maps electronicTransferStatusType
     * @factory \PayQuickerSDKLib\Models\ElectronicTransferStatusTypes::checkValue
     */
    public function setElectronicTransferStatusType(?string $electronicTransferStatusType): void
    {
        $this->electronicTransferStatusType = $electronicTransferStatusType;
    }

    /**
     * Converts the ReceiptDetails object to a human-readable string representation.
     *
     * @return string The string representation of the ReceiptDetails object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ReceiptDetails',
            [
                'bankAccountId' => $this->bankAccountId,
                'bankAccountIdType' => $this->bankAccountIdType,
                'bankName' => $this->bankName,
                'bankId' => $this->bankId,
                'bankIdType' => $this->bankIdType,
                'branchAddress' => $this->branchAddress,
                'branchCity' => $this->branchCity,
                'branchId' => $this->branchId,
                'branchName' => $this->branchName,
                'branchPostalCode' => $this->branchPostalCode,
                'branchPhoneNumber' => $this->branchPhoneNumber,
                'branchRegion' => $this->branchRegion,
                'beneficaryTaxId' => $this->beneficaryTaxId,
                'beneficaryTaxIdType' => $this->beneficaryTaxIdType,
                'beneficaryName' => $this->beneficaryName,
                'memo' => $this->memo,
                'note' => $this->note,
                'correlationToken' => $this->correlationToken,
                'cardExpiryDate' => $this->cardExpiryDate,
                'cardHolderName' => $this->cardHolderName,
                'cardNumber' => $this->cardNumber,
                'electronicWalletAccountNumber' => $this->electronicWalletAccountNumber,
                'electronicWalletAccountNumberType' => $this->electronicWalletAccountNumberType,
                'electronicWalletGovernmentId' => $this->electronicWalletGovernmentId,
                'electronicWalletGovernmentIdType' => $this->electronicWalletGovernmentIdType,
                'electronicWalletType' => $this->electronicWalletType,
                'mobilePhoneNumber' => $this->mobilePhoneNumber,
                'electronicFundsTransferType' => $this->electronicFundsTransferType,
                'electronicFundsTransferFailureType' => $this->electronicFundsTransferFailureType,
                'electronicTransferStatusType' => $this->electronicTransferStatusType,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->bankAccountId)) {
            $json['bankAccountId']                      = $this->bankAccountId;
        }
        if (isset($this->bankAccountIdType)) {
            $json['bankAccountIdType']                  = BankAccountFields::checkValue($this->bankAccountIdType);
        }
        if (isset($this->bankName)) {
            $json['bankName']                           = $this->bankName;
        }
        if (isset($this->bankId)) {
            $json['bankId']                             = $this->bankId;
        }
        if (isset($this->bankIdType)) {
            $json['bankIdType']                         = BankAccountFields::checkValue($this->bankIdType);
        }
        if (isset($this->branchAddress)) {
            $json['branchAddress']                      = $this->branchAddress;
        }
        if (isset($this->branchCity)) {
            $json['branchCity']                         = $this->branchCity;
        }
        if (isset($this->branchId)) {
            $json['branchId']                           = $this->branchId;
        }
        if (isset($this->branchName)) {
            $json['branchName']                         = $this->branchName;
        }
        if (isset($this->branchPostalCode)) {
            $json['branchPostalCode']                   = $this->branchPostalCode;
        }
        if (isset($this->branchPhoneNumber)) {
            $json['branchPhoneNumber']                  = $this->branchPhoneNumber;
        }
        if (isset($this->branchRegion)) {
            $json['branchRegion']                       = $this->branchRegion;
        }
        if (isset($this->beneficaryTaxId)) {
            $json['beneficaryTaxId']                    = $this->beneficaryTaxId;
        }
        if (isset($this->beneficaryTaxIdType)) {
            $json['beneficaryTaxIdType']                = BankAccountFields::checkValue($this->beneficaryTaxIdType);
        }
        if (isset($this->beneficaryName)) {
            $json['beneficaryName']                     = $this->beneficaryName;
        }
        if (isset($this->memo)) {
            $json['memo']                               = $this->memo;
        }
        if (isset($this->note)) {
            $json['note']                               = $this->note;
        }
        if (isset($this->correlationToken)) {
            $json['correlationToken']                   = $this->correlationToken;
        }
        if (isset($this->cardExpiryDate)) {
            $json['cardExpiryDate']                     = $this->cardExpiryDate;
        }
        if (isset($this->cardHolderName)) {
            $json['cardHolderName']                     = $this->cardHolderName;
        }
        if (isset($this->cardNumber)) {
            $json['cardNumber']                         = $this->cardNumber;
        }
        if (isset($this->electronicWalletAccountNumber)) {
            $json['electronicWalletAccountNumber']      = $this->electronicWalletAccountNumber;
        }
        if (isset($this->electronicWalletAccountNumberType)) {
            $json['electronicWalletAccountNumberType']  =
                ElectronicWalletFields::checkValue(
                    $this->electronicWalletAccountNumberType
                );
        }
        if (isset($this->electronicWalletGovernmentId)) {
            $json['electronicWalletGovernmentId']       = $this->electronicWalletGovernmentId;
        }
        if (isset($this->electronicWalletGovernmentIdType)) {
            $json['electronicWalletGovernmentIdType']   =
                ElectronicWalletFields::checkValue(
                    $this->electronicWalletGovernmentIdType
                );
        }
        if (isset($this->electronicWalletType)) {
            $json['electronicWalletType']               =
                ElectronicWalletTypes::checkValue(
                    $this->electronicWalletType
                );
        }
        if (isset($this->mobilePhoneNumber)) {
            $json['mobilePhoneNumber']                  = $this->mobilePhoneNumber;
        }
        if (isset($this->electronicFundsTransferType)) {
            $json['electronicFundsTransferType']        =
                ElectronicFundsTransferTypes::checkValue(
                    $this->electronicFundsTransferType
                );
        }
        if (isset($this->electronicFundsTransferFailureType)) {
            $json['electronicFundsTransferFailureType'] =
                ElectronicTransferFailureTypes::checkValue(
                    $this->electronicFundsTransferFailureType
                );
        }
        if (isset($this->electronicTransferStatusType)) {
            $json['electronicTransferStatusType']       =
                ElectronicTransferStatusTypes::checkValue(
                    $this->electronicTransferStatusType
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
