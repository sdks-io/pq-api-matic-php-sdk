<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\OrderPrepaidCard;

/**
 * Builder for model OrderPrepaidCard
 *
 * @see OrderPrepaidCard
 */
class OrderPrepaidCardBuilder
{
    /**
     * @var OrderPrepaidCard
     */
    private $instance;

    private function __construct(OrderPrepaidCard $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Order Prepaid Card Builder object.
     */
    public static function init(): self
    {
        return new self(new OrderPrepaidCard());
    }

    /**
     * Sets card Package field.
     *
     * @param string|null $value
     */
    public function cardPackage(?string $value): self
    {
        $this->instance->setCardPackage($value);
        return $this;
    }

    /**
     * Sets program Token field.
     *
     * @param string|null $value
     */
    public function programToken(?string $value): self
    {
        $this->instance->setProgramToken($value);
        return $this;
    }

    /**
     * Sets card Reference Number field.
     *
     * @param string|null $value
     */
    public function cardReferenceNumber(?string $value): self
    {
        $this->instance->setCardReferenceNumber($value);
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
     * Initializes a new Order Prepaid Card object.
     */
    public function build(): OrderPrepaidCard
    {
        return CoreHelper::clone($this->instance);
    }
}
