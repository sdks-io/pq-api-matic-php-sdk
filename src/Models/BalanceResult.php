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

class BalanceResult implements \JsonSerializable
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $formattedAmount;

    /**
     * @var string
     */
    private $token;

    /**
     * @var HateoasSelfRef[]|null
     */
    private $links;

    /**
     * @var MetadataItems|null
     */
    private $meta;

    /**
     * @param float $amount
     * @param string $currency
     * @param string $formattedAmount
     * @param string $token
     */
    public function __construct(float $amount, string $currency, string $formattedAmount, string $token)
    {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->formattedAmount = $formattedAmount;
        $this->token = $token;
    }

    /**
     * Returns Amount.
     * Amount of money in the account
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount of money in the account
     *
     * @required
     * @maps amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
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
     * Returns Formatted Amount.
     * Combination of the amount and currency type
     */
    public function getFormattedAmount(): string
    {
        return $this->formattedAmount;
    }

    /**
     * Sets Formatted Amount.
     * Combination of the amount and currency type
     *
     * @required
     * @maps formattedAmount
     */
    public function setFormattedAmount(string $formattedAmount): void
    {
        $this->formattedAmount = $formattedAmount;
    }

    /**
     * Returns Token.
     * [Token](#/rest/models/structures/token) representing the resource
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * [Token](#/rest/models/structures/token) representing the resource
     *
     * @required
     * @maps token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
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
     * Converts the BalanceResult object to a human-readable string representation.
     *
     * @return string The string representation of the BalanceResult object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BalanceResult',
            [
                'amount' => $this->amount,
                'currency' => $this->currency,
                'formattedAmount' => $this->formattedAmount,
                'token' => $this->token,
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
        $json['amount']          = $this->amount;
        $json['currency']        = Currencies::checkValue($this->currency);
        $json['formattedAmount'] = $this->formattedAmount;
        $json['token']           = $this->token;
        if (isset($this->links)) {
            $json['links']       = $this->links;
        }
        if (isset($this->meta)) {
            $json['meta']        = $this->meta;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
