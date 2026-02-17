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
use PayQuickerSDKLib\Models\UserDocReqItemDocsItemsSupplementalDocsItems;
use PayQuickerSDKLib\Models\UserDocumentRequirementItemDocumentsItems;

/**
 * Builder for model UserDocumentRequirementItemDocumentsItems
 *
 * @see UserDocumentRequirementItemDocumentsItems
 */
class UserDocumentRequirementItemDocumentsItemsBuilder
{
    /**
     * @var UserDocumentRequirementItemDocumentsItems
     */
    private $instance;

    private function __construct(UserDocumentRequirementItemDocumentsItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new User Document Requirement Item Documents Items Builder object.
     */
    public static function init(): self
    {
        return new self(new UserDocumentRequirementItemDocumentsItems());
    }

    /**
     * Sets example Image field.
     *
     * @param string|null $value
     */
    public function exampleImage(?string $value): self
    {
        $this->instance->setExampleImage($value);
        return $this;
    }

    /**
     * Sets supplemental Documents field.
     *
     * @param UserDocReqItemDocsItemsSupplementalDocsItems[]|null $value
     */
    public function supplementalDocuments(?array $value): self
    {
        $this->instance->setSupplementalDocuments($value);
        return $this;
    }

    /**
     * Sets metadata field.
     *
     * @param UserDocReqItemDocsItemsMetadataItems[]|null $value
     */
    public function metadata(?array $value): self
    {
        $this->instance->setMetadata($value);
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
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
     * Initializes a new User Document Requirement Item Documents Items object.
     */
    public function build(): UserDocumentRequirementItemDocumentsItems
    {
        return CoreHelper::clone($this->instance);
    }
}
