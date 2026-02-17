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

class ProgramResult implements \JsonSerializable
{
    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $bank;

    /**
     * @var ElectronicWalletType[]|null
     */
    private $electronicWallets;

    /**
     * @var string
     */
    private $type;

    /**
     * @var HateoasSelfRef[]|null
     */
    private $links;

    /**
     * @var MetadataItems|null
     */
    private $meta;

    /**
     * @param string $token
     * @param string $currency
     * @param string $bank
     * @param string $type
     */
    public function __construct(string $token, string $currency, string $bank, string $type)
    {
        $this->token = $token;
        $this->currency = $currency;
        $this->bank = $bank;
        $this->type = $type;
    }

    /**
     * Returns Token.
     * Auto-generated unique identifier representing a program, prefixed with prog-
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * Auto-generated unique identifier representing a program, prefixed with prog-
     *
     * @required
     * @maps token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    /**
     * Returns Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     *
     * @required
     * @maps currency
     * @factory \PayQuickerSDKLib\Models\Currencies::checkValue
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Bank.
     * Name of the bank
     */
    public function getBank(): string
    {
        return $this->bank;
    }

    /**
     * Sets Bank.
     * Name of the bank
     *
     * @required
     * @maps bank
     * @factory \PayQuickerSDKLib\Models\BankTypes::checkValue
     */
    public function setBank(string $bank): void
    {
        $this->bank = $bank;
    }

    /**
     * Returns Electronic Wallets.
     *
     * @return ElectronicWalletType[]|null
     */
    public function getElectronicWallets(): ?array
    {
        return $this->electronicWallets;
    }

    /**
     * Sets Electronic Wallets.
     *
     * @maps electronicWallets
     *
     * @param ElectronicWalletType[]|null $electronicWallets
     */
    public function setElectronicWallets(?array $electronicWallets): void
    {
        $this->electronicWallets = $electronicWallets;
    }

    /**
     * Returns Type.
     * Indicates the type of program associated with a prepaid card
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Indicates the type of program associated with a prepaid card
     *
     * @required
     * @maps type
     * @factory \PayQuickerSDKLib\Models\ProgramTypes::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Links.
     *
     * @return HateoasSelfRef[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * Sets Links.
     *
     * @maps links
     *
     * @param HateoasSelfRef[]|null $links
     */
    public function setLinks(?array $links): void
    {
        $this->links = $links;
    }

    /**
     * Returns Meta.
     */
    public function getMeta(): ?MetadataItems
    {
        return $this->meta;
    }

    /**
     * Sets Meta.
     *
     * @maps meta
     */
    public function setMeta(?MetadataItems $meta): void
    {
        $this->meta = $meta;
    }

    /**
     * Converts the ProgramResult object to a human-readable string representation.
     *
     * @return string The string representation of the ProgramResult object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ProgramResult',
            [
                'token' => $this->token,
                'currency' => $this->currency,
                'bank' => $this->bank,
                'electronicWallets' => $this->electronicWallets,
                'type' => $this->type,
                'links' => $this->links,
                'meta' => $this->meta,
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
        $json['token']                 = $this->token;
        $json['currency']              = Currencies::checkValue($this->currency);
        $json['bank']                  = BankTypes::checkValue($this->bank);
        if (isset($this->electronicWallets)) {
            $json['electronicWallets'] = $this->electronicWallets;
        }
        $json['type']                  = ProgramTypes::checkValue($this->type);
        if (isset($this->links)) {
            $json['links']             = $this->links;
        }
        if (isset($this->meta)) {
            $json['meta']              = $this->meta;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
