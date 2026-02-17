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
use PayQuickerSDKLib\Models\ElectronicWalletRequirement;
use PayQuickerSDKLib\Models\FeeConfiguration;

/**
 * Builder for model ElectronicWalletRequirement
 *
 * @see ElectronicWalletRequirement
 */
class ElectronicWalletRequirementBuilder
{
    /**
     * @var ElectronicWalletRequirement
     */
    private $instance;

    private function __construct(ElectronicWalletRequirement $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Electronic Wallet Requirement Builder object.
     */
    public static function init(): self
    {
        return new self(new ElectronicWalletRequirement());
    }

    /**
     * Sets electronic Wallet Type field.
     *
     * @param string|null $value
     */
    public function electronicWalletType(?string $value): self
    {
        $this->instance->setElectronicWalletType($value);
        return $this;
    }

    /**
     * Sets electronic Wallet Country field.
     *
     * @param string|null $value
     */
    public function electronicWalletCountry(?string $value): self
    {
        $this->instance->setElectronicWalletCountry($value);
        return $this;
    }

    /**
     * Sets electronic Wallet Currency field.
     *
     * @param string|null $value
     */
    public function electronicWalletCurrency(?string $value): self
    {
        $this->instance->setElectronicWalletCurrency($value);
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
     * @param ElectronicWalletRequiredFields[]|null $value
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
     * Initializes a new Electronic Wallet Requirement object.
     */
    public function build(): ElectronicWalletRequirement
    {
        return CoreHelper::clone($this->instance);
    }
}
