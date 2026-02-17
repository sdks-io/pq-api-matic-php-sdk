<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\FeeConfiguration;
use PayQuickerSDKLib\Models\FeeDistribution;

/**
 * Builder for model FeeConfiguration
 *
 * @see FeeConfiguration
 */
class FeeConfigurationBuilder
{
    /**
     * @var FeeConfiguration
     */
    private $instance;

    private function __construct(FeeConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Fee Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new FeeConfiguration());
    }

    /**
     * Sets category field.
     *
     * @param string|null $value
     */
    public function category(?string $value): self
    {
        $this->instance->setCategory($value);
        return $this;
    }

    /**
     * Sets distribution field.
     *
     * @param FeeDistribution[]|null $value
     */
    public function distribution(?array $value): self
    {
        $this->instance->setDistribution($value);
        return $this;
    }

    /**
     * Sets source field.
     *
     * @param string|null $value
     */
    public function source(?string $value): self
    {
        $this->instance->setSource($value);
        return $this;
    }

    /**
     * Sets total Amount field.
     *
     * @param float|null $value
     */
    public function totalAmount(?float $value): self
    {
        $this->instance->setTotalAmount($value);
        return $this;
    }

    /**
     * Sets transaction Amount field.
     *
     * @param float|null $value
     */
    public function transactionAmount(?float $value): self
    {
        $this->instance->setTransactionAmount($value);
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
     * Sets value Amount field.
     *
     * @param string|null $value
     */
    public function valueAmount(?string $value): self
    {
        $this->instance->setValueAmount($value);
        return $this;
    }

    /**
     * Sets value Type field.
     *
     * @param string|null $value
     */
    public function valueType(?string $value): self
    {
        $this->instance->setValueType($value);
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
     * Initializes a new Fee Configuration object.
     */
    public function build(): FeeConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
