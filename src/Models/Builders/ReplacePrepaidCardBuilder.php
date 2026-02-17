<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\ReplacePrepaidCard;

/**
 * Builder for model ReplacePrepaidCard
 *
 * @see ReplacePrepaidCard
 */
class ReplacePrepaidCardBuilder
{
    /**
     * @var ReplacePrepaidCard
     */
    private $instance;

    private function __construct(ReplacePrepaidCard $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Replace Prepaid Card Builder object.
     */
    public static function init(): self
    {
        return new self(new ReplacePrepaidCard());
    }

    /**
     * Sets card Package field.
     *
     * @param string|null $value
     */
    public function cardPackage(?string $value): self
    {
        $this->instance->setCardPackage($value);
        return $this;
    }

    /**
     * Sets card Replacement Reason field.
     *
     * @param string|null $value
     */
    public function cardReplacementReason(?string $value): self
    {
        $this->instance->setCardReplacementReason($value);
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
     * Initializes a new Replace Prepaid Card object.
     */
    public function build(): ReplacePrepaidCard
    {
        return CoreHelper::clone($this->instance);
    }
}
