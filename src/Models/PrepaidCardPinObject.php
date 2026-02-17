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

class PrepaidCardPinObject implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $cardPin;

    /**
     * @var string|null
     */
    private $token;

    /**
     * @var HateoasSelfRef[]|null
     */
    private $links;

    /**
     * Returns Card Pin.
     * [Card PIN](#/rest/models/structures/prepaid-card-pin) for ATM and Debit usage
     */
    public function getCardPin(): ?string
    {
        return $this->cardPin;
    }

    /**
     * Sets Card Pin.
     * [Card PIN](#/rest/models/structures/prepaid-card-pin) for ATM and Debit usage
     *
     * @maps cardPin
     */
    public function setCardPin(?string $cardPin): void
    {
        $this->cardPin = $cardPin;
    }

    /**
     * Returns Token.
     * [Token](#/rest/models/structures/prepaid-card-pin-token) used as part of a two-leg card PIN reveal
     * request sent directly from the client that generally involves a second piece of data, such as the
     * CVV code on the back of the card.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * [Token](#/rest/models/structures/prepaid-card-pin-token) used as part of a two-leg card PIN reveal
     * request sent directly from the client that generally involves a second piece of data, such as the
     * CVV code on the back of the card.
     *
     * @maps token
     */
    public function setToken(?string $token): void
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
     * Converts the PrepaidCardPinObject object to a human-readable string representation.
     *
     * @return string The string representation of the PrepaidCardPinObject object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PrepaidCardPinObject',
            [
                'cardPin' => $this->cardPin,
                'token' => $this->token,
                'links' => $this->links,
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
        if (isset($this->cardPin)) {
            $json['cardPin'] = $this->cardPin;
        }
        if (isset($this->token)) {
            $json['token']   = $this->token;
        }
        if (isset($this->links)) {
            $json['links']   = $this->links;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
