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
 * 1...N required [fields](#/rest/models/structures/key-value-pair-electronic-wallet-field-types-
 * string) as determined by call to get requirements
 */
class ElectronicWalletField implements \JsonSerializable
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $value;

    /**
     * @param string $key
     * @param string $value
     */
    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * Returns Key.
     * Classifies electronic wallet [field types](#/rest/models/structures/electronic-wallet-fields)
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Sets Key.
     * Classifies electronic wallet [field types](#/rest/models/structures/electronic-wallet-fields)
     *
     * @required
     * @maps key
     * @factory \PayQuickerSDKLib\Models\ElectronicWalletFields::checkValue
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    /**
     * Returns Value.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Sets Value.
     *
     * @required
     * @maps value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * Converts the ElectronicWalletField object to a human-readable string representation.
     *
     * @return string The string representation of the ElectronicWalletField object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ElectronicWalletField',
            ['key' => $this->key, 'value' => $this->value, 'additionalProperties' => $this->additionalProperties]
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
        $json['key']   = ElectronicWalletFields::checkValue($this->key);
        $json['value'] = $this->value;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
