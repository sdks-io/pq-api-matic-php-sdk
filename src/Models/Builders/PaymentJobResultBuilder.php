<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\MetadataItems;
use PayQuickerSDKLib\Models\PaymentJobResult;
use PayQuickerSDKLib\Models\PaymentObject;

/**
 * Builder for model PaymentJobResult
 *
 * @see PaymentJobResult
 */
class PaymentJobResultBuilder
{
    /**
     * @var PaymentJobResult
     */
    private $instance;

    private function __construct(PaymentJobResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payment Job Result Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentJobResult());
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
     * Sets filename field.
     *
     * @param string|null $value
     */
    public function filename(?string $value): self
    {
        $this->instance->setFilename($value);
        return $this;
    }

    /**
     * Sets file Token field.
     *
     * @param string|null $value
     */
    public function fileToken(?string $value): self
    {
        $this->instance->setFileToken($value);
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
     * Sets count field.
     *
     * @param int|null $value
     */
    public function count(?int $value): self
    {
        $this->instance->setCount($value);
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
     * Sets items field.
     *
     * @param PaymentObject[]|null $value
     */
    public function items(?array $value): self
    {
        $this->instance->setItems($value);
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
     * Initializes a new Payment Job Result object.
     */
    public function build(): PaymentJobResult
    {
        return CoreHelper::clone($this->instance);
    }
}
