<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\CreateOrUpdateDocumentFields;
use PayQuickerSDKLib\Models\DocumentDetails;

/**
 * Builder for model CreateOrUpdateDocumentFields
 *
 * @see CreateOrUpdateDocumentFields
 */
class CreateOrUpdateDocumentFieldsBuilder
{
    /**
     * @var CreateOrUpdateDocumentFields
     */
    private $instance;

    private function __construct(CreateOrUpdateDocumentFields $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Or Update Document Fields Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateOrUpdateDocumentFields());
    }

    /**
     * Sets fields field.
     *
     * @param DocumentDetails[]|null $value
     */
    public function fields(?array $value): self
    {
        $this->instance->setFields($value);
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
     * Initializes a new Create Or Update Document Fields object.
     */
    public function build(): CreateOrUpdateDocumentFields
    {
        return CoreHelper::clone($this->instance);
    }
}
