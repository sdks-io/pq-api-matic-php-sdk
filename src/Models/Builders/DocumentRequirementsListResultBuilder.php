<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\DocumentRequirementsListResult;
use PayQuickerSDKLib\Models\ListMetadata;
use PayQuickerSDKLib\Models\UserDocumentRequirementItem;

/**
 * Builder for model DocumentRequirementsListResult
 *
 * @see DocumentRequirementsListResult
 */
class DocumentRequirementsListResultBuilder
{
    /**
     * @var DocumentRequirementsListResult
     */
    private $instance;

    private function __construct(DocumentRequirementsListResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Document Requirements List Result Builder object.
     */
    public static function init(): self
    {
        return new self(new DocumentRequirementsListResult());
    }

    /**
     * Sets id field.
     *
     * @param UserDocumentRequirementItem[]|null $value
     */
    public function id(?array $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets meta field.
     *
     * @param ListMetadata|null $value
     */
    public function meta(?ListMetadata $value): self
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
     * Initializes a new Document Requirements List Result object.
     */
    public function build(): DocumentRequirementsListResult
    {
        return CoreHelper::clone($this->instance);
    }
}
