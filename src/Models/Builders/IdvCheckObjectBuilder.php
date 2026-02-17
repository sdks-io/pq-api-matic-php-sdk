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
use PayQuickerSDKLib\Models\IdvCheckObject;

/**
 * Builder for model IdvCheckObject
 *
 * @see IdvCheckObject
 */
class IdvCheckObjectBuilder
{
    /**
     * @var IdvCheckObject
     */
    private $instance;

    private function __construct(IdvCheckObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Idv Check Object Builder object.
     */
    public static function init(): self
    {
        return new self(new IdvCheckObject());
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
     * Sets idv Provider Reference field.
     *
     * @param string|null $value
     */
    public function idvProviderReference(?string $value): self
    {
        $this->instance->setIdvProviderReference($value);
        return $this;
    }

    /**
     * Sets idv Result field.
     *
     * @param string|null $value
     */
    public function idvResult(?string $value): self
    {
        $this->instance->setIdvResult($value);
        return $this;
    }

    /**
     * Sets idv Sub Result field.
     *
     * @param string|null $value
     */
    public function idvSubResult(?string $value): self
    {
        $this->instance->setIdvSubResult($value);
        return $this;
    }

    /**
     * Sets idv Provider field.
     *
     * @param string|null $value
     */
    public function idvProvider(?string $value): self
    {
        $this->instance->setIdvProvider($value);
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
     * Sets raw field.
     *
     * @param string|null $value
     */
    public function raw(?string $value): self
    {
        $this->instance->setRaw($value);
        return $this;
    }

    /**
     * Sets idv Check Type field.
     *
     * @param string|null $value
     */
    public function idvCheckType(?string $value): self
    {
        $this->instance->setIdvCheckType($value);
        return $this;
    }

    /**
     * Sets idv Disposition field.
     *
     * @param string|null $value
     */
    public function idvDisposition(?string $value): self
    {
        $this->instance->setIdvDisposition($value);
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
     * Initializes a new Idv Check Object object.
     */
    public function build(): IdvCheckObject
    {
        return CoreHelper::clone($this->instance);
    }
}
