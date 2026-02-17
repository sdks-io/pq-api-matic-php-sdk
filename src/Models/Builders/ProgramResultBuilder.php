<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\ElectronicWalletType;
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\MetadataItems;
use PayQuickerSDKLib\Models\ProgramResult;

/**
 * Builder for model ProgramResult
 *
 * @see ProgramResult
 */
class ProgramResultBuilder
{
    /**
     * @var ProgramResult
     */
    private $instance;

    private function __construct(ProgramResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Program Result Builder object.
     *
     * @param string $token
     * @param string $currency
     * @param string $bank
     * @param string $type
     */
    public static function init(string $token, string $currency, string $bank, string $type): self
    {
        return new self(new ProgramResult($token, $currency, $bank, $type));
    }

    /**
     * Sets electronic Wallets field.
     *
     * @param ElectronicWalletType[]|null $value
     */
    public function electronicWallets(?array $value): self
    {
        $this->instance->setElectronicWallets($value);
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
     * Initializes a new Program Result object.
     */
    public function build(): ProgramResult
    {
        return CoreHelper::clone($this->instance);
    }
}
