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
use PayQuickerSDKLib\Models\PrepaidCardPinObject;

/**
 * Builder for model PrepaidCardPinObject
 *
 * @see PrepaidCardPinObject
 */
class PrepaidCardPinObjectBuilder
{
    /**
     * @var PrepaidCardPinObject
     */
    private $instance;

    private function __construct(PrepaidCardPinObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Prepaid Card Pin Object Builder object.
     */
    public static function init(): self
    {
        return new self(new PrepaidCardPinObject());
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
     * Initializes a new Prepaid Card Pin Object object.
     */
    public function build(): PrepaidCardPinObject
    {
        return CoreHelper::clone($this->instance);
    }
}
