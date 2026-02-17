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
use PayQuickerSDKLib\Models\FeeDistribution;
use PayQuickerSDKLib\Models\FxRate;
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\MetadataItems;
use PayQuickerSDKLib\Models\TransferResult;

/**
 * Builder for model TransferResult
 *
 * @see TransferResult
 */
class TransferResultBuilder
{
    /**
     * @var TransferResult
     */
    private $instance;

    private function __construct(TransferResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Transfer Result Builder object.
     */
    public static function init(): self
    {
        return new self(new TransferResult());
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
     * @param FeeDistribution|null $value
     */
    public function fee(?FeeDistribution $value): self
    {
        $this->instance->setFee($value);
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
     * Sets meta field.
     *
     * @param MetadataItems|null $value
     */
    public function meta(?MetadataItems $value): self
    {
        $this->instance->setMeta($value);
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
     * Initializes a new Transfer Result object.
     */
    public function build(): TransferResult
    {
        return CoreHelper::clone($this->instance);
    }
}
