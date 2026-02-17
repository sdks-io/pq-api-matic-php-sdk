<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\FeeDistribution;
use PayQuickerSDKLib\Models\ReceiptDescriptions;

/**
 * Builder for model FeeDistribution
 *
 * @see FeeDistribution
 */
class FeeDistributionBuilder
{
    /**
     * @var FeeDistribution
     */
    private $instance;

    private function __construct(FeeDistribution $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Fee Distribution Builder object.
     */
    public static function init(): self
    {
        return new self(new FeeDistribution());
    }

    /**
     * Sets amount field.
     *
     * @param float|null $value
     */
    public function amount(?float $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets description field.
     *
     * @param ReceiptDescriptions[]|null $value
     */
    public function description(?array $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets formatted Amount field.
     *
     * @param string|null $value
     */
    public function formattedAmount(?string $value): self
    {
        $this->instance->setFormattedAmount($value);
        return $this;
    }

    /**
     * Sets percentage field.
     *
     * @param float|null $value
     */
    public function percentage(?float $value): self
    {
        $this->instance->setPercentage($value);
        return $this;
    }

    /**
     * Sets responsibility field.
     *
     * @param string|null $value
     */
    public function responsibility(?string $value): self
    {
        $this->instance->setResponsibility($value);
        return $this;
    }

    /**
     * Sets responsibility Source field.
     *
     * @param string|null $value
     */
    public function responsibilitySource(?string $value): self
    {
        $this->instance->setResponsibilitySource($value);
        return $this;
    }

    /**
     * Sets source Token field.
     *
     * @param string|null $value
     */
    public function sourceToken(?string $value): self
    {
        $this->instance->setSourceToken($value);
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
     * Initializes a new Fee Distribution object.
     */
    public function build(): FeeDistribution
    {
        return CoreHelper::clone($this->instance);
    }
}
