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
 * Classifies the [format](#/rest/models/structures/bank-account-requirement-format) of the required
 * information for a bank account
 */
class BankAccountRequirementFormat implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $example;

    /**
     * @var BankAccountRequirementFormatLegend[]|null
     */
    private $legend;

    /**
     * Returns Example.
     * Example of a requirement generated from the validator(s)
     */
    public function getExample(): ?string
    {
        return $this->example;
    }

    /**
     * Sets Example.
     * Example of a requirement generated from the validator(s)
     *
     * @maps example
     */
    public function setExample(?string $example): void
    {
        $this->example = $example;
    }

    /**
     * Returns Legend.
     *
     * @return BankAccountRequirementFormatLegend[]|null
     */
    public function getLegend(): ?array
    {
        return $this->legend;
    }

    /**
     * Sets Legend.
     *
     * @maps legend
     *
     * @param BankAccountRequirementFormatLegend[]|null $legend
     */
    public function setLegend(?array $legend): void
    {
        $this->legend = $legend;
    }

    /**
     * Converts the BankAccountRequirementFormat object to a human-readable string representation.
     *
     * @return string The string representation of the BankAccountRequirementFormat object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BankAccountRequirementFormat',
            [
                'example' => $this->example,
                'legend' => $this->legend,
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
        if (isset($this->example)) {
            $json['example'] = $this->example;
        }
        if (isset($this->legend)) {
            $json['legend']  = $this->legend;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
