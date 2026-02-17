<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\UserDocumentRequirementItem;
use PayQuickerSDKLib\Models\UserDocumentRequirementItemDocumentsItems;

/**
 * Builder for model UserDocumentRequirementItem
 *
 * @see UserDocumentRequirementItem
 */
class UserDocumentRequirementItemBuilder
{
    /**
     * @var UserDocumentRequirementItem
     */
    private $instance;

    private function __construct(UserDocumentRequirementItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new User Document Requirement Item Builder object.
     */
    public static function init(): self
    {
        return new self(new UserDocumentRequirementItem());
    }

    /**
     * Sets country Of Birth field.
     *
     * @param string|null $value
     */
    public function countryOfBirth(?string $value): self
    {
        $this->instance->setCountryOfBirth($value);
        return $this;
    }

    /**
     * Sets country Of Nationality field.
     *
     * @param string|null $value
     */
    public function countryOfNationality(?string $value): self
    {
        $this->instance->setCountryOfNationality($value);
        return $this;
    }

    /**
     * Sets documents field.
     *
     * @param UserDocumentRequirementItemDocumentsItems[]|null $value
     */
    public function documents(?array $value): self
    {
        $this->instance->setDocuments($value);
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
     * Initializes a new User Document Requirement Item object.
     */
    public function build(): UserDocumentRequirementItem
    {
        return CoreHelper::clone($this->instance);
    }
}
