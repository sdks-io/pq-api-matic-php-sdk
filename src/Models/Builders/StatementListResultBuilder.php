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
use PayQuickerSDKLib\Models\StatementListResult;
use PayQuickerSDKLib\Models\StatementObject;

/**
 * Builder for model StatementListResult
 *
 * @see StatementListResult
 */
class StatementListResultBuilder
{
    /**
     * @var StatementListResult
     */
    private $instance;

    private function __construct(StatementListResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Statement List Result Builder object.
     *
     * @param StatementObject[] $payload
     * @param ListMetadata $meta
     * @param HateoasSelfRef[] $links
     */
    public static function init(array $payload, ListMetadata $meta, array $links): self
    {
        return new self(new StatementListResult($payload, $meta, $links));
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
     * Initializes a new Statement List Result object.
     */
    public function build(): StatementListResult
    {
        return CoreHelper::clone($this->instance);
    }
}
