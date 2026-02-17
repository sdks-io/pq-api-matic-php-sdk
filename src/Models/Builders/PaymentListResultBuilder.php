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
use PayQuickerSDKLib\Models\ListMetadata;
use PayQuickerSDKLib\Models\PaymentListResult;
use PayQuickerSDKLib\Models\PaymentObject;

/**
 * Builder for model PaymentListResult
 *
 * @see PaymentListResult
 */
class PaymentListResultBuilder
{
    /**
     * @var PaymentListResult
     */
    private $instance;

    private function __construct(PaymentListResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payment List Result Builder object.
     *
     * @param PaymentObject[] $payload
     * @param ListMetadata $meta
     * @param HateoasSelfRef[] $links
     */
    public static function init(array $payload, ListMetadata $meta, array $links): self
    {
        return new self(new PaymentListResult($payload, $meta, $links));
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
     * Initializes a new Payment List Result object.
     */
    public function build(): PaymentListResult
    {
        return CoreHelper::clone($this->instance);
    }
}
