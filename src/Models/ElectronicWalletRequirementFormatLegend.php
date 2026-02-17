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

/**
 * Classifies the [legend format](#/rest/models/structures/electronic-wallet-requirement-format-legend)
 * of the required information for a electronic wallet
 */
class ElectronicWalletRequirementFormatLegend implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $key;

    /**
     * @var Translation[]|null
     */
    private $descriptions;

    /**
     * Returns Key.
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * Sets Key.
     *
     * @maps key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * Returns Descriptions.
     * Localized requirement description for display purposes
     *
     * @return Translation[]|null
     */
    public function getDescriptions(): ?array
    {
        return $this->descriptions;
    }

    /**
     * Sets Descriptions.
     * Localized requirement description for display purposes
     *
     * @maps descriptions
     *
     * @param Translation[]|null $descriptions
     */
    public function setDescriptions(?array $descriptions): void
    {
        $this->descriptions = $descriptions;
    }

    /**
     * Converts the ElectronicWalletRequirementFormatLegend object to a human-readable string
     * representation.
     *
     * @return string The string representation of the ElectronicWalletRequirementFormatLegend object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ElectronicWalletRequirementFormatLegend',
            [
                'key' => $this->key,
                'descriptions' => $this->descriptions,
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
        if (isset($this->key)) {
            $json['key']          = $this->key;
        }
        if (isset($this->descriptions)) {
            $json['descriptions'] = $this->descriptions;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
