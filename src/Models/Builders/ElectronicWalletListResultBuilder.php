<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\ElectronicWalletListResult;
use PayQuickerSDKLib\Models\ElectronicWalletObject;
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\ListMetadata;

/**
 * Builder for model ElectronicWalletListResult
 *
 * @see ElectronicWalletListResult
 */
class ElectronicWalletListResultBuilder
{
    /**
     * @var ElectronicWalletListResult
     */
    private $instance;

    private function __construct(ElectronicWalletListResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Electronic Wallet List Result Builder object.
     *
     * @param ElectronicWalletObject[] $payload
     * @param ListMetadata $meta
     * @param HateoasSelfRef[] $links
     */
    public static function init(array $payload, ListMetadata $meta, array $links): self
    {
        return new self(new ElectronicWalletListResult($payload, $meta, $links));
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
     * Initializes a new Electronic Wallet List Result object.
     */
    public function build(): ElectronicWalletListResult
    {
        return CoreHelper::clone($this->instance);
    }
}
