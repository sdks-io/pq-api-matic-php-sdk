<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\PortalTransferQuote;

/**
 * Builder for model PortalTransferQuote
 *
 * @see PortalTransferQuote
 */
class PortalTransferQuoteBuilder
{
    /**
     * @var PortalTransferQuote
     */
    private $instance;

    private function __construct(PortalTransferQuote $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Portal Transfer Quote Builder object.
     */
    public static function init(): self
    {
        return new self(new PortalTransferQuote());
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
     * Sets program User Id field.
     *
     * @param string|null $value
     */
    public function programUserId(?string $value): self
    {
        $this->instance->setProgramUserId($value);
        return $this;
    }

    /**
     * Sets email field.
     *
     * @param string|null $value
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
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
     * Sets auto Accept Quote field.
     *
     * @param bool|null $value
     */
    public function autoAcceptQuote(?bool $value): self
    {
        $this->instance->setAutoAcceptQuote($value);
        return $this;
    }

    /**
     * Sets client Transfer Id field.
     *
     * @param string|null $value
     */
    public function clientTransferId(?string $value): self
    {
        $this->instance->setClientTransferId($value);
        return $this;
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
     * Sets transfer Lock Side field.
     *
     * @param string|null $value
     */
    public function transferLockSide(?string $value): self
    {
        $this->instance->setTransferLockSide($value);
        return $this;
    }

    /**
     * Sets transfer Method Type field.
     *
     * @param string|null $value
     */
    public function transferMethodType(?string $value): self
    {
        $this->instance->setTransferMethodType($value);
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
     * Initializes a new Portal Transfer Quote object.
     */
    public function build(): PortalTransferQuote
    {
        return CoreHelper::clone($this->instance);
    }
}
