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

class DocumentRequirementsListResult implements \JsonSerializable
{
    /**
     * @var UserDocumentRequirementItem[]|null
     */
    private $id;

    /**
     * @var ListMetadata|null
     */
    private $meta;

    /**
     * Returns Id.
     *
     * @return UserDocumentRequirementItem[]|null
     */
    public function getId(): ?array
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     *
     * @param UserDocumentRequirementItem[]|null $id
     */
    public function setId(?array $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Meta.
     */
    public function getMeta(): ?ListMetadata
    {
        return $this->meta;
    }

    /**
     * Sets Meta.
     *
     * @maps meta
     */
    public function setMeta(?ListMetadata $meta): void
    {
        $this->meta = $meta;
    }

    /**
     * Converts the DocumentRequirementsListResult object to a human-readable string representation.
     *
     * @return string The string representation of the DocumentRequirementsListResult object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'DocumentRequirementsListResult',
            ['id' => $this->id, 'meta' => $this->meta, 'additionalProperties' => $this->additionalProperties]
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
        if (isset($this->id)) {
            $json['id']   = $this->id;
        }
        if (isset($this->meta)) {
            $json['meta'] = $this->meta;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
