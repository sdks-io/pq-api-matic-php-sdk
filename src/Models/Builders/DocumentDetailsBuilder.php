<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\DocumentDetails;

/**
 * Builder for model DocumentDetails
 *
 * @see DocumentDetails
 */
class DocumentDetailsBuilder
{
    /**
     * @var DocumentDetails
     */
    private $instance;

    private function __construct(DocumentDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Document Details Builder object.
     *
     * @param string $key
     * @param string $value
     */
    public static function init(string $key, string $value): self
    {
        return new self(new DocumentDetails($key, $value));
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
     * Initializes a new Document Details object.
     */
    public function build(): DocumentDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
