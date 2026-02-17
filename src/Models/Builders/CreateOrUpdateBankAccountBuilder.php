<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\BankAccountAddress;
use PayQuickerSDKLib\Models\BankAccountField;
use PayQuickerSDKLib\Models\CreateOrUpdateBankAccount;

/**
 * Builder for model CreateOrUpdateBankAccount
 *
 * @see CreateOrUpdateBankAccount
 */
class CreateOrUpdateBankAccountBuilder
{
    /**
     * @var CreateOrUpdateBankAccount
     */
    private $instance;

    private function __construct(CreateOrUpdateBankAccount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Or Update Bank Account Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateOrUpdateBankAccount());
    }

    /**
     * Sets bank Account Ownership Type field.
     *
     * @param string|null $value
     */
    public function bankAccountOwnershipType(?string $value): self
    {
        $this->instance->setBankAccountOwnershipType($value);
        return $this;
    }

    /**
     * Sets bank Country field.
     *
     * @param string|null $value
     */
    public function bankCountry(?string $value): self
    {
        $this->instance->setBankCountry($value);
        return $this;
    }

    /**
     * Sets bank Currency field.
     *
     * @param string|null $value
     */
    public function bankCurrency(?string $value): self
    {
        $this->instance->setBankCurrency($value);
        return $this;
    }

    /**
     * Sets description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets fields field.
     *
     * @param BankAccountField[]|null $value
     */
    public function fields(?array $value): self
    {
        $this->instance->setFields($value);
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
     * Sets transfer Method Type field.
     *
     * @param string|null $value
     */
    public function transferMethodType(?string $value): self
    {
        $this->instance->setTransferMethodType($value);
        return $this;
    }

    /**
     * Sets address field.
     *
     * @param BankAccountAddress|null $value
     */
    public function address(?BankAccountAddress $value): self
    {
        $this->instance->setAddress($value);
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
     * Initializes a new Create Or Update Bank Account object.
     */
    public function build(): CreateOrUpdateBankAccount
    {
        return CoreHelper::clone($this->instance);
    }
}
