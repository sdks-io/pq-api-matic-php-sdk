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

class CreateOrUpdateBankAccount implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $bankAccountOwnershipType;

    /**
     * @var string|null
     */
    private $bankCountry;

    /**
     * @var string|null
     */
    private $bankCurrency = Currencies::USD;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var BankAccountField[]|null
     */
    private $fields;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $transferMethodType;

    /**
     * @var BankAccountAddress|null
     */
    private $address;

    /**
     * Returns Bank Account Ownership Type.
     * Account [ownership types](#/rest/models/structures/bank-account-ownership)
     */
    public function getBankAccountOwnershipType(): ?string
    {
        return $this->bankAccountOwnershipType;
    }

    /**
     * Sets Bank Account Ownership Type.
     * Account [ownership types](#/rest/models/structures/bank-account-ownership)
     *
     * @maps bankAccountOwnershipType
     * @factory \PayQuickerSDKLib\Models\BankAccountOwnership::checkValue
     */
    public function setBankAccountOwnershipType(?string $bankAccountOwnershipType): void
    {
        $this->bankAccountOwnershipType = $bankAccountOwnershipType;
    }

    /**
     * Returns Bank Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     */
    public function getBankCountry(): ?string
    {
        return $this->bankCountry;
    }

    /**
     * Sets Bank Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     *
     * @maps bankCountry
     * @factory \PayQuickerSDKLib\Models\Countries::checkValue
     */
    public function setBankCountry(?string $bankCountry): void
    {
        $this->bankCountry = $bankCountry;
    }

    /**
     * Returns Bank Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     */
    public function getBankCurrency(): ?string
    {
        return $this->bankCurrency;
    }

    /**
     * Sets Bank Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     *
     * @maps bankCurrency
     * @factory \PayQuickerSDKLib\Models\Currencies::checkValue
     */
    public function setBankCurrency(?string $bankCurrency): void
    {
        $this->bankCurrency = $bankCurrency;
    }

    /**
     * Returns Description.
     * User-supplied description of the bank account for reference
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * User-supplied description of the bank account for reference
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Fields.
     *
     * @return BankAccountField[]|null
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * Sets Fields.
     *
     * @maps fields
     *
     * @param BankAccountField[]|null $fields
     */
    public function setFields(?array $fields): void
    {
        $this->fields = $fields;
    }

    /**
     * Returns Type.
     * Financial purpose of the [bank account](#/rest/models/structures/bank-account-type)
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Financial purpose of the [bank account](#/rest/models/structures/bank-account-type)
     *
     * @maps type
     * @factory \PayQuickerSDKLib\Models\BankAccountTypes::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Transfer Method Type.
     * Optional transfer methods applicable only to bank and e-wallet transfers.
     */
    public function getTransferMethodType(): ?string
    {
        return $this->transferMethodType;
    }

    /**
     * Sets Transfer Method Type.
     * Optional transfer methods applicable only to bank and e-wallet transfers.
     *
     * @maps transferMethodType
     * @factory \PayQuickerSDKLib\Models\TransferMethodTypes::checkValue
     */
    public function setTransferMethodType(?string $transferMethodType): void
    {
        $this->transferMethodType = $transferMethodType;
    }

    /**
     * Returns Address.
     */
    public function getAddress(): ?BankAccountAddress
    {
        return $this->address;
    }

    /**
     * Sets Address.
     *
     * @maps address
     */
    public function setAddress(?BankAccountAddress $address): void
    {
        $this->address = $address;
    }

    /**
     * Converts the CreateOrUpdateBankAccount object to a human-readable string representation.
     *
     * @return string The string representation of the CreateOrUpdateBankAccount object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateOrUpdateBankAccount',
            [
                'bankAccountOwnershipType' => $this->bankAccountOwnershipType,
                'bankCountry' => $this->bankCountry,
                'bankCurrency' => $this->bankCurrency,
                'description' => $this->description,
                'fields' => $this->fields,
                'type' => $this->type,
                'transferMethodType' => $this->transferMethodType,
                'address' => $this->address,
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
        if (isset($this->bankAccountOwnershipType)) {
            $json['bankAccountOwnershipType'] = BankAccountOwnership::checkValue($this->bankAccountOwnershipType);
        }
        if (isset($this->bankCountry)) {
            $json['bankCountry']              = Countries::checkValue($this->bankCountry);
        }
        if (isset($this->bankCurrency)) {
            $json['bankCurrency']             = Currencies::checkValue($this->bankCurrency);
        }
        if (isset($this->description)) {
            $json['description']              = $this->description;
        }
        if (isset($this->fields)) {
            $json['fields']                   = $this->fields;
        }
        if (isset($this->type)) {
            $json['type']                     = BankAccountTypes::checkValue($this->type);
        }
        if (isset($this->transferMethodType)) {
            $json['transferMethodType']       = TransferMethodTypes::checkValue($this->transferMethodType);
        }
        if (isset($this->address)) {
            $json['address']                  = $this->address;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
