<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\UserDocReqItemDocsItemsMetadataItems;
use PayQuickerSDKLib\Models\UserDocReqItemDocsItemsMetadataItemsNameItems;

/**
 * Builder for model UserDocReqItemDocsItemsMetadataItems
 *
 * @see UserDocReqItemDocsItemsMetadataItems
 */
class UserDocReqItemDocsItemsMetadataItemsBuilder
{
    /**
     * @var UserDocReqItemDocsItemsMetadataItems
     */
    private $instance;

    private function __construct(UserDocReqItemDocsItemsMetadataItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new User Doc Req Item Docs Items Metadata Items Builder object.
     */
    public static function init(): self
    {
        return new self(new UserDocReqItemDocsItemsMetadataItems());
    }

    /**
     * Sets data Type field.
     *
     * @param string|null $value
     */
    public function dataType(?string $value): self
    {
        $this->instance->setDataType($value);
        return $this;
    }

    /**
     * Sets field Type field.
     *
     * @param string|null $value
     */
    public function fieldType(?string $value): self
    {
        $this->instance->setFieldType($value);
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param UserDocReqItemDocsItemsMetadataItemsNameItems[]|null $value
     */
    public function name(?array $value): self
    {
        $this->instance->setName($value);
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
     * Initializes a new User Doc Req Item Docs Items Metadata Items object.
     */
    public function build(): UserDocReqItemDocsItemsMetadataItems
    {
        return CoreHelper::clone($this->instance);
    }
}
