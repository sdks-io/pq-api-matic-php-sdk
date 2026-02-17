<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\Translation;

/**
 * Builder for model Translation
 *
 * @see Translation
 */
class TranslationBuilder
{
    /**
     * @var Translation
     */
    private $instance;

    private function __construct(Translation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Translation Builder object.
     */
    public static function init(): self
    {
        return new self(new Translation());
    }

    /**
     * Sets language field.
     *
     * @param string|null $value
     */
    public function language(?string $value): self
    {
        $this->instance->setLanguage($value);
        return $this;
    }

    /**
     * Sets translation field.
     *
     * @param string|null $value
     */
    public function translation(?string $value): self
    {
        $this->instance->setTranslation($value);
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
     * Initializes a new Translation object.
     */
    public function build(): Translation
    {
        return CoreHelper::clone($this->instance);
    }
}
