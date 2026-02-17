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

/**
 * Builder for model HateoasRelationship
 *
 * @see HateoasRelationship
 */
class HateoasRelationshipBuilder
{
    /**
     * @var HateoasRelationship
     */
    private $instance;

    private function __construct(HateoasRelationship $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Hateoas Relationship Builder object.
     *
     * @param string $rel
     */
    public static function init(string $rel): self
    {
        return new self(new HateoasRelationship($rel));
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
     * Initializes a new Hateoas Relationship object.
     */
    public function build(): HateoasRelationship
    {
        return CoreHelper::clone($this->instance);
    }
}
