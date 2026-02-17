<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\PortalPaymentJob;
use PayQuickerSDKLib\Models\PortalPaymentJobQuote;

/**
 * Builder for model PortalPaymentJob
 *
 * @see PortalPaymentJob
 */
class PortalPaymentJobBuilder
{
    /**
     * @var PortalPaymentJob
     */
    private $instance;

    private function __construct(PortalPaymentJob $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Portal Payment Job Builder object.
     */
    public static function init(): self
    {
        return new self(new PortalPaymentJob());
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
     * @param PortalPaymentJobQuote[]|null $value
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
     * Initializes a new Portal Payment Job object.
     */
    public function build(): PortalPaymentJob
    {
        return CoreHelper::clone($this->instance);
    }
}
