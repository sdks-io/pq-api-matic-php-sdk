<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\ElectronicWalletRequiredFields;
use PayQuickerSDKLib\Models\ElectronicWalletRequirementFormat;
use PayQuickerSDKLib\Models\ElectronicWalletRequirementValidator;
use PayQuickerSDKLib\Models\Translation;

/**
 * Builder for model ElectronicWalletRequiredFields
 *
 * @see ElectronicWalletRequiredFields
 */
class ElectronicWalletRequiredFieldsBuilder
{
    /**
     * @var ElectronicWalletRequiredFields
     */
    private $instance;

    private function __construct(ElectronicWalletRequiredFields $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Electronic Wallet Required Fields Builder object.
     */
    public static function init(): self
    {
        return new self(new ElectronicWalletRequiredFields());
    }

    /**
     * Sets format field.
     *
     * @param ElectronicWalletRequirementFormat|null $value
     */
    public function format(?ElectronicWalletRequirementFormat $value): self
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
     * @param ElectronicWalletRequirementValidator[]|null $value
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
     * Initializes a new Electronic Wallet Required Fields object.
     */
    public function build(): ElectronicWalletRequiredFields
    {
        return CoreHelper::clone($this->instance);
    }
}
