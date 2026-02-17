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

class UserDocReqItemDocsItemsSupplementalDocsItems implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $exampleImage;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $type;

    /**
     * Returns Example Image.
     * Full path of the URI used for this object
     */
    public function getExampleImage(): ?string
    {
        return $this->exampleImage;
    }

    /**
     * Sets Example Image.
     * Full path of the URI used for this object
     *
     * @maps exampleImage
     */
    public function setExampleImage(?string $exampleImage): void
    {
        $this->exampleImage = $exampleImage;
    }

    /**
     * Returns Status.
     * Status Type of a document
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status Type of a document
     *
     * @maps status
     * @factory \PayQuickerSDKLib\Models\DocumentStatusTypes::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Type.
     * Indicates the enums for KYC.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Indicates the enums for KYC.
     *
     * @maps type
     * @factory \PayQuickerSDKLib\Models\DocumentTypes::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Converts the UserDocReqItemDocsItemsSupplementalDocsItems object to a human-readable string
     * representation.
     *
     * @return string The string representation of the UserDocReqItemDocsItemsSupplementalDocsItems object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UserDocReqItemDocsItemsSupplementalDocsItems',
            [
                'exampleImage' => $this->exampleImage,
                'status' => $this->status,
                'type' => $this->type,
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
        if (isset($this->exampleImage)) {
            $json['exampleImage'] = $this->exampleImage;
        }
        if (isset($this->status)) {
            $json['status']       = DocumentStatusTypes::checkValue($this->status);
        }
        if (isset($this->type)) {
            $json['type']         = DocumentTypes::checkValue($this->type);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
