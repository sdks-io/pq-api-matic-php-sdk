<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\BankAccountRequirementFormat;
use PayQuickerSDKLib\Models\BankAccountRequirementFormatLegend;

/**
 * Builder for model BankAccountRequirementFormat
 *
 * @see BankAccountRequirementFormat
 */
class BankAccountRequirementFormatBuilder
{
    /**
     * @var BankAccountRequirementFormat
     */
    private $instance;

    private function __construct(BankAccountRequirementFormat $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bank Account Requirement Format Builder object.
     */
    public static function init(): self
    {
        return new self(new BankAccountRequirementFormat());
    }

    /**
     * Sets example field.
     *
     * @param string|null $value
     */
    public function example(?string $value): self
    {
        $this->instance->setExample($value);
        return $this;
    }

    /**
     * Sets legend field.
     *
     * @param BankAccountRequirementFormatLegend[]|null $value
     */
    public function legend(?array $value): self
    {
        $this->instance->setLegend($value);
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
     * Initializes a new Bank Account Requirement Format object.
     */
    public function build(): BankAccountRequirementFormat
    {
        return CoreHelper::clone($this->instance);
    }
}
