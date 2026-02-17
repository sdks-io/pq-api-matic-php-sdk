<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\UserDocReqItemDocsItemsSupplementalDocsItems;

/**
 * Builder for model UserDocReqItemDocsItemsSupplementalDocsItems
 *
 * @see UserDocReqItemDocsItemsSupplementalDocsItems
 */
class UserDocReqItemDocsItemsSupplementalDocsItemsBuilder
{
    /**
     * @var UserDocReqItemDocsItemsSupplementalDocsItems
     */
    private $instance;

    private function __construct(UserDocReqItemDocsItemsSupplementalDocsItems $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new User Doc Req Item Docs Items Supplemental Docs Items Builder object.
     */
    public static function init(): self
    {
        return new self(new UserDocReqItemDocsItemsSupplementalDocsItems());
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
     * Initializes a new User Doc Req Item Docs Items Supplemental Docs Items object.
     */
    public function build(): UserDocReqItemDocsItemsSupplementalDocsItems
    {
        return CoreHelper::clone($this->instance);
    }
}
