<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\HateoasRelationship;
use PayQuickerSDKLib\Models\HateoasSelfRef;

/**
 * Builder for model HateoasSelfRef
 *
 * @see HateoasSelfRef
 */
class HateoasSelfRefBuilder
{
    /**
     * @var HateoasSelfRef
     */
    private $instance;

    private function __construct(HateoasSelfRef $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Hateoas Self Ref Builder object.
     */
    public static function init(): self
    {
        return new self(new HateoasSelfRef());
    }

    /**
     * Sets href field.
     *
     * @param string|null $value
     */
    public function href(?string $value): self
    {
        $this->instance->setHref($value);
        return $this;
    }

    /**
     * Sets params field.
     *
     * @param HateoasRelationship|null $value
     */
    public function params(?HateoasRelationship $value): self
    {
        $this->instance->setParams($value);
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
     * Initializes a new Hateoas Self Ref object.
     */
    public function build(): HateoasSelfRef
    {
        return CoreHelper::clone($this->instance);
    }
}
