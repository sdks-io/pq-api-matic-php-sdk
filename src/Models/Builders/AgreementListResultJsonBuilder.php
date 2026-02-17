<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\AgreementListResultJson;
use PayQuickerSDKLib\Models\AgreementObject;
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\ListMetadata;

/**
 * Builder for model AgreementListResultJson
 *
 * @see AgreementListResultJson
 */
class AgreementListResultJsonBuilder
{
    /**
     * @var AgreementListResultJson
     */
    private $instance;

    private function __construct(AgreementListResultJson $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Agreement List Result Json Builder object.
     *
     * @param AgreementObject[] $payload
     * @param ListMetadata $meta
     * @param HateoasSelfRef[] $links
     */
    public static function init(array $payload, ListMetadata $meta, array $links): self
    {
        return new self(new AgreementListResultJson($payload, $meta, $links));
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
     * Initializes a new Agreement List Result Json object.
     */
    public function build(): AgreementListResultJson
    {
        return CoreHelper::clone($this->instance);
    }
}
