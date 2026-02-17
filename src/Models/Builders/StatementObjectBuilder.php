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
use PayQuickerSDKLib\Models\StatementObject;

/**
 * Builder for model StatementObject
 *
 * @see StatementObject
 */
class StatementObjectBuilder
{
    /**
     * @var StatementObject
     */
    private $instance;

    private function __construct(StatementObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Statement Object Builder object.
     */
    public static function init(): self
    {
        return new self(new StatementObject());
    }

    /**
     * Sets file Contents field.
     *
     * @param string|null $value
     */
    public function fileContents(?string $value): self
    {
        $this->instance->setFileContents($value);
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
     * Sets mime Type field.
     *
     * @param string|null $value
     */
    public function mimeType(?string $value): self
    {
        $this->instance->setMimeType($value);
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
     * Sets user Token field.
     *
     * @param string|null $value
     */
    public function userToken(?string $value): self
    {
        $this->instance->setUserToken($value);
        return $this;
    }

    /**
     * Sets prepaid Card Token field.
     *
     * @param string|null $value
     */
    public function prepaidCardToken(?string $value): self
    {
        $this->instance->setPrepaidCardToken($value);
        return $this;
    }

    /**
     * Sets from field.
     *
     * @param \DateTime|null $value
     */
    public function from(?\DateTime $value): self
    {
        $this->instance->setFrom($value);
        return $this;
    }

    /**
     * Sets to field.
     *
     * @param \DateTime|null $value
     */
    public function to(?\DateTime $value): self
    {
        $this->instance->setTo($value);
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
     * Initializes a new Statement Object object.
     */
    public function build(): StatementObject
    {
        return CoreHelper::clone($this->instance);
    }
}
