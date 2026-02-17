<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\DocumentListResult;
use PayQuickerSDKLib\Models\DocumentObject;
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\ListMetadata;

/**
 * Builder for model DocumentListResult
 *
 * @see DocumentListResult
 */
class DocumentListResultBuilder
{
    /**
     * @var DocumentListResult
     */
    private $instance;

    private function __construct(DocumentListResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Document List Result Builder object.
     *
     * @param DocumentObject[] $payload
     * @param HateoasSelfRef[] $links
     */
    public static function init(array $payload, array $links): self
    {
        return new self(new DocumentListResult($payload, $links));
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
     * Initializes a new Document List Result object.
     */
    public function build(): DocumentListResult
    {
        return CoreHelper::clone($this->instance);
    }
}
