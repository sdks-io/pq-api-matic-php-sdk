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

class PrepaidCardPinTokenResult implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $cardProcessorType;

    /**
     * @var string|null
     */
    private $cardPinToken;

    /**
     * @var string|null
     */
    private $token;

    /**
     * @var string|null
     */
    private $url;

    /**
     * @var HateoasSelfRef[]|null
     */
    private $links;

    /**
     * @var MetadataItems|null
     */
    private $meta;

    /**
     * Returns Card Processor Type.
     * The processor type for the prepaid card
     */
    public function getCardProcessorType(): ?string
    {
        return $this->cardProcessorType;
    }

    /**
     * Sets Card Processor Type.
     * The processor type for the prepaid card
     *
     * @maps cardProcessorType
     * @factory \PayQuickerSDKLib\Models\CardProcessors::checkValue
     */
    public function setCardProcessorType(?string $cardProcessorType): void
    {
        $this->cardProcessorType = $cardProcessorType;
    }

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
     * Returns Token.
     * [Token](#/rest/models/structures/token) representing the resource
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * [Token](#/rest/models/structures/token) representing the resource
     *
     * @maps token
     */
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }

    /**
     * Returns Url.
     * Full path of the URI to perform the request action against a prepaid card that replaces the need to
     * build the URL with query params.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * Full path of the URI to perform the request action against a prepaid card that replaces the need to
     * build the URL with query params.
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
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
     * Converts the PrepaidCardPinTokenResult object to a human-readable string representation.
     *
     * @return string The string representation of the PrepaidCardPinTokenResult object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PrepaidCardPinTokenResult',
            [
                'cardProcessorType' => $this->cardProcessorType,
                'cardPinToken' => $this->cardPinToken,
                'token' => $this->token,
                'url' => $this->url,
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
        if (isset($this->cardProcessorType)) {
            $json['cardProcessorType'] = CardProcessors::checkValue($this->cardProcessorType);
        }
        if (isset($this->cardPinToken)) {
            $json['cardPinToken']      = $this->cardPinToken;
        }
        if (isset($this->token)) {
            $json['token']             = $this->token;
        }
        if (isset($this->url)) {
            $json['url']               = $this->url;
        }
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
