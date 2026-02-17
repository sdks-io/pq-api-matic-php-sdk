<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\ElectronicWalletRequirement;
use PayQuickerSDKLib\Models\ElectronicWalletRequirementListResult;
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\ListMetadata;

/**
 * Builder for model ElectronicWalletRequirementListResult
 *
 * @see ElectronicWalletRequirementListResult
 */
class ElectronicWalletRequirementListResultBuilder
{
    /**
     * @var ElectronicWalletRequirementListResult
     */
    private $instance;

    private function __construct(ElectronicWalletRequirementListResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Electronic Wallet Requirement List Result Builder object.
     */
    public static function init(): self
    {
        return new self(new ElectronicWalletRequirementListResult());
    }

    /**
     * Sets payload field.
     *
     * @param ElectronicWalletRequirement[]|null $value
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
     * Initializes a new Electronic Wallet Requirement List Result object.
     */
    public function build(): ElectronicWalletRequirementListResult
    {
        return CoreHelper::clone($this->instance);
    }
}
