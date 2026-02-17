<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\GatewayPaymentJob;
use PayQuickerSDKLib\Models\GatewayPaymentJobQuote;

/**
 * Builder for model GatewayPaymentJob
 *
 * @see GatewayPaymentJob
 */
class GatewayPaymentJobBuilder
{
    /**
     * @var GatewayPaymentJob
     */
    private $instance;

    private function __construct(GatewayPaymentJob $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Gateway Payment Job Builder object.
     */
    public static function init(): self
    {
        return new self(new GatewayPaymentJob());
    }

    /**
     * Sets not Before field.
     *
     * @param \DateTime|null $value
     */
    public function notBefore(?\DateTime $value): self
    {
        $this->instance->setNotBefore($value);
        return $this;
    }

    /**
     * Sets not After field.
     *
     * @param \DateTime|null $value
     */
    public function notAfter(?\DateTime $value): self
    {
        $this->instance->setNotAfter($value);
        return $this;
    }

    /**
     * Sets items field.
     *
     * @param GatewayPaymentJobQuote[]|null $value
     */
    public function items(?array $value): self
    {
        $this->instance->setItems($value);
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
     * Initializes a new Gateway Payment Job object.
     */
    public function build(): GatewayPaymentJob
    {
        return CoreHelper::clone($this->instance);
    }
}
