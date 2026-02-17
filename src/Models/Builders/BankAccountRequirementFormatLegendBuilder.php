<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\BankAccountRequirementFormatLegend;
use PayQuickerSDKLib\Models\Translation;

/**
 * Builder for model BankAccountRequirementFormatLegend
 *
 * @see BankAccountRequirementFormatLegend
 */
class BankAccountRequirementFormatLegendBuilder
{
    /**
     * @var BankAccountRequirementFormatLegend
     */
    private $instance;

    private function __construct(BankAccountRequirementFormatLegend $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bank Account Requirement Format Legend Builder object.
     */
    public static function init(): self
    {
        return new self(new BankAccountRequirementFormatLegend());
    }

    /**
     * Sets key field.
     *
     * @param string|null $value
     */
    public function key(?string $value): self
    {
        $this->instance->setKey($value);
        return $this;
    }

    /**
     * Sets descriptions field.
     *
     * @param Translation[]|null $value
     */
    public function descriptions(?array $value): self
    {
        $this->instance->setDescriptions($value);
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
     * Initializes a new Bank Account Requirement Format Legend object.
     */
    public function build(): BankAccountRequirementFormatLegend
    {
        return CoreHelper::clone($this->instance);
    }
}
