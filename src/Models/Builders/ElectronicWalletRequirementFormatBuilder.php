<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\ElectronicWalletRequirementFormat;
use PayQuickerSDKLib\Models\ElectronicWalletRequirementFormatLegend;

/**
 * Builder for model ElectronicWalletRequirementFormat
 *
 * @see ElectronicWalletRequirementFormat
 */
class ElectronicWalletRequirementFormatBuilder
{
    /**
     * @var ElectronicWalletRequirementFormat
     */
    private $instance;

    private function __construct(ElectronicWalletRequirementFormat $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Electronic Wallet Requirement Format Builder object.
     */
    public static function init(): self
    {
        return new self(new ElectronicWalletRequirementFormat());
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
     * @param ElectronicWalletRequirementFormatLegend[]|null $value
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
     * Initializes a new Electronic Wallet Requirement Format object.
     */
    public function build(): ElectronicWalletRequirementFormat
    {
        return CoreHelper::clone($this->instance);
    }
}
