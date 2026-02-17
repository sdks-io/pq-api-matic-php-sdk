<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\CreateWebhookRequest;

/**
 * Builder for model CreateWebhookRequest
 *
 * @see CreateWebhookRequest
 */
class CreateWebhookRequestBuilder
{
    /**
     * @var CreateWebhookRequest
     */
    private $instance;

    private function __construct(CreateWebhookRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Webhook Request Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateWebhookRequest());
    }

    /**
     * Sets namespace field.
     *
     * @param string|null $value
     */
    public function namespace(?string $value): self
    {
        $this->instance->setNamespace($value);
        return $this;
    }

    /**
     * Sets url field.
     *
     * @param string|null $value
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
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
     * Initializes a new Create Webhook Request object.
     */
    public function build(): CreateWebhookRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
