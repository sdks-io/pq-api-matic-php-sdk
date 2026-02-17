<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\FxRate;

/**
 * Builder for model FxRate
 *
 * @see FxRate
 */
class FxRateBuilder
{
    /**
     * @var FxRate
     */
    private $instance;

    private function __construct(FxRate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Fx Rate Builder object.
     */
    public static function init(): self
    {
        return new self(new FxRate());
    }

    /**
     * Sets destination Amount field.
     *
     * @param float|null $value
     */
    public function destinationAmount(?float $value): self
    {
        $this->instance->setDestinationAmount($value);
        return $this;
    }

    /**
     * Sets destination Currency field.
     *
     * @param string|null $value
     */
    public function destinationCurrency(?string $value): self
    {
        $this->instance->setDestinationCurrency($value);
        return $this;
    }

    /**
     * Sets destination Formatted Amount field.
     *
     * @param string|null $value
     */
    public function destinationFormattedAmount(?string $value): self
    {
        $this->instance->setDestinationFormattedAmount($value);
        return $this;
    }

    /**
     * Sets rate field.
     *
     * @param float|null $value
     */
    public function rate(?float $value): self
    {
        $this->instance->setRate($value);
        return $this;
    }

    /**
     * Sets source Amount field.
     *
     * @param float|null $value
     */
    public function sourceAmount(?float $value): self
    {
        $this->instance->setSourceAmount($value);
        return $this;
    }

    /**
     * Sets source Currency field.
     *
     * @param string|null $value
     */
    public function sourceCurrency(?string $value): self
    {
        $this->instance->setSourceCurrency($value);
        return $this;
    }

    /**
     * Sets source Formatted Amount field.
     *
     * @param string|null $value
     */
    public function sourceFormattedAmount(?string $value): self
    {
        $this->instance->setSourceFormattedAmount($value);
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
     * Initializes a new Fx Rate object.
     */
    public function build(): FxRate
    {
        return CoreHelper::clone($this->instance);
    }
}
