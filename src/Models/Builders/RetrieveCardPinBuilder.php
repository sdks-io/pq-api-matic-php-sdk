<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\RetrieveCardPin;

/**
 * Builder for model RetrieveCardPin
 *
 * @see RetrieveCardPin
 */
class RetrieveCardPinBuilder
{
    /**
     * @var RetrieveCardPin
     */
    private $instance;

    private function __construct(RetrieveCardPin $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Retrieve Card Pin Builder object.
     */
    public static function init(): self
    {
        return new self(new RetrieveCardPin());
    }

    /**
     * Sets card Pin Token field.
     *
     * @param string|null $value
     */
    public function cardPinToken(?string $value): self
    {
        $this->instance->setCardPinToken($value);
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
     * Initializes a new Retrieve Card Pin object.
     */
    public function build(): RetrieveCardPin
    {
        return CoreHelper::clone($this->instance);
    }
}
