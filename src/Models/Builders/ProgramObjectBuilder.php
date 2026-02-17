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
use PayQuickerSDKLib\Models\ProgramObject;

/**
 * Builder for model ProgramObject
 *
 * @see ProgramObject
 */
class ProgramObjectBuilder
{
    /**
     * @var ProgramObject
     */
    private $instance;

    private function __construct(ProgramObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Program Object Builder object.
     *
     * @param string $token
     * @param string $currency
     * @param string $bank
     * @param string $type
     */
    public static function init(string $token, string $currency, string $bank, string $type): self
    {
        return new self(new ProgramObject($token, $currency, $bank, $type));
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
     * Initializes a new Program Object object.
     */
    public function build(): ProgramObject
    {
        return CoreHelper::clone($this->instance);
    }
}
