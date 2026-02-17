<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\MetadataItems;
use PayQuickerSDKLib\Models\WebhookSubscriptionResult;

/**
 * Builder for model WebhookSubscriptionResult
 *
 * @see WebhookSubscriptionResult
 */
class WebhookSubscriptionResultBuilder
{
    /**
     * @var WebhookSubscriptionResult
     */
    private $instance;

    private function __construct(WebhookSubscriptionResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Webhook Subscription Result Builder object.
     */
    public static function init(): self
    {
        return new self(new WebhookSubscriptionResult());
    }

    /**
     * Sets token field.
     *
     * @param string|null $value
     */
    public function token(?string $value): self
    {
        $this->instance->setToken($value);
        return $this;
    }

    /**
     * Sets created field.
     *
     * @param \DateTime|null $value
     */
    public function created(?\DateTime $value): self
    {
        $this->instance->setCreated($value);
        return $this;
    }

    /**
     * Sets last Updated field.
     *
     * @param \DateTime|null $value
     */
    public function lastUpdated(?\DateTime $value): self
    {
        $this->instance->setLastUpdated($value);
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
     * Initializes a new Webhook Subscription Result object.
     */
    public function build(): WebhookSubscriptionResult
    {
        return CoreHelper::clone($this->instance);
    }
}
