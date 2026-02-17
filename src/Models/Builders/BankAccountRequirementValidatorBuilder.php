<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\BankAccountRequirementValidator;

/**
 * Builder for model BankAccountRequirementValidator
 *
 * @see BankAccountRequirementValidator
 */
class BankAccountRequirementValidatorBuilder
{
    /**
     * @var BankAccountRequirementValidator
     */
    private $instance;

    private function __construct(BankAccountRequirementValidator $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bank Account Requirement Validator Builder object.
     *
     * @param string $expression
     */
    public static function init(string $expression): self
    {
        return new self(new BankAccountRequirementValidator($expression));
    }

    /**
     * Sets validator Type field.
     *
     * @param string|null $value
     */
    public function validatorType(?string $value): self
    {
        $this->instance->setValidatorType($value);
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
     * Initializes a new Bank Account Requirement Validator object.
     */
    public function build(): BankAccountRequirementValidator
    {
        return CoreHelper::clone($this->instance);
    }
}
