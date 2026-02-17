<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\BalanceResult;
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\MetadataItems;

/**
 * Builder for model BalanceResult
 *
 * @see BalanceResult
 */
class BalanceResultBuilder
{
    /**
     * @var BalanceResult
     */
    private $instance;

    private function __construct(BalanceResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Balance Result Builder object.
     *
     * @param float $amount
     * @param string $currency
     * @param string $formattedAmount
     * @param string $token
     */
    public static function init(float $amount, string $currency, string $formattedAmount, string $token): self
    {
        return new self(new BalanceResult($amount, $currency, $formattedAmount, $token));
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
     * Initializes a new Balance Result object.
     */
    public function build(): BalanceResult
    {
        return CoreHelper::clone($this->instance);
    }
}
