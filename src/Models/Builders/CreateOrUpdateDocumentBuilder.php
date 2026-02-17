<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\CreateOrUpdateDocument;
use PayQuickerSDKLib\Models\CreateOrUpdateDocumentFields;

/**
 * Builder for model CreateOrUpdateDocument
 *
 * @see CreateOrUpdateDocument
 */
class CreateOrUpdateDocumentBuilder
{
    /**
     * @var CreateOrUpdateDocument
     */
    private $instance;

    private function __construct(CreateOrUpdateDocument $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Or Update Document Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateOrUpdateDocument());
    }

    /**
     * Sets fields field.
     *
     * @param CreateOrUpdateDocumentFields|null $value
     */
    public function fields(?CreateOrUpdateDocumentFields $value): self
    {
        $this->instance->setFields($value);
        return $this;
    }

    /**
     * Sets upload field.
     *
     * @param mixed $value
     */
    public function upload($value): self
    {
        $this->instance->setUpload($value);
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
     * Initializes a new Create Or Update Document object.
     */
    public function build(): CreateOrUpdateDocument
    {
        return CoreHelper::clone($this->instance);
    }
}
