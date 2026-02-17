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
use PayQuickerSDKLib\Models\DocumentResult;
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\MetadataItems;

/**
 * Builder for model DocumentResult
 *
 * @see DocumentResult
 */
class DocumentResultBuilder
{
    /**
     * @var DocumentResult
     */
    private $instance;

    private function __construct(DocumentResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Document Result Builder object.
     *
     * @param \DateTime $createDate
     * @param string $token
     * @param HateoasSelfRef[] $links
     */
    public static function init(\DateTime $createDate, string $token, array $links): self
    {
        return new self(new DocumentResult($createDate, $token, $links));
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
     * Sets filename field.
     *
     * @param string|null $value
     */
    public function filename(?string $value): self
    {
        $this->instance->setFilename($value);
        return $this;
    }

    /**
     * Sets mime Type field.
     *
     * @param string|null $value
     */
    public function mimeType(?string $value): self
    {
        $this->instance->setMimeType($value);
        return $this;
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
     * Initializes a new Document Result object.
     */
    public function build(): DocumentResult
    {
        return CoreHelper::clone($this->instance);
    }
}
