<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\ElectronicWalletField;
use PayQuickerSDKLib\Models\ElectronicWalletObject;
use PayQuickerSDKLib\Models\HateoasSelfRef;

/**
 * Builder for model ElectronicWalletObject
 *
 * @see ElectronicWalletObject
 */
class ElectronicWalletObjectBuilder
{
    /**
     * @var ElectronicWalletObject
     */
    private $instance;

    private function __construct(ElectronicWalletObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Electronic Wallet Object Builder object.
     */
    public static function init(): self
    {
        return new self(new ElectronicWalletObject());
    }

    /**
     * Sets token field.
     *
     * @param string|null $value
     */
    public function token(?string $value): self
    {
        $this->instance->setToken($value);
        return $this;
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
     * Sets created On field.
     *
     * @param \DateTime|null $value
     */
    public function createdOn(?\DateTime $value): self
    {
        $this->instance->setCreatedOn($value);
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
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets links field.
     *
     * @param HateoasSelfRef[]|null $value
     */
    public function links(?array $value): self
    {
        $this->instance->setLinks($value);
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
     * Initializes a new Electronic Wallet Object object.
     */
    public function build(): ElectronicWalletObject
    {
        return CoreHelper::clone($this->instance);
    }
}
