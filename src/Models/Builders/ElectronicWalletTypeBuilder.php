<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\ElectronicWalletType;

/**
 * Builder for model ElectronicWalletType
 *
 * @see ElectronicWalletType
 */
class ElectronicWalletTypeBuilder
{
    /**
     * @var ElectronicWalletType
     */
    private $instance;

    private function __construct(ElectronicWalletType $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Electronic Wallet Type Builder object.
     *
     * @param string $type
     * @param string $electronicWalletCountry
     * @param string $electronicWalletCurrency
     */
    public static function init(string $type, string $electronicWalletCountry, string $electronicWalletCurrency): self
    {
        return new self(new ElectronicWalletType($type, $electronicWalletCountry, $electronicWalletCurrency));
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
     * Initializes a new Electronic Wallet Type object.
     */
    public function build(): ElectronicWalletType
    {
        return CoreHelper::clone($this->instance);
    }
}
