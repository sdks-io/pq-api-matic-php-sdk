<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\BankAccountRequiredFields;
use PayQuickerSDKLib\Models\BankAccountRequirementFormat;
use PayQuickerSDKLib\Models\BankAccountRequirementValidator;
use PayQuickerSDKLib\Models\Translation;

/**
 * Builder for model BankAccountRequiredFields
 *
 * @see BankAccountRequiredFields
 */
class BankAccountRequiredFieldsBuilder
{
    /**
     * @var BankAccountRequiredFields
     */
    private $instance;

    private function __construct(BankAccountRequiredFields $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bank Account Required Fields Builder object.
     */
    public static function init(): self
    {
        return new self(new BankAccountRequiredFields());
    }

    /**
     * Sets format field.
     *
     * @param BankAccountRequirementFormat|null $value
     */
    public function format(?BankAccountRequirementFormat $value): self
    {
        $this->instance->setFormat($value);
        return $this;
    }

    /**
     * Sets requirement field.
     *
     * @param string|null $value
     */
    public function requirement(?string $value): self
    {
        $this->instance->setRequirement($value);
        return $this;
    }

    /**
     * Sets description field.
     *
     * @param Translation[]|null $value
     */
    public function description(?array $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets validators field.
     *
     * @param BankAccountRequirementValidator[]|null $value
     */
    public function validators(?array $value): self
    {
        $this->instance->setValidators($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Bank Account Required Fields object.
     */
    public function build(): BankAccountRequiredFields
    {
        return CoreHelper::clone($this->instance);
    }
}
