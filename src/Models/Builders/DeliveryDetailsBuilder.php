<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\DeliveryDetails;

/**
 * Builder for model DeliveryDetails
 *
 * @see DeliveryDetails
 */
class DeliveryDetailsBuilder
{
    /**
     * @var DeliveryDetails
     */
    private $instance;

    private function __construct(DeliveryDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Delivery Details Builder object.
     */
    public static function init(): self
    {
        return new self(new DeliveryDetails());
    }

    /**
     * Sets minimum Delivery Minutes field.
     *
     * @param int|null $value
     */
    public function minimumDeliveryMinutes(?int $value): self
    {
        $this->instance->setMinimumDeliveryMinutes($value);
        return $this;
    }

    /**
     * Sets maximum Delivery Minutes field.
     *
     * @param int|null $value
     */
    public function maximumDeliveryMinutes(?int $value): self
    {
        $this->instance->setMaximumDeliveryMinutes($value);
        return $this;
    }

    /**
     * Sets expected Delivery field.
     *
     * @param string|null $value
     */
    public function expectedDelivery(?string $value): self
    {
        $this->instance->setExpectedDelivery($value);
        return $this;
    }

    /**
     * Sets expected Delivery Time field.
     *
     * @param \DateTime|null $value
     */
    public function expectedDeliveryTime(?\DateTime $value): self
    {
        $this->instance->setExpectedDeliveryTime($value);
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
     * Initializes a new Delivery Details object.
     */
    public function build(): DeliveryDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
