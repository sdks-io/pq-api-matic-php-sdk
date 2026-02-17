<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\BankAccountAddress;

/**
 * Builder for model BankAccountAddress
 *
 * @see BankAccountAddress
 */
class BankAccountAddressBuilder
{
    /**
     * @var BankAccountAddress
     */
    private $instance;

    private function __construct(BankAccountAddress $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bank Account Address Builder object.
     *
     * @param string $address1
     * @param string $city
     * @param string $postalCode
     * @param string $country
     */
    public static function init(string $address1, string $city, string $postalCode, string $country): self
    {
        return new self(new BankAccountAddress($address1, $city, $postalCode, $country));
    }

    /**
     * Sets address 2 field.
     *
     * @param string|null $value
     */
    public function address2(?string $value): self
    {
        $this->instance->setAddress2($value);
        return $this;
    }

    /**
     * Sets address 3 field.
     *
     * @param string|null $value
     */
    public function address3(?string $value): self
    {
        $this->instance->setAddress3($value);
        return $this;
    }

    /**
     * Sets region field.
     *
     * @param string|null $value
     */
    public function region(?string $value): self
    {
        $this->instance->setRegion($value);
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
     * Initializes a new Bank Account Address object.
     */
    public function build(): BankAccountAddress
    {
        return CoreHelper::clone($this->instance);
    }
}
