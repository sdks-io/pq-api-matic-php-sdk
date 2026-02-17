<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\AuthorizationObject;
use PayQuickerSDKLib\Models\Translation;

/**
 * Builder for model AuthorizationObject
 *
 * @see AuthorizationObject
 */
class AuthorizationObjectBuilder
{
    /**
     * @var AuthorizationObject
     */
    private $instance;

    private function __construct(AuthorizationObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Authorization Object Builder object.
     */
    public static function init(): self
    {
        return new self(new AuthorizationObject());
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
     * @param Translation[]|null $value
     */
    public function descriptions(?array $value): self
    {
        $this->instance->setDescriptions($value);
        return $this;
    }

    /**
     * Sets auth Date field.
     *
     * @param \DateTime|null $value
     */
    public function authDate(?\DateTime $value): self
    {
        $this->instance->setAuthDate($value);
        return $this;
    }

    /**
     * Sets reference field.
     *
     * @param string|null $value
     */
    public function reference(?string $value): self
    {
        $this->instance->setReference($value);
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
     * Initializes a new Authorization Object object.
     */
    public function build(): AuthorizationObject
    {
        return CoreHelper::clone($this->instance);
    }
}
