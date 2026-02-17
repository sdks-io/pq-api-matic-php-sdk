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
 * Classifies the required [electronic wallet field](#/rest/models/structures/electronic-wallet-
 * required-fields) objects
 */
class ElectronicWalletRequiredFields implements \JsonSerializable
{
    /**
     * @var ElectronicWalletRequirementFormat|null
     */
    private $format;

    /**
     * @var string|null
     */
    private $requirement;

    /**
     * @var Translation[]|null
     */
    private $description;

    /**
     * @var ElectronicWalletRequirementValidator[]|null
     */
    private $validators;

    /**
     * Returns Format.
     * Classifies the [format](#/rest/models/structures/electronic-wallet-requirement-format) of the
     * required information for an electronic wallet
     */
    public function getFormat(): ?ElectronicWalletRequirementFormat
    {
        return $this->format;
    }

    /**
     * Sets Format.
     * Classifies the [format](#/rest/models/structures/electronic-wallet-requirement-format) of the
     * required information for an electronic wallet
     *
     * @maps format
     */
    public function setFormat(?ElectronicWalletRequirementFormat $format): void
    {
        $this->format = $format;
    }

    /**
     * Returns Requirement.
     * Classifies electronic wallet [field types](#/rest/models/structures/electronic-wallet-fields)
     */
    public function getRequirement(): ?string
    {
        return $this->requirement;
    }

    /**
     * Sets Requirement.
     * Classifies electronic wallet [field types](#/rest/models/structures/electronic-wallet-fields)
     *
     * @maps requirement
     * @factory \PayQuickerSDKLib\Models\ElectronicWalletFields::checkValue
     */
    public function setRequirement(?string $requirement): void
    {
        $this->requirement = $requirement;
    }

    /**
     * Returns Description.
     * Localized requirement description for display purposes
     *
     * @return Translation[]|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Localized requirement description for display purposes
     *
     * @maps description
     *
     * @param Translation[]|null $description
     */
    public function setDescription(?array $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Validators.
     *
     * @return ElectronicWalletRequirementValidator[]|null
     */
    public function getValidators(): ?array
    {
        return $this->validators;
    }

    /**
     * Sets Validators.
     *
     * @maps validators
     *
     * @param ElectronicWalletRequirementValidator[]|null $validators
     */
    public function setValidators(?array $validators): void
    {
        $this->validators = $validators;
    }

    /**
     * Converts the ElectronicWalletRequiredFields object to a human-readable string representation.
     *
     * @return string The string representation of the ElectronicWalletRequiredFields object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ElectronicWalletRequiredFields',
            [
                'format' => $this->format,
                'requirement' => $this->requirement,
                'description' => $this->description,
                'validators' => $this->validators,
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
        if (isset($this->format)) {
            $json['format']      = $this->format;
        }
        if (isset($this->requirement)) {
            $json['requirement'] = ElectronicWalletFields::checkValue($this->requirement);
        }
        if (isset($this->description)) {
            $json['description'] = $this->description;
        }
        if (isset($this->validators)) {
            $json['validators']  = $this->validators;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
