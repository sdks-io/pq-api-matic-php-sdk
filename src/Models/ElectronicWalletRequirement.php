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

/**
 * Classifies the electronic wallet [required](#/rest/models/structures/electronic-wallet-requirement)
 * information
 */
class ElectronicWalletRequirement implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $electronicWalletType;

    /**
     * @var string|null
     */
    private $electronicWalletCountry;

    /**
     * @var string|null
     */
    private $electronicWalletCurrency = Currencies::USD;

    /**
     * @var FeeConfiguration|null
     */
    private $fee;

    /**
     * @var string|null
     */
    private $sourceCountry;

    /**
     * @var string|null
     */
    private $sourceCurrency = Currencies::USD;

    /**
     * @var ElectronicWalletRequiredFields[]|null
     */
    private $requirements;

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
     * Returns Electronic Wallet Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     */
    public function getElectronicWalletCountry(): ?string
    {
        return $this->electronicWalletCountry;
    }

    /**
     * Sets Electronic Wallet Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     *
     * @maps electronicWalletCountry
     * @factory \PayQuickerSDKLib\Models\Countries::checkValue
     */
    public function setElectronicWalletCountry(?string $electronicWalletCountry): void
    {
        $this->electronicWalletCountry = $electronicWalletCountry;
    }

    /**
     * Returns Electronic Wallet Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     */
    public function getElectronicWalletCurrency(): ?string
    {
        return $this->electronicWalletCurrency;
    }

    /**
     * Sets Electronic Wallet Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     *
     * @maps electronicWalletCurrency
     * @factory \PayQuickerSDKLib\Models\Currencies::checkValue
     */
    public function setElectronicWalletCurrency(?string $electronicWalletCurrency): void
    {
        $this->electronicWalletCurrency = $electronicWalletCurrency;
    }

    /**
     * Returns Fee.
     */
    public function getFee(): ?FeeConfiguration
    {
        return $this->fee;
    }

    /**
     * Sets Fee.
     *
     * @maps fee
     */
    public function setFee(?FeeConfiguration $fee): void
    {
        $this->fee = $fee;
    }

    /**
     * Returns Source Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     */
    public function getSourceCountry(): ?string
    {
        return $this->sourceCountry;
    }

    /**
     * Sets Source Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     *
     * @maps sourceCountry
     * @factory \PayQuickerSDKLib\Models\Countries::checkValue
     */
    public function setSourceCountry(?string $sourceCountry): void
    {
        $this->sourceCountry = $sourceCountry;
    }

    /**
     * Returns Source Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     */
    public function getSourceCurrency(): ?string
    {
        return $this->sourceCurrency;
    }

    /**
     * Sets Source Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     *
     * @maps sourceCurrency
     * @factory \PayQuickerSDKLib\Models\Currencies::checkValue
     */
    public function setSourceCurrency(?string $sourceCurrency): void
    {
        $this->sourceCurrency = $sourceCurrency;
    }

    /**
     * Returns Requirements.
     *
     * @return ElectronicWalletRequiredFields[]|null
     */
    public function getRequirements(): ?array
    {
        return $this->requirements;
    }

    /**
     * Sets Requirements.
     *
     * @maps requirements
     *
     * @param ElectronicWalletRequiredFields[]|null $requirements
     */
    public function setRequirements(?array $requirements): void
    {
        $this->requirements = $requirements;
    }

    /**
     * Converts the ElectronicWalletRequirement object to a human-readable string representation.
     *
     * @return string The string representation of the ElectronicWalletRequirement object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ElectronicWalletRequirement',
            [
                'electronicWalletType' => $this->electronicWalletType,
                'electronicWalletCountry' => $this->electronicWalletCountry,
                'electronicWalletCurrency' => $this->electronicWalletCurrency,
                'fee' => $this->fee,
                'sourceCountry' => $this->sourceCountry,
                'sourceCurrency' => $this->sourceCurrency,
                'requirements' => $this->requirements,
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
        if (isset($this->electronicWalletType)) {
            $json['electronicWalletType']     = ElectronicWalletTypes::checkValue($this->electronicWalletType);
        }
        if (isset($this->electronicWalletCountry)) {
            $json['electronicWalletCountry']  = Countries::checkValue($this->electronicWalletCountry);
        }
        if (isset($this->electronicWalletCurrency)) {
            $json['electronicWalletCurrency'] = Currencies::checkValue($this->electronicWalletCurrency);
        }
        if (isset($this->fee)) {
            $json['fee']                      = $this->fee;
        }
        if (isset($this->sourceCountry)) {
            $json['sourceCountry']            = Countries::checkValue($this->sourceCountry);
        }
        if (isset($this->sourceCurrency)) {
            $json['sourceCurrency']           = Currencies::checkValue($this->sourceCurrency);
        }
        if (isset($this->requirements)) {
            $json['requirements']             = $this->requirements;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
