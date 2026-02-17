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
use PayQuickerSDKLib\Models\IdvCheckListResult;
use PayQuickerSDKLib\Models\IdvCheckObject;
use PayQuickerSDKLib\Models\ListMetadata;

/**
 * Builder for model IdvCheckListResult
 *
 * @see IdvCheckListResult
 */
class IdvCheckListResultBuilder
{
    /**
     * @var IdvCheckListResult
     */
    private $instance;

    private function __construct(IdvCheckListResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Idv Check List Result Builder object.
     *
     * @param IdvCheckObject[] $payload
     * @param HateoasSelfRef[] $links
     */
    public static function init(array $payload, array $links): self
    {
        return new self(new IdvCheckListResult($payload, $links));
    }

    /**
     * Sets meta field.
     *
     * @param ListMetadata|null $value
     */
    public function meta(?ListMetadata $value): self
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
     * Initializes a new Idv Check List Result object.
     */
    public function build(): IdvCheckListResult
    {
        return CoreHelper::clone($this->instance);
    }
}
