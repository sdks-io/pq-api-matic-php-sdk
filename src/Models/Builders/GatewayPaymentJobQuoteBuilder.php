<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\GatewayPaymentJobQuote;

/**
 * Builder for model GatewayPaymentJobQuote
 *
 * @see GatewayPaymentJobQuote
 */
class GatewayPaymentJobQuoteBuilder
{
    /**
     * @var GatewayPaymentJobQuote
     */
    private $instance;

    private function __construct(GatewayPaymentJobQuote $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Gateway Payment Job Quote Builder object.
     */
    public static function init(): self
    {
        return new self(new GatewayPaymentJobQuote());
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
     * Sets destination Token field.
     *
     * @param string|null $value
     */
    public function destinationToken(?string $value): self
    {
        $this->instance->setDestinationToken($value);
        return $this;
    }

    /**
     * Sets note field.
     *
     * @param string|null $value
     */
    public function note(?string $value): self
    {
        $this->instance->setNote($value);
        return $this;
    }

    /**
     * Sets memo field.
     *
     * @param string|null $value
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets purpose field.
     *
     * @param string|null $value
     */
    public function purpose(?string $value): self
    {
        $this->instance->setPurpose($value);
        return $this;
    }

    /**
     * Sets client Payment Id field.
     *
     * @param string|null $value
     */
    public function clientPaymentId(?string $value): self
    {
        $this->instance->setClientPaymentId($value);
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
     * Initializes a new Gateway Payment Job Quote object.
     */
    public function build(): GatewayPaymentJobQuote
    {
        return CoreHelper::clone($this->instance);
    }
}
