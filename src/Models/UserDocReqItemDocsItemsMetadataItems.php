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

class UserDocReqItemDocsItemsMetadataItems implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $dataType;

    /**
     * @var string|null
     */
    private $fieldType;

    /**
     * @var UserDocReqItemDocsItemsMetadataItemsNameItems[]|null
     */
    private $name;

    /**
     * Returns Data Type.
     */
    public function getDataType(): ?string
    {
        return $this->dataType;
    }

    /**
     * Sets Data Type.
     *
     * @maps dataType
     */
    public function setDataType(?string $dataType): void
    {
        $this->dataType = $dataType;
    }

    /**
     * Returns Field Type.
     */
    public function getFieldType(): ?string
    {
        return $this->fieldType;
    }

    /**
     * Sets Field Type.
     *
     * @maps fieldType
     */
    public function setFieldType(?string $fieldType): void
    {
        $this->fieldType = $fieldType;
    }

    /**
     * Returns Name.
     *
     * @return UserDocReqItemDocsItemsMetadataItemsNameItems[]|null
     */
    public function getName(): ?array
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     *
     * @param UserDocReqItemDocsItemsMetadataItemsNameItems[]|null $name
     */
    public function setName(?array $name): void
    {
        $this->name = $name;
    }

    /**
     * Converts the UserDocReqItemDocsItemsMetadataItems object to a human-readable string representation.
     *
     * @return string The string representation of the UserDocReqItemDocsItemsMetadataItems object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UserDocReqItemDocsItemsMetadataItems',
            [
                'dataType' => $this->dataType,
                'fieldType' => $this->fieldType,
                'name' => $this->name,
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
        if (isset($this->dataType)) {
            $json['dataType']  = $this->dataType;
        }
        if (isset($this->fieldType)) {
            $json['fieldType'] = $this->fieldType;
        }
        if (isset($this->name)) {
            $json['name']      = $this->name;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
