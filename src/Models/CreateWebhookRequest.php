<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models;

use PayQuickerSDKLib\ApiHelper;
use stdClass;

class CreateWebhookRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $namespace;

    /**
     * @var string|null
     */
    private $url;

    /**
     * Returns Namespace.
     * Namespace used to identify and refer to the object
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    /**
     * Sets Namespace.
     * Namespace used to identify and refer to the object
     *
     * @maps namespace
     * @factory \PayQuickerSDKLib\Models\WebhookNamespaces::checkValue
     */
    public function setNamespace(?string $namespace): void
    {
        $this->namespace = $namespace;
    }

    /**
     * Returns Url.
     * Full path of the URI used for this object
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * Full path of the URI used for this object
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * Converts the CreateWebhookRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CreateWebhookRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateWebhookRequest',
            [
                'namespace' => $this->namespace,
                'url' => $this->url,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->namespace)) {
            $json['namespace'] = WebhookNamespaces::checkValue($this->namespace);
        }
        if (isset($this->url)) {
            $json['url']       = $this->url;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
