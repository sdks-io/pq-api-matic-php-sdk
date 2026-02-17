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
use PayQuickerSDKLib\Models\PrepaidCardPinResult;

/**
 * Builder for model PrepaidCardPinResult
 *
 * @see PrepaidCardPinResult
 */
class PrepaidCardPinResultBuilder
{
    /**
     * @var PrepaidCardPinResult
     */
    private $instance;

    private function __construct(PrepaidCardPinResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Prepaid Card Pin Result Builder object.
     */
    public static function init(): self
    {
        return new self(new PrepaidCardPinResult());
    }

    /**
     * Sets card Pin field.
     *
     * @param string|null $value
     */
    public function cardPin(?string $value): self
    {
        $this->instance->setCardPin($value);
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
     * Initializes a new Prepaid Card Pin Result object.
     */
    public function build(): PrepaidCardPinResult
    {
        return CoreHelper::clone($this->instance);
    }
}
