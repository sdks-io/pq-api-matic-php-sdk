<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\AgreementObject;
use PayQuickerSDKLib\Models\HateoasSelfRef;

/**
 * Builder for model AgreementObject
 *
 * @see AgreementObject
 */
class AgreementObjectBuilder
{
    /**
     * @var AgreementObject
     */
    private $instance;

    private function __construct(AgreementObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Agreement Object Builder object.
     */
    public static function init(): self
    {
        return new self(new AgreementObject());
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
     * Sets content Base 64 field.
     *
     * @param string|null $value
     */
    public function contentBase64(?string $value): self
    {
        $this->instance->setContentBase64($value);
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
     * Initializes a new Agreement Object object.
     */
    public function build(): AgreementObject
    {
        return CoreHelper::clone($this->instance);
    }
}
