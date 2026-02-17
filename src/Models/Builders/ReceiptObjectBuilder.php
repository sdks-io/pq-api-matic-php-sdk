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
use PayQuickerSDKLib\Models\FxRate;
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\ReceiptDescriptions;
use PayQuickerSDKLib\Models\ReceiptDetails;
use PayQuickerSDKLib\Models\ReceiptObject;

/**
 * Builder for model ReceiptObject
 *
 * @see ReceiptObject
 */
class ReceiptObjectBuilder
{
    /**
     * @var ReceiptObject
     */
    private $instance;

    private function __construct(ReceiptObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Receipt Object Builder object.
     */
    public static function init(): self
    {
        return new self(new ReceiptObject());
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
     * Sets created On field.
     *
     * @param \DateTime|null $value
     */
    public function createdOn(?\DateTime $value): self
    {
        $this->instance->setCreatedOn($value);
        return $this;
    }

    /**
     * Sets sign field.
     *
     * @param string|null $value
     */
    public function sign(?string $value): self
    {
        $this->instance->setSign($value);
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
     * Sets descriptions field.
     *
     * @param ReceiptDescriptions[]|null $value
     */
    public function descriptions(?array $value): self
    {
        $this->instance->setDescriptions($value);
        return $this;
    }

    /**
     * Sets delivery Details field.
     *
     * @param DeliveryDetails|null $value
     */
    public function deliveryDetails(?DeliveryDetails $value): self
    {
        $this->instance->setDeliveryDetails($value);
        return $this;
    }

    /**
     * Sets details field.
     *
     * @param ReceiptDetails|null $value
     */
    public function details(?ReceiptDetails $value): self
    {
        $this->instance->setDetails($value);
        return $this;
    }

    /**
     * Sets fx Rate field.
     *
     * @param FxRate|null $value
     */
    public function fxRate(?FxRate $value): self
    {
        $this->instance->setFxRate($value);
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
     * Initializes a new Receipt Object object.
     */
    public function build(): ReceiptObject
    {
        return CoreHelper::clone($this->instance);
    }
}
