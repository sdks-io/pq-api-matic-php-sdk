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
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\SpendbackObject;
use PayQuickerSDKLib\Models\SpendbackRefundObject;

/**
 * Builder for model SpendbackObject
 *
 * @see SpendbackObject
 */
class SpendbackObjectBuilder
{
    /**
     * @var SpendbackObject
     */
    private $instance;

    private function __construct(SpendbackObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Spendback Object Builder object.
     */
    public static function init(): self
    {
        return new self(new SpendbackObject());
    }

    /**
     * Sets token field.
     *
     * @param string|null $value
     */
    public function token(?string $value): self
    {
        $this->instance->setToken($value);
        return $this;
    }

    /**
     * Sets portal Id field.
     *
     * @param string|null $value
     */
    public function portalId(?string $value): self
    {
        $this->instance->setPortalId($value);
        return $this;
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
     * Sets created field.
     *
     * @param \DateTime|null $value
     */
    public function created(?\DateTime $value): self
    {
        $this->instance->setCreated($value);
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
     * Sets fee field.
     *
     * @param FeeConfiguration|null $value
     */
    public function fee(?FeeConfiguration $value): self
    {
        $this->instance->setFee($value);
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
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets receipt Token field.
     *
     * @param string|null $value
     */
    public function receiptToken(?string $value): self
    {
        $this->instance->setReceiptToken($value);
        return $this;
    }

    /**
     * Sets refunds field.
     *
     * @param SpendbackRefundObject[]|null $value
     */
    public function refunds(?array $value): self
    {
        $this->instance->setRefunds($value);
        return $this;
    }

    /**
     * Sets links field.
     *
     * @param HateoasSelfRef[]|null $value
     */
    public function links(?array $value): self
    {
        $this->instance->setLinks($value);
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
     * Initializes a new Spendback Object object.
     */
    public function build(): SpendbackObject
    {
        return CoreHelper::clone($this->instance);
    }
}
