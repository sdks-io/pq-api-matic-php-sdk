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

class PrepaidCardDataObject implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $cardNumber;

    /**
     * @var string|null
     */
    private $cvvNumber;

    /**
     * @var string|null
     */
    private $expiration;

    /**
     * @var string|null
     */
    private $nameOnCard;

    /**
     * @var string|null
     */
    private $token;

    /**
     * @var HateoasSelfRef[]|null
     */
    private $links;

    /**
     * Returns Card Number.
     * Unique number on the prepaid card
     */
    public function getCardNumber(): ?float
    {
        return $this->cardNumber;
    }

    /**
     * Sets Card Number.
     * Unique number on the prepaid card
     *
     * @maps cardNumber
     */
    public function setCardNumber(?float $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * Returns Cvv Number.
     * Three- or four-digit [Card Verification Value (CVV)](#/rest/models/structures/cvv) number displayed
     * on the back of a credit or debit card
     */
    public function getCvvNumber(): ?string
    {
        return $this->cvvNumber;
    }

    /**
     * Sets Cvv Number.
     * Three- or four-digit [Card Verification Value (CVV)](#/rest/models/structures/cvv) number displayed
     * on the back of a credit or debit card
     *
     * @maps cvvNumber
     */
    public function setCvvNumber(?string $cvvNumber): void
    {
        $this->cvvNumber = $cvvNumber;
    }

    /**
     * Returns Expiration.
     * Date that the card will expire
     */
    public function getExpiration(): ?string
    {
        return $this->expiration;
    }

    /**
     * Sets Expiration.
     * Date that the card will expire
     *
     * @maps expiration
     */
    public function setExpiration(?string $expiration): void
    {
        $this->expiration = $expiration;
    }

    /**
     * Returns Name on Card.
     * Name of the card's owner
     */
    public function getNameOnCard(): ?string
    {
        return $this->nameOnCard;
    }

    /**
     * Sets Name on Card.
     * Name of the card's owner
     *
     * @maps nameOnCard
     */
    public function setNameOnCard(?string $nameOnCard): void
    {
        $this->nameOnCard = $nameOnCard;
    }

    /**
     * Returns Token.
     * A token used to reveal prepaid card information in the form of image data (base64) or JSON.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * A token used to reveal prepaid card information in the form of image data (base64) or JSON.
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
     * Converts the PrepaidCardDataObject object to a human-readable string representation.
     *
     * @return string The string representation of the PrepaidCardDataObject object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PrepaidCardDataObject',
            [
                'cardNumber' => $this->cardNumber,
                'cvvNumber' => $this->cvvNumber,
                'expiration' => $this->expiration,
                'nameOnCard' => $this->nameOnCard,
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
        if (isset($this->cardNumber)) {
            $json['cardNumber'] = $this->cardNumber;
        }
        if (isset($this->cvvNumber)) {
            $json['cvvNumber']  = $this->cvvNumber;
        }
        if (isset($this->expiration)) {
            $json['expiration'] = $this->expiration;
        }
        if (isset($this->nameOnCard)) {
            $json['nameOnCard'] = $this->nameOnCard;
        }
        if (isset($this->token)) {
            $json['token']      = $this->token;
        }
        if (isset($this->links)) {
            $json['links']      = $this->links;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
