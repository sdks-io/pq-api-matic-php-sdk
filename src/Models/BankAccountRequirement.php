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
 * Classifies the bank account [required](#/rest/models/structures/bank-account-requirement)
 * information
 */
class BankAccountRequirement implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $bankCountry;

    /**
     * @var string|null
     */
    private $bankCurrency = Currencies::USD;

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
     * @var BankAccountRequiredFields[]|null
     */
    private $requirements;

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
     * @return BankAccountRequiredFields[]|null
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
     * @param BankAccountRequiredFields[]|null $requirements
     */
    public function setRequirements(?array $requirements): void
    {
        $this->requirements = $requirements;
    }

    /**
     * Converts the BankAccountRequirement object to a human-readable string representation.
     *
     * @return string The string representation of the BankAccountRequirement object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BankAccountRequirement',
            [
                'bankCountry' => $this->bankCountry,
                'bankCurrency' => $this->bankCurrency,
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
        if (isset($this->bankCountry)) {
            $json['bankCountry']    = Countries::checkValue($this->bankCountry);
        }
        if (isset($this->bankCurrency)) {
            $json['bankCurrency']   = Currencies::checkValue($this->bankCurrency);
        }
        if (isset($this->fee)) {
            $json['fee']            = $this->fee;
        }
        if (isset($this->sourceCountry)) {
            $json['sourceCountry']  = Countries::checkValue($this->sourceCountry);
        }
        if (isset($this->sourceCurrency)) {
            $json['sourceCurrency'] = Currencies::checkValue($this->sourceCurrency);
        }
        if (isset($this->requirements)) {
            $json['requirements']   = $this->requirements;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
