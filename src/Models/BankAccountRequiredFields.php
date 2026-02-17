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
 * Classifies the required [bank account field](#/rest/models/structures/bank-account-required-fields)
 * objects
 */
class BankAccountRequiredFields implements \JsonSerializable
{
    /**
     * @var BankAccountRequirementFormat|null
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
     * @var BankAccountRequirementValidator[]|null
     */
    private $validators;

    /**
     * Returns Format.
     * Classifies the [format](#/rest/models/structures/bank-account-requirement-format) of the required
     * information for a bank account
     */
    public function getFormat(): ?BankAccountRequirementFormat
    {
        return $this->format;
    }

    /**
     * Sets Format.
     * Classifies the [format](#/rest/models/structures/bank-account-requirement-format) of the required
     * information for a bank account
     *
     * @maps format
     */
    public function setFormat(?BankAccountRequirementFormat $format): void
    {
        $this->format = $format;
    }

    /**
     * Returns Requirement.
     * Classifies bank account [field types](#/rest/models/structures/bank-account-fields)
     */
    public function getRequirement(): ?string
    {
        return $this->requirement;
    }

    /**
     * Sets Requirement.
     * Classifies bank account [field types](#/rest/models/structures/bank-account-fields)
     *
     * @maps requirement
     * @factory \PayQuickerSDKLib\Models\BankAccountFields::checkValue
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
     * @return BankAccountRequirementValidator[]|null
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
     * @param BankAccountRequirementValidator[]|null $validators
     */
    public function setValidators(?array $validators): void
    {
        $this->validators = $validators;
    }

    /**
     * Converts the BankAccountRequiredFields object to a human-readable string representation.
     *
     * @return string The string representation of the BankAccountRequiredFields object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BankAccountRequiredFields',
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
            $json['requirement'] = BankAccountFields::checkValue($this->requirement);
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
