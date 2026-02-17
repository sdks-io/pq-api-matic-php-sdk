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
use PayQuickerSDKLib\Models\BankAccountRequirement;
use PayQuickerSDKLib\Models\FeeConfiguration;

/**
 * Builder for model BankAccountRequirement
 *
 * @see BankAccountRequirement
 */
class BankAccountRequirementBuilder
{
    /**
     * @var BankAccountRequirement
     */
    private $instance;

    private function __construct(BankAccountRequirement $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bank Account Requirement Builder object.
     */
    public static function init(): self
    {
        return new self(new BankAccountRequirement());
    }

    /**
     * Sets bank Country field.
     *
     * @param string|null $value
     */
    public function bankCountry(?string $value): self
    {
        $this->instance->setBankCountry($value);
        return $this;
    }

    /**
     * Sets bank Currency field.
     *
     * @param string|null $value
     */
    public function bankCurrency(?string $value): self
    {
        $this->instance->setBankCurrency($value);
        return $this;
    }

    /**
     * Sets fee field.
     *
     * @param FeeConfiguration|null $value
     */
    public function fee(?FeeConfiguration $value): self
    {
        $this->instance->setFee($value);
        return $this;
    }

    /**
     * Sets source Country field.
     *
     * @param string|null $value
     */
    public function sourceCountry(?string $value): self
    {
        $this->instance->setSourceCountry($value);
        return $this;
    }

    /**
     * Sets source Currency field.
     *
     * @param string|null $value
     */
    public function sourceCurrency(?string $value): self
    {
        $this->instance->setSourceCurrency($value);
        return $this;
    }

    /**
     * Sets requirements field.
     *
     * @param BankAccountRequiredFields[]|null $value
     */
    public function requirements(?array $value): self
    {
        $this->instance->setRequirements($value);
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
     * Initializes a new Bank Account Requirement object.
     */
    public function build(): BankAccountRequirement
    {
        return CoreHelper::clone($this->instance);
    }
}
