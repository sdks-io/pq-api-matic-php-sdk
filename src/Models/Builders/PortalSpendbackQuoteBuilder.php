<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\PortalSpendbackQuote;

/**
 * Builder for model PortalSpendbackQuote
 *
 * @see PortalSpendbackQuote
 */
class PortalSpendbackQuoteBuilder
{
    /**
     * @var PortalSpendbackQuote
     */
    private $instance;

    private function __construct(PortalSpendbackQuote $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Portal Spendback Quote Builder object.
     */
    public static function init(): self
    {
        return new self(new PortalSpendbackQuote());
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
     * Sets client Spendback Id field.
     *
     * @param string|null $value
     */
    public function clientSpendbackId(?string $value): self
    {
        $this->instance->setClientSpendbackId($value);
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
     * Initializes a new Portal Spendback Quote object.
     */
    public function build(): PortalSpendbackQuote
    {
        return CoreHelper::clone($this->instance);
    }
}
