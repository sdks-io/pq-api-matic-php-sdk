<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\OperationResult;

/**
 * Builder for model OperationResult
 *
 * @see OperationResult
 */
class OperationResultBuilder
{
    /**
     * @var OperationResult
     */
    private $instance;

    private function __construct(OperationResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Operation Result Builder object.
     */
    public static function init(): self
    {
        return new self(new OperationResult());
    }

    /**
     * Sets result field.
     *
     * @param bool|null $value
     */
    public function result(?bool $value): self
    {
        $this->instance->setResult($value);
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
     * Initializes a new Operation Result object.
     */
    public function build(): OperationResult
    {
        return CoreHelper::clone($this->instance);
    }
}
