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
use PayQuickerSDKLib\Models\PrepaidCardPinTokenResult;

/**
 * Builder for model PrepaidCardPinTokenResult
 *
 * @see PrepaidCardPinTokenResult
 */
class PrepaidCardPinTokenResultBuilder
{
    /**
     * @var PrepaidCardPinTokenResult
     */
    private $instance;

    private function __construct(PrepaidCardPinTokenResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Prepaid Card Pin Token Result Builder object.
     */
    public static function init(): self
    {
        return new self(new PrepaidCardPinTokenResult());
    }

    /**
     * Sets card Processor Type field.
     *
     * @param string|null $value
     */
    public function cardProcessorType(?string $value): self
    {
        $this->instance->setCardProcessorType($value);
        return $this;
    }

    /**
     * Sets card Pin Token field.
     *
     * @param string|null $value
     */
    public function cardPinToken(?string $value): self
    {
        $this->instance->setCardPinToken($value);
        return $this;
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
     * Sets url field.
     *
     * @param string|null $value
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
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
     * Initializes a new Prepaid Card Pin Token Result object.
     */
    public function build(): PrepaidCardPinTokenResult
    {
        return CoreHelper::clone($this->instance);
    }
}
