<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\MetadataItems;
use PayQuickerSDKLib\Models\UserEventResult;

/**
 * Builder for model UserEventResult
 *
 * @see UserEventResult
 */
class UserEventResultBuilder
{
    /**
     * @var UserEventResult
     */
    private $instance;

    private function __construct(UserEventResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new User Event Result Builder object.
     *
     * @param string $event
     */
    public static function init(string $event): self
    {
        return new self(new UserEventResult($event));
    }

    /**
     * Sets token field.
     *
     * @param string|null $value
     */
    public function token(?string $value): self
    {
        $this->instance->setToken($value);
        return $this;
    }

    /**
     * Sets can Be Cancelled field.
     *
     * @param bool|null $value
     */
    public function canBeCancelled(?bool $value): self
    {
        $this->instance->setCanBeCancelled($value);
        return $this;
    }

    /**
     * Sets event Requirement Category Type field.
     *
     * @param string|null $value
     */
    public function eventRequirementCategoryType(?string $value): self
    {
        $this->instance->setEventRequirementCategoryType($value);
        return $this;
    }

    /**
     * Sets event Requirement Type field.
     *
     * @param string|null $value
     */
    public function eventRequirementType(?string $value): self
    {
        $this->instance->setEventRequirementType($value);
        return $this;
    }

    /**
     * Sets event Status field.
     *
     * @param string|null $value
     */
    public function eventStatus(?string $value): self
    {
        $this->instance->setEventStatus($value);
        return $this;
    }

    /**
     * Sets event Type field.
     *
     * @param string|null $value
     */
    public function eventType(?string $value): self
    {
        $this->instance->setEventType($value);
        return $this;
    }

    /**
     * Sets is Complete field.
     *
     * @param bool|null $value
     */
    public function isComplete(?bool $value): self
    {
        $this->instance->setIsComplete($value);
        return $this;
    }

    /**
     * Sets user Action field.
     *
     * @param string|null $value
     */
    public function userAction(?string $value): self
    {
        $this->instance->setUserAction($value);
        return $this;
    }

    /**
     * Sets user Impact field.
     *
     * @param string|null $value
     */
    public function userImpact(?string $value): self
    {
        $this->instance->setUserImpact($value);
        return $this;
    }

    /**
     * Sets links field.
     *
     * @param HateoasSelfRef[]|null $value
     */
    public function links(?array $value): self
    {
        $this->instance->setLinks($value);
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
     * Initializes a new User Event Result object.
     */
    public function build(): UserEventResult
    {
        return CoreHelper::clone($this->instance);
    }
}
