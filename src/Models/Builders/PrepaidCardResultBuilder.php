<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\BankAccountField;
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\MetadataItems;
use PayQuickerSDKLib\Models\PrepaidCardResult;

/**
 * Builder for model PrepaidCardResult
 *
 * @see PrepaidCardResult
 */
class PrepaidCardResultBuilder
{
    /**
     * @var PrepaidCardResult
     */
    private $instance;

    private function __construct(PrepaidCardResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Prepaid Card Result Builder object.
     */
    public static function init(): self
    {
        return new self(new PrepaidCardResult());
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
     * Sets card Network field.
     *
     * @param string|null $value
     */
    public function cardNetwork(?string $value): self
    {
        $this->instance->setCardNetwork($value);
        return $this;
    }

    /**
     * Sets card Number field.
     *
     * @param string|null $value
     */
    public function cardNumber(?string $value): self
    {
        $this->instance->setCardNumber($value);
        return $this;
    }

    /**
     * Sets card Package field.
     *
     * @param string|null $value
     */
    public function cardPackage(?string $value): self
    {
        $this->instance->setCardPackage($value);
        return $this;
    }

    /**
     * Sets country field.
     *
     * @param string|null $value
     */
    public function country(?string $value): self
    {
        $this->instance->setCountry($value);
        return $this;
    }

    /**
     * Sets created On field.
     *
     * @param \DateTime|null $value
     */
    public function createdOn(?\DateTime $value): self
    {
        $this->instance->setCreatedOn($value);
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets cvv field.
     *
     * @param string|null $value
     */
    public function cvv(?string $value): self
    {
        $this->instance->setCvv($value);
        return $this;
    }

    /**
     * Sets expires field.
     *
     * @param string|null $value
     */
    public function expires(?string $value): self
    {
        $this->instance->setExpires($value);
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
     * Sets bank In Details field.
     *
     * @param BankAccountField[]|null $value
     */
    public function bankInDetails(?array $value): self
    {
        $this->instance->setBankInDetails($value);
        return $this;
    }

    /**
     * Sets capabilities field.
     *
     * @param string[]|null $value
     */
    public function capabilities(?array $value): self
    {
        $this->instance->setCapabilities($value);
        return $this;
    }

    /**
     * Sets user Token field.
     *
     * @param string|null $value
     */
    public function userToken(?string $value): self
    {
        $this->instance->setUserToken($value);
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
     * Initializes a new Prepaid Card Result object.
     */
    public function build(): PrepaidCardResult
    {
        return CoreHelper::clone($this->instance);
    }
}
