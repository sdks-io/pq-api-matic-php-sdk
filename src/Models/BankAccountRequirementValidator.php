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
 * [Validator type](#/rest/models/structures/bank-account-requirement-validator) that for the required
 * bank account information.
 */
class BankAccountRequirementValidator implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $validatorType;

    /**
     * @var string
     */
    private $expression;

    /**
     * @param string $expression
     */
    public function __construct(string $expression)
    {
        $this->expression = $expression;
    }

    /**
     * Returns Validator Type.
     * [Validator types](#/rest/models/structures/bank-account-requirement-validator) for the required bank
     * account information.
     */
    public function getValidatorType(): ?string
    {
        return $this->validatorType;
    }

    /**
     * Sets Validator Type.
     * [Validator types](#/rest/models/structures/bank-account-requirement-validator) for the required bank
     * account information.
     *
     * @maps validatorType
     * @factory \PayQuickerSDKLib\Models\ValidatorTypes::checkValue
     */
    public function setValidatorType(?string $validatorType): void
    {
        $this->validatorType = $validatorType;
    }

    /**
     * Returns Expression.
     * Validation regular expression
     */
    public function getExpression(): string
    {
        return $this->expression;
    }

    /**
     * Sets Expression.
     * Validation regular expression
     *
     * @required
     * @maps expression
     */
    public function setExpression(string $expression): void
    {
        $this->expression = $expression;
    }

    /**
     * Converts the BankAccountRequirementValidator object to a human-readable string representation.
     *
     * @return string The string representation of the BankAccountRequirementValidator object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BankAccountRequirementValidator',
            [
                'validatorType' => $this->validatorType,
                'expression' => $this->expression,
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
        if (isset($this->validatorType)) {
            $json['validatorType'] = ValidatorTypes::checkValue($this->validatorType);
        }
        $json['expression']        = $this->expression;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
