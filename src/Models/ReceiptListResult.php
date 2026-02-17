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

class ReceiptListResult implements \JsonSerializable
{
    /**
     * @var ReceiptObject[]
     */
    private $payload;

    /**
     * @var ListMetadata
     */
    private $meta;

    /**
     * @var HateoasSelfRef[]
     */
    private $links;

    /**
     * @param ReceiptObject[] $payload
     * @param ListMetadata $meta
     * @param HateoasSelfRef[] $links
     */
    public function __construct(array $payload, ListMetadata $meta, array $links)
    {
        $this->payload = $payload;
        $this->meta = $meta;
        $this->links = $links;
    }

    /**
     * Returns Payload.
     *
     * @return ReceiptObject[]
     */
    public function getPayload(): array
    {
        return $this->payload;
    }

    /**
     * Sets Payload.
     *
     * @required
     * @maps payload
     *
     * @param ReceiptObject[] $payload
     */
    public function setPayload(array $payload): void
    {
        $this->payload = $payload;
    }

    /**
     * Returns Meta.
     */
    public function getMeta(): ListMetadata
    {
        return $this->meta;
    }

    /**
     * Sets Meta.
     *
     * @required
     * @maps meta
     */
    public function setMeta(ListMetadata $meta): void
    {
        $this->meta = $meta;
    }

    /**
     * Returns Links.
     *
     * @return HateoasSelfRef[]
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * Sets Links.
     *
     * @required
     * @maps links
     *
     * @param HateoasSelfRef[] $links
     */
    public function setLinks(array $links): void
    {
        $this->links = $links;
    }

    /**
     * Converts the ReceiptListResult object to a human-readable string representation.
     *
     * @return string The string representation of the ReceiptListResult object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ReceiptListResult',
            [
                'payload' => $this->payload,
                'meta' => $this->meta,
                'links' => $this->links,
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
        $json['payload'] = $this->payload;
        $json['meta']    = $this->meta;
        $json['links']   = $this->links;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
