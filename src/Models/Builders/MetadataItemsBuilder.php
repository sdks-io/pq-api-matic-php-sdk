<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\MetadataItems;

/**
 * Builder for model MetadataItems
 *
 * @see MetadataItems
 */
class MetadataItemsBuilder
{
    /**
     * @var MetadataItems
     */
    private $instance;

    private function __construct(MetadataItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Metadata Items Builder object.
     *
     * @param string $timezone
     * @param string $requestRef
     */
    public static function init(string $timezone, string $requestRef): self
    {
        return new self(new MetadataItems($timezone, $requestRef));
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
     * Initializes a new Metadata Items object.
     */
    public function build(): MetadataItems
    {
        return CoreHelper::clone($this->instance);
    }
}
