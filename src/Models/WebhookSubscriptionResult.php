<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models;

use PayQuickerSDKLib\ApiHelper;
use PayQuickerSDKLib\Utils\DateTimeHelper;
use stdClass;

class WebhookSubscriptionResult implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $token;

    /**
     * @var \DateTime|null
     */
    private $created;

    /**
     * @var \DateTime|null
     */
    private $lastUpdated;

    /**
     * @var string|null
     */
    private $url;

    /**
     * @var string|null
     */
    private $namespace;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var HateoasSelfRef[]|null
     */
    private $links;

    /**
     * @var MetadataItems|null
     */
    private $meta;

    /**
     * Returns Token.
     * [Token](#/rest/models/structures/token) representing the resource
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * [Token](#/rest/models/structures/token) representing the resource
     *
     * @maps token
     */
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }

    /**
     * Returns Created.
     * Time object was [created](#/rest/models/structures/created-on)
     */
    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }

    /**
     * Sets Created.
     * Time object was [created](#/rest/models/structures/created-on)
     *
     * @maps created
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreated(?\DateTime $created): void
    {
        $this->created = $created;
    }

    /**
     * Returns Last Updated.
     * Date and time that the object was last updated
     */
    public function getLastUpdated(): ?\DateTime
    {
        return $this->lastUpdated;
    }

    /**
     * Sets Last Updated.
     * Date and time that the object was last updated
     *
     * @maps lastUpdated
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLastUpdated(?\DateTime $lastUpdated): void
    {
        $this->lastUpdated = $lastUpdated;
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
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     * @factory \PayQuickerSDKLib\Models\WebhookSubscriptionStatuses::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Links.
     *
     * @return HateoasSelfRef[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * Sets Links.
     *
     * @maps links
     *
     * @param HateoasSelfRef[]|null $links
     */
    public function setLinks(?array $links): void
    {
        $this->links = $links;
    }

    /**
     * Returns Meta.
     */
    public function getMeta(): ?MetadataItems
    {
        return $this->meta;
    }

    /**
     * Sets Meta.
     *
     * @maps meta
     */
    public function setMeta(?MetadataItems $meta): void
    {
        $this->meta = $meta;
    }

    /**
     * Converts the WebhookSubscriptionResult object to a human-readable string representation.
     *
     * @return string The string representation of the WebhookSubscriptionResult object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WebhookSubscriptionResult',
            [
                'token' => $this->token,
                'created' => $this->created,
                'lastUpdated' => $this->lastUpdated,
                'url' => $this->url,
                'namespace' => $this->namespace,
                'status' => $this->status,
                'links' => $this->links,
                'meta' => $this->meta,
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
        if (isset($this->token)) {
            $json['token']       = $this->token;
        }
        if (isset($this->created)) {
            $json['created']     = DateTimeHelper::toRfc3339DateTime($this->created);
        }
        if (isset($this->lastUpdated)) {
            $json['lastUpdated'] = DateTimeHelper::toRfc3339DateTime($this->lastUpdated);
        }
        if (isset($this->url)) {
            $json['url']         = $this->url;
        }
        if (isset($this->namespace)) {
            $json['namespace']   = WebhookNamespaces::checkValue($this->namespace);
        }
        if (isset($this->status)) {
            $json['status']      = WebhookSubscriptionStatuses::checkValue($this->status);
        }
        if (isset($this->links)) {
            $json['links']       = $this->links;
        }
        if (isset($this->meta)) {
            $json['meta']        = $this->meta;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
