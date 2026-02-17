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

class MetadataItems implements \JsonSerializable
{
    /**
     * @var string
     */
    private $timezone;

    /**
     * @var string
     */
    private $requestRef;

    /**
     * @param string $timezone
     * @param string $requestRef
     */
    public function __construct(string $timezone, string $requestRef)
    {
        $this->timezone = $timezone;
        $this->requestRef = $requestRef;
    }

    /**
     * Returns Timezone.
     * Timezone of the datetime objects in the response
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }

    /**
     * Sets Timezone.
     * Timezone of the datetime objects in the response
     *
     * @required
     * @maps timezone
     */
    public function setTimezone(string $timezone): void
    {
        $this->timezone = $timezone;
    }

    /**
     * Returns Request Ref.
     */
    public function getRequestRef(): string
    {
        return $this->requestRef;
    }

    /**
     * Sets Request Ref.
     *
     * @required
     * @maps requestRef
     */
    public function setRequestRef(string $requestRef): void
    {
        $this->requestRef = $requestRef;
    }

    /**
     * Converts the MetadataItems object to a human-readable string representation.
     *
     * @return string The string representation of the MetadataItems object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MetadataItems',
            [
                'timezone' => $this->timezone,
                'requestRef' => $this->requestRef,
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
        $json['timezone']   = $this->timezone;
        $json['requestRef'] = $this->requestRef;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
