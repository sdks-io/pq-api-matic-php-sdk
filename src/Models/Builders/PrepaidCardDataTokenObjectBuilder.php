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
use PayQuickerSDKLib\Models\PrepaidCardDataTokenObject;

/**
 * Builder for model PrepaidCardDataTokenObject
 *
 * @see PrepaidCardDataTokenObject
 */
class PrepaidCardDataTokenObjectBuilder
{
    /**
     * @var PrepaidCardDataTokenObject
     */
    private $instance;

    private function __construct(PrepaidCardDataTokenObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Prepaid Card Data Token Object Builder object.
     *
     * @param string $cardProcessorType
     * @param string $tokenPurposeType
     */
    public static function init(string $cardProcessorType, string $tokenPurposeType): self
    {
        return new self(new PrepaidCardDataTokenObject($cardProcessorType, $tokenPurposeType));
    }

    /**
     * Sets resource Value field.
     *
     * @param string|null $value
     */
    public function resourceValue(?string $value): self
    {
        $this->instance->setResourceValue($value);
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
     * Initializes a new Prepaid Card Data Token Object object.
     */
    public function build(): PrepaidCardDataTokenObject
    {
        return CoreHelper::clone($this->instance);
    }
}
