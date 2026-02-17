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

class CreateOrUpdateElectronicWallet implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $electronicWalletCountry;

    /**
     * @var string|null
     */
    private $electronicWalletCurrency = Currencies::USD;

    /**
     * @var ElectronicWalletField[]|null
     */
    private $fields;

    /**
     * Returns Type.
     * Name of the electronic wallet
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Name of the electronic wallet
     *
     * @maps type
     * @factory \PayQuickerSDKLib\Models\ElectronicWalletTypes::checkValue
     */
    public function setType(?string $type): void
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
     * Returns Fields.
     *
     * @return ElectronicWalletField[]|null
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
     * @param ElectronicWalletField[]|null $fields
     */
    public function setFields(?array $fields): void
    {
        $this->fields = $fields;
    }

    /**
     * Converts the CreateOrUpdateElectronicWallet object to a human-readable string representation.
     *
     * @return string The string representation of the CreateOrUpdateElectronicWallet object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateOrUpdateElectronicWallet',
            [
                'type' => $this->type,
                'electronicWalletCountry' => $this->electronicWalletCountry,
                'electronicWalletCurrency' => $this->electronicWalletCurrency,
                'fields' => $this->fields,
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
        if (isset($this->type)) {
            $json['type']                     = ElectronicWalletTypes::checkValue($this->type);
        }
        if (isset($this->electronicWalletCountry)) {
            $json['electronicWalletCountry']  = Countries::checkValue($this->electronicWalletCountry);
        }
        if (isset($this->electronicWalletCurrency)) {
            $json['electronicWalletCurrency'] = Currencies::checkValue($this->electronicWalletCurrency);
        }
        if (isset($this->fields)) {
            $json['fields']                   = $this->fields;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
