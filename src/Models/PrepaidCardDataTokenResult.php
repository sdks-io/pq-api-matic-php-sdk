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

class PrepaidCardDataTokenResult implements \JsonSerializable
{
    /**
     * @var string
     */
    private $cardProcessorType;

    /**
     * @var string|null
     */
    private $resourceValue;

    /**
     * @var string|null
     */
    private $token;

    /**
     * @var string
     */
    private $tokenPurposeType;

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
     * @param string $cardProcessorType
     * @param string $tokenPurposeType
     */
    public function __construct(string $cardProcessorType, string $tokenPurposeType)
    {
        $this->cardProcessorType = $cardProcessorType;
        $this->tokenPurposeType = $tokenPurposeType;
    }

    /**
     * Returns Card Processor Type.
     * The processor type for the prepaid card
     */
    public function getCardProcessorType(): string
    {
        return $this->cardProcessorType;
    }

    /**
     * Sets Card Processor Type.
     * The processor type for the prepaid card
     *
     * @required
     * @maps cardProcessorType
     * @factory \PayQuickerSDKLib\Models\CardProcessors::checkValue
     */
    public function setCardProcessorType(string $cardProcessorType): void
    {
        $this->cardProcessorType = $cardProcessorType;
    }

    /**
     * Returns Resource Value.
     * Value of the target resource
     */
    public function getResourceValue(): ?string
    {
        return $this->resourceValue;
    }

    /**
     * Sets Resource Value.
     * Value of the target resource
     *
     * @maps resourceValue
     */
    public function setResourceValue(?string $resourceValue): void
    {
        $this->resourceValue = $resourceValue;
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
     * Returns Token Purpose Type.
     * Purpose of the token
     */
    public function getTokenPurposeType(): string
    {
        return $this->tokenPurposeType;
    }

    /**
     * Sets Token Purpose Type.
     * Purpose of the token
     *
     * @required
     * @maps tokenPurposeType
     * @factory \PayQuickerSDKLib\Models\TokenPurposes::checkValue
     */
    public function setTokenPurposeType(string $tokenPurposeType): void
    {
        $this->tokenPurposeType = $tokenPurposeType;
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
     * Converts the PrepaidCardDataTokenResult object to a human-readable string representation.
     *
     * @return string The string representation of the PrepaidCardDataTokenResult object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PrepaidCardDataTokenResult',
            [
                'cardProcessorType' => $this->cardProcessorType,
                'resourceValue' => $this->resourceValue,
                'token' => $this->token,
                'tokenPurposeType' => $this->tokenPurposeType,
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
        $json['cardProcessorType'] = CardProcessors::checkValue($this->cardProcessorType);
        if (isset($this->resourceValue)) {
            $json['resourceValue'] = $this->resourceValue;
        }
        if (isset($this->token)) {
            $json['token']         = $this->token;
        }
        $json['tokenPurposeType']  = TokenPurposes::checkValue($this->tokenPurposeType);
        if (isset($this->url)) {
            $json['url']           = $this->url;
        }
        if (isset($this->links)) {
            $json['links']         = $this->links;
        }
        if (isset($this->meta)) {
            $json['meta']          = $this->meta;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
