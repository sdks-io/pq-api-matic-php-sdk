<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\UpdatePrepaidCard;

/**
 * Builder for model UpdatePrepaidCard
 *
 * @see UpdatePrepaidCard
 */
class UpdatePrepaidCardBuilder
{
    /**
     * @var UpdatePrepaidCard
     */
    private $instance;

    private function __construct(UpdatePrepaidCard $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Prepaid Card Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdatePrepaidCard());
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
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
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
     * Initializes a new Update Prepaid Card object.
     */
    public function build(): UpdatePrepaidCard
    {
        return CoreHelper::clone($this->instance);
    }
}
