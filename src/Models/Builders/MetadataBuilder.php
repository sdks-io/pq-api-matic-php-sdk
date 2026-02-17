<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\Metadata;
use PayQuickerSDKLib\Models\MetadataItems;

/**
 * Builder for model Metadata
 *
 * @see Metadata
 */
class MetadataBuilder
{
    /**
     * @var Metadata
     */
    private $instance;

    private function __construct(Metadata $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Metadata Builder object.
     */
    public static function init(): self
    {
        return new self(new Metadata());
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
     * Initializes a new Metadata object.
     */
    public function build(): Metadata
    {
        return CoreHelper::clone($this->instance);
    }
}
