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

/**
 * Builder for model ElectronicWalletField
 *
 * @see ElectronicWalletField
 */
class ElectronicWalletFieldBuilder
{
    /**
     * @var ElectronicWalletField
     */
    private $instance;

    private function __construct(ElectronicWalletField $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Electronic Wallet Field Builder object.
     *
     * @param string $key
     * @param string $value
     */
    public static function init(string $key, string $value): self
    {
        return new self(new ElectronicWalletField($key, $value));
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
     * Initializes a new Electronic Wallet Field object.
     */
    public function build(): ElectronicWalletField
    {
        return CoreHelper::clone($this->instance);
    }
}
