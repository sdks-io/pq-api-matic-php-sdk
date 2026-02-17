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
 * Classifies the electronic wallet [required](#/rest/models/structures/electronic-wallet-type)
 * configuration
 */
class ElectronicWalletType implements \JsonSerializable
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $electronicWalletCountry;

    /**
     * @var string
     */
    private $electronicWalletCurrency;

    /**
     * @param string $type
     * @param string $electronicWalletCountry
     * @param string $electronicWalletCurrency
     */
    public function __construct(string $type, string $electronicWalletCountry, string $electronicWalletCurrency)
    {
        $this->type = $type;
        $this->electronicWalletCountry = $electronicWalletCountry;
        $this->electronicWalletCurrency = $electronicWalletCurrency;
    }

    /**
     * Returns Type.
     * Name of the electronic wallet
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Name of the electronic wallet
     *
     * @required
     * @maps type
     * @factory \PayQuickerSDKLib\Models\ElectronicWalletTypes::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Electronic Wallet Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     */
    public function getElectronicWalletCountry(): string
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
     * @required
     * @maps electronicWalletCountry
     * @factory \PayQuickerSDKLib\Models\Countries::checkValue
     */
    public function setElectronicWalletCountry(string $electronicWalletCountry): void
    {
        $this->electronicWalletCountry = $electronicWalletCountry;
    }

    /**
     * Returns Electronic Wallet Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     */
    public function getElectronicWalletCurrency(): string
    {
        return $this->electronicWalletCurrency;
    }

    /**
     * Sets Electronic Wallet Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     *
     * @required
     * @maps electronicWalletCurrency
     * @factory \PayQuickerSDKLib\Models\Currencies::checkValue
     */
    public function setElectronicWalletCurrency(string $electronicWalletCurrency): void
    {
        $this->electronicWalletCurrency = $electronicWalletCurrency;
    }

    /**
     * Converts the ElectronicWalletType object to a human-readable string representation.
     *
     * @return string The string representation of the ElectronicWalletType object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ElectronicWalletType',
            [
                'type' => $this->type,
                'electronicWalletCountry' => $this->electronicWalletCountry,
                'electronicWalletCurrency' => $this->electronicWalletCurrency,
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
        $json['type']                     = ElectronicWalletTypes::checkValue($this->type);
        $json['electronicWalletCountry']  = Countries::checkValue($this->electronicWalletCountry);
        $json['electronicWalletCurrency'] = Currencies::checkValue($this->electronicWalletCurrency);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
