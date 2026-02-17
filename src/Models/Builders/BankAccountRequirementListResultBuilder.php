<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\BankAccountRequirement;
use PayQuickerSDKLib\Models\BankAccountRequirementListResult;
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\ListMetadata;

/**
 * Builder for model BankAccountRequirementListResult
 *
 * @see BankAccountRequirementListResult
 */
class BankAccountRequirementListResultBuilder
{
    /**
     * @var BankAccountRequirementListResult
     */
    private $instance;

    private function __construct(BankAccountRequirementListResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bank Account Requirement List Result Builder object.
     */
    public static function init(): self
    {
        return new self(new BankAccountRequirementListResult());
    }

    /**
     * Sets payload field.
     *
     * @param BankAccountRequirement[]|null $value
     */
    public function payload(?array $value): self
    {
        $this->instance->setPayload($value);
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
     * Initializes a new Bank Account Requirement List Result object.
     */
    public function build(): BankAccountRequirementListResult
    {
        return CoreHelper::clone($this->instance);
    }
}
