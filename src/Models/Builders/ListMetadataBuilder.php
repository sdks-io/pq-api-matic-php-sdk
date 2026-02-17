<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\ListMetadata;

/**
 * Builder for model ListMetadata
 *
 * @see ListMetadata
 */
class ListMetadataBuilder
{
    /**
     * @var ListMetadata
     */
    private $instance;

    private function __construct(ListMetadata $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Metadata Builder object.
     *
     * @param string $pageNo
     * @param string $pageSize
     * @param string $pageCount
     * @param string $recordCount
     * @param string $timezone
     * @param string $requestRef
     */
    public static function init(
        string $pageNo,
        string $pageSize,
        string $pageCount,
        string $recordCount,
        string $timezone,
        string $requestRef
    ): self {
        return new self(new ListMetadata($pageNo, $pageSize, $pageCount, $recordCount, $timezone, $requestRef));
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
     * Initializes a new List Metadata object.
     */
    public function build(): ListMetadata
    {
        return CoreHelper::clone($this->instance);
    }
}
