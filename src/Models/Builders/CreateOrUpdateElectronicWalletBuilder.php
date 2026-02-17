<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\CreateOrUpdateElectronicWallet;
use PayQuickerSDKLib\Models\ElectronicWalletField;

/**
 * Builder for model CreateOrUpdateElectronicWallet
 *
 * @see CreateOrUpdateElectronicWallet
 */
class CreateOrUpdateElectronicWalletBuilder
{
    /**
     * @var CreateOrUpdateElectronicWallet
     */
    private $instance;

    private function __construct(CreateOrUpdateElectronicWallet $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Or Update Electronic Wallet Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateOrUpdateElectronicWallet());
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
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
     * Sets fields field.
     *
     * @param ElectronicWalletField[]|null $value
     */
    public function fields(?array $value): self
    {
        $this->instance->setFields($value);
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
     * Initializes a new Create Or Update Electronic Wallet object.
     */
    public function build(): CreateOrUpdateElectronicWallet
    {
        return CoreHelper::clone($this->instance);
    }
}
