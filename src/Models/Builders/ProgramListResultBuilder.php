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
use PayQuickerSDKLib\Models\ProgramListResult;
use PayQuickerSDKLib\Models\ProgramObject;

/**
 * Builder for model ProgramListResult
 *
 * @see ProgramListResult
 */
class ProgramListResultBuilder
{
    /**
     * @var ProgramListResult
     */
    private $instance;

    private function __construct(ProgramListResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Program List Result Builder object.
     *
     * @param ProgramObject[] $payload
     * @param ListMetadata $meta
     * @param HateoasSelfRef[] $links
     */
    public static function init(array $payload, ListMetadata $meta, array $links): self
    {
        return new self(new ProgramListResult($payload, $meta, $links));
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
     * Initializes a new Program List Result object.
     */
    public function build(): ProgramListResult
    {
        return CoreHelper::clone($this->instance);
    }
}
