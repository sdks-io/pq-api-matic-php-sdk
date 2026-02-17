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

class RetrieveCardPin implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $cardPinToken;

    /**
     * Returns Card Pin Token.
     * [Token](#/rest/models/structures/prepaid-card-pin-token) used as part of a two-leg card PIN reveal
     * request sent directly from the client that generally involves a second piece of data, such as the
     * CVV code on the back of the card.
     */
    public function getCardPinToken(): ?string
    {
        return $this->cardPinToken;
    }

    /**
     * Sets Card Pin Token.
     * [Token](#/rest/models/structures/prepaid-card-pin-token) used as part of a two-leg card PIN reveal
     * request sent directly from the client that generally involves a second piece of data, such as the
     * CVV code on the back of the card.
     *
     * @maps cardPinToken
     */
    public function setCardPinToken(?string $cardPinToken): void
    {
        $this->cardPinToken = $cardPinToken;
    }

    /**
     * Converts the RetrieveCardPin object to a human-readable string representation.
     *
     * @return string The string representation of the RetrieveCardPin object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'RetrieveCardPin',
            ['cardPinToken' => $this->cardPinToken, 'additionalProperties' => $this->additionalProperties]
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
        if (isset($this->cardPinToken)) {
            $json['cardPinToken'] = $this->cardPinToken;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
