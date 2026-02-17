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

class AgreementResult implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $token;

    /**
     * @var string|null
     */
    private $contentBase64;

    /**
     * @var string|null
     */
    private $url;

    /**
     * @var string|null
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
     * Returns Content Base 64.
     * Program agreement content
     */
    public function getContentBase64(): ?string
    {
        return $this->contentBase64;
    }

    /**
     * Sets Content Base 64.
     * Program agreement content
     *
     * @maps contentBase64
     */
    public function setContentBase64(?string $contentBase64): void
    {
        $this->contentBase64 = $contentBase64;
    }

    /**
     * Returns Url.
     * Full path of the URI to the content for the program agreement
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * Full path of the URI to the content for the program agreement
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @maps type
     * @factory \PayQuickerSDKLib\Models\AgreementTypes::checkValue
     */
    public function setType(?string $type): void
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
     * Converts the AgreementResult object to a human-readable string representation.
     *
     * @return string The string representation of the AgreementResult object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'AgreementResult',
            [
                'token' => $this->token,
                'contentBase64' => $this->contentBase64,
                'url' => $this->url,
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
        if (isset($this->token)) {
            $json['token']         = $this->token;
        }
        if (isset($this->contentBase64)) {
            $json['contentBase64'] = $this->contentBase64;
        }
        if (isset($this->url)) {
            $json['url']           = $this->url;
        }
        if (isset($this->type)) {
            $json['type']          = AgreementTypes::checkValue($this->type);
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
