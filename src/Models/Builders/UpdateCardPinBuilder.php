<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\UpdateCardPin;

/**
 * Builder for model UpdateCardPin
 *
 * @see UpdateCardPin
 */
class UpdateCardPinBuilder
{
    /**
     * @var UpdateCardPin
     */
    private $instance;

    private function __construct(UpdateCardPin $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Card Pin Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateCardPin());
    }

    /**
     * Sets card Pin Token field.
     *
     * @param string|null $value
     */
    public function cardPinToken(?string $value): self
    {
        $this->instance->setCardPinToken($value);
        return $this;
    }

    /**
     * Sets card Pin field.
     *
     * @param string|null $value
     */
    public function cardPin(?string $value): self
    {
        $this->instance->setCardPin($value);
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
     * Initializes a new Update Card Pin object.
     */
    public function build(): UpdateCardPin
    {
        return CoreHelper::clone($this->instance);
    }
}
