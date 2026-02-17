<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\RetrieveCardData;

/**
 * Builder for model RetrieveCardData
 *
 * @see RetrieveCardData
 */
class RetrieveCardDataBuilder
{
    /**
     * @var RetrieveCardData
     */
    private $instance;

    private function __construct(RetrieveCardData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Retrieve Card Data Builder object.
     */
    public static function init(): self
    {
        return new self(new RetrieveCardData());
    }

    /**
     * Sets Token field.
     *
     * @param string|null $value
     */
    public function token(?string $value): self
    {
        $this->instance->setToken($value);
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
     * Initializes a new Retrieve Card Data object.
     */
    public function build(): RetrieveCardData
    {
        return CoreHelper::clone($this->instance);
    }
}
