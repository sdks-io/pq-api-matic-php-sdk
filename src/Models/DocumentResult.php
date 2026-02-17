<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models;

use PayQuickerSDKLib\ApiHelper;
use PayQuickerSDKLib\Utils\DateTimeHelper;
use stdClass;

class DocumentResult implements \JsonSerializable
{
    /**
     * @var \DateTime
     */
    private $createDate;

    /**
     * @var DocumentDetails[]|null
     */
    private $fields;

    /**
     * @var string|null
     */
    private $filename;

    /**
     * @var string|null
     */
    private $mimeType;

    /**
     * @var string
     */
    private $token;

    /**
     * @var HateoasSelfRef[]
     */
    private $links;

    /**
     * @var MetadataItems|null
     */
    private $meta;

    /**
     * @param \DateTime $createDate
     * @param string $token
     * @param HateoasSelfRef[] $links
     */
    public function __construct(\DateTime $createDate, string $token, array $links)
    {
        $this->createDate = $createDate;
        $this->token = $token;
        $this->links = $links;
    }

    /**
     * Returns Create Date.
     * Time object was [created](#/rest/models/structures/created-on)
     */
    public function getCreateDate(): \DateTime
    {
        return $this->createDate;
    }

    /**
     * Sets Create Date.
     * Time object was [created](#/rest/models/structures/created-on)
     *
     * @required
     * @maps createDate
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreateDate(\DateTime $createDate): void
    {
        $this->createDate = $createDate;
    }

    /**
     * Returns Fields.
     *
     * @return DocumentDetails[]|null
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
     * @param DocumentDetails[]|null $fields
     */
    public function setFields(?array $fields): void
    {
        $this->fields = $fields;
    }

    /**
     * Returns Filename.
     * The name given to a computer file in order to distinguish it from other files
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * Sets Filename.
     * The name given to a computer file in order to distinguish it from other files
     *
     * @maps filename
     */
    public function setFilename(?string $filename): void
    {
        $this->filename = $filename;
    }

    /**
     * Returns Mime Type.
     * A label used to identify a type of data.  Acts like a file extension on the internet.
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    /**
     * Sets Mime Type.
     * A label used to identify a type of data.  Acts like a file extension on the internet.
     *
     * @maps mimeType
     */
    public function setMimeType(?string $mimeType): void
    {
        $this->mimeType = $mimeType;
    }

    /**
     * Returns Token.
     * [Token](#/rest/models/structures/token) representing the document
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * [Token](#/rest/models/structures/token) representing the document
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
     * @return HateoasSelfRef[]
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * Sets Links.
     *
     * @required
     * @maps links
     *
     * @param HateoasSelfRef[] $links
     */
    public function setLinks(array $links): void
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
     * Converts the DocumentResult object to a human-readable string representation.
     *
     * @return string The string representation of the DocumentResult object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'DocumentResult',
            [
                'createDate' => $this->createDate,
                'fields' => $this->fields,
                'filename' => $this->filename,
                'mimeType' => $this->mimeType,
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
        $json['createDate']   = DateTimeHelper::toRfc3339DateTime($this->createDate);
        if (isset($this->fields)) {
            $json['fields']   = $this->fields;
        }
        if (isset($this->filename)) {
            $json['filename'] = $this->filename;
        }
        if (isset($this->mimeType)) {
            $json['mimeType'] = $this->mimeType;
        }
        $json['token']        = $this->token;
        $json['links']        = $this->links;
        if (isset($this->meta)) {
            $json['meta']     = $this->meta;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
