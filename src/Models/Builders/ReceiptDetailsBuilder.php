<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\ReceiptDetails;

/**
 * Builder for model ReceiptDetails
 *
 * @see ReceiptDetails
 */
class ReceiptDetailsBuilder
{
    /**
     * @var ReceiptDetails
     */
    private $instance;

    private function __construct(ReceiptDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Receipt Details Builder object.
     */
    public static function init(): self
    {
        return new self(new ReceiptDetails());
    }

    /**
     * Sets bank Account Id field.
     *
     * @param string|null $value
     */
    public function bankAccountId(?string $value): self
    {
        $this->instance->setBankAccountId($value);
        return $this;
    }

    /**
     * Sets bank Account Id Type field.
     *
     * @param string|null $value
     */
    public function bankAccountIdType(?string $value): self
    {
        $this->instance->setBankAccountIdType($value);
        return $this;
    }

    /**
     * Sets bank Name field.
     *
     * @param string|null $value
     */
    public function bankName(?string $value): self
    {
        $this->instance->setBankName($value);
        return $this;
    }

    /**
     * Sets bank Id field.
     *
     * @param string|null $value
     */
    public function bankId(?string $value): self
    {
        $this->instance->setBankId($value);
        return $this;
    }

    /**
     * Sets bank Id Type field.
     *
     * @param string|null $value
     */
    public function bankIdType(?string $value): self
    {
        $this->instance->setBankIdType($value);
        return $this;
    }

    /**
     * Sets branch Address field.
     *
     * @param string|null $value
     */
    public function branchAddress(?string $value): self
    {
        $this->instance->setBranchAddress($value);
        return $this;
    }

    /**
     * Sets branch City field.
     *
     * @param string|null $value
     */
    public function branchCity(?string $value): self
    {
        $this->instance->setBranchCity($value);
        return $this;
    }

    /**
     * Sets branch Id field.
     *
     * @param string|null $value
     */
    public function branchId(?string $value): self
    {
        $this->instance->setBranchId($value);
        return $this;
    }

    /**
     * Sets branch Name field.
     *
     * @param string|null $value
     */
    public function branchName(?string $value): self
    {
        $this->instance->setBranchName($value);
        return $this;
    }

    /**
     * Sets branch Postal Code field.
     *
     * @param string|null $value
     */
    public function branchPostalCode(?string $value): self
    {
        $this->instance->setBranchPostalCode($value);
        return $this;
    }

    /**
     * Sets branch Phone Number field.
     *
     * @param string|null $value
     */
    public function branchPhoneNumber(?string $value): self
    {
        $this->instance->setBranchPhoneNumber($value);
        return $this;
    }

    /**
     * Sets branch Region field.
     *
     * @param string|null $value
     */
    public function branchRegion(?string $value): self
    {
        $this->instance->setBranchRegion($value);
        return $this;
    }

    /**
     * Sets beneficary Tax Id field.
     *
     * @param string|null $value
     */
    public function beneficaryTaxId(?string $value): self
    {
        $this->instance->setBeneficaryTaxId($value);
        return $this;
    }

    /**
     * Sets beneficary Tax Id Type field.
     *
     * @param string|null $value
     */
    public function beneficaryTaxIdType(?string $value): self
    {
        $this->instance->setBeneficaryTaxIdType($value);
        return $this;
    }

    /**
     * Sets beneficary Name field.
     *
     * @param string|null $value
     */
    public function beneficaryName(?string $value): self
    {
        $this->instance->setBeneficaryName($value);
        return $this;
    }

    /**
     * Sets memo field.
     *
     * @param string|null $value
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Sets note field.
     *
     * @param string|null $value
     */
    public function note(?string $value): self
    {
        $this->instance->setNote($value);
        return $this;
    }

    /**
     * Sets correlation Token field.
     *
     * @param string|null $value
     */
    public function correlationToken(?string $value): self
    {
        $this->instance->setCorrelationToken($value);
        return $this;
    }

    /**
     * Sets card Expiry Date field.
     *
     * @param string|null $value
     */
    public function cardExpiryDate(?string $value): self
    {
        $this->instance->setCardExpiryDate($value);
        return $this;
    }

    /**
     * Sets card Holder Name field.
     *
     * @param string|null $value
     */
    public function cardHolderName(?string $value): self
    {
        $this->instance->setCardHolderName($value);
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
     * Sets electronic Wallet Account Number field.
     *
     * @param string|null $value
     */
    public function electronicWalletAccountNumber(?string $value): self
    {
        $this->instance->setElectronicWalletAccountNumber($value);
        return $this;
    }

    /**
     * Sets electronic Wallet Account Number Type field.
     *
     * @param string|null $value
     */
    public function electronicWalletAccountNumberType(?string $value): self
    {
        $this->instance->setElectronicWalletAccountNumberType($value);
        return $this;
    }

    /**
     * Sets electronic Wallet Government Id field.
     *
     * @param string|null $value
     */
    public function electronicWalletGovernmentId(?string $value): self
    {
        $this->instance->setElectronicWalletGovernmentId($value);
        return $this;
    }

    /**
     * Sets electronic Wallet Government Id Type field.
     *
     * @param string|null $value
     */
    public function electronicWalletGovernmentIdType(?string $value): self
    {
        $this->instance->setElectronicWalletGovernmentIdType($value);
        return $this;
    }

    /**
     * Sets electronic Wallet Type field.
     *
     * @param string|null $value
     */
    public function electronicWalletType(?string $value): self
    {
        $this->instance->setElectronicWalletType($value);
        return $this;
    }

    /**
     * Sets mobile Phone Number field.
     *
     * @param string|null $value
     */
    public function mobilePhoneNumber(?string $value): self
    {
        $this->instance->setMobilePhoneNumber($value);
        return $this;
    }

    /**
     * Sets electronic Funds Transfer Type field.
     *
     * @param string|null $value
     */
    public function electronicFundsTransferType(?string $value): self
    {
        $this->instance->setElectronicFundsTransferType($value);
        return $this;
    }

    /**
     * Sets electronic Funds Transfer Failure Type field.
     *
     * @param string|null $value
     */
    public function electronicFundsTransferFailureType(?string $value): self
    {
        $this->instance->setElectronicFundsTransferFailureType($value);
        return $this;
    }

    /**
     * Sets electronic Transfer Status Type field.
     *
     * @param string|null $value
     */
    public function electronicTransferStatusType(?string $value): self
    {
        $this->instance->setElectronicTransferStatusType($value);
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
     * Initializes a new Receipt Details object.
     */
    public function build(): ReceiptDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
