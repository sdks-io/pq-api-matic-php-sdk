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
use PayQuickerSDKLib\Models\PrepaidCardDataObject;

/**
 * Builder for model PrepaidCardDataObject
 *
 * @see PrepaidCardDataObject
 */
class PrepaidCardDataObjectBuilder
{
    /**
     * @var PrepaidCardDataObject
     */
    private $instance;

    private function __construct(PrepaidCardDataObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Prepaid Card Data Object Builder object.
     */
    public static function init(): self
    {
        return new self(new PrepaidCardDataObject());
    }

    /**
     * Sets card Number field.
     *
     * @param float|null $value
     */
    public function cardNumber(?float $value): self
    {
        $this->instance->setCardNumber($value);
        return $this;
    }

    /**
     * Sets cvv Number field.
     *
     * @param string|null $value
     */
    public function cvvNumber(?string $value): self
    {
        $this->instance->setCvvNumber($value);
        return $this;
    }

    /**
     * Sets expiration field.
     *
     * @param string|null $value
     */
    public function expiration(?string $value): self
    {
        $this->instance->setExpiration($value);
        return $this;
    }

    /**
     * Sets name On Card field.
     *
     * @param string|null $value
     */
    public function nameOnCard(?string $value): self
    {
        $this->instance->setNameOnCard($value);
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
     * Initializes a new Prepaid Card Data Object object.
     */
    public function build(): PrepaidCardDataObject
    {
        return CoreHelper::clone($this->instance);
    }
}
