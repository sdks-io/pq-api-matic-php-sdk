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

/**
 * TODO
 */
class PortalPaymentJob implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $notBefore;

    /**
     * @var \DateTime|null
     */
    private $notAfter;

    /**
     * @var PortalPaymentJobQuote[]|null
     */
    private $items;

    /**
     * Returns Not Before.
     * [Transfer](#/rest/models/structures/not-before-or-after) is scheduled and will not process before
     * this time.
     */
    public function getNotBefore(): ?\DateTime
    {
        return $this->notBefore;
    }

    /**
     * Sets Not Before.
     * [Transfer](#/rest/models/structures/not-before-or-after) is scheduled and will not process before
     * this time.
     *
     * @maps notBefore
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setNotBefore(?\DateTime $notBefore): void
    {
        $this->notBefore = $notBefore;
    }

    /**
     * Returns Not After.
     * [Transfer](#/rest/models/structures/not-before-or-after) expires if not completed prior to this time.
     */
    public function getNotAfter(): ?\DateTime
    {
        return $this->notAfter;
    }

    /**
     * Sets Not After.
     * [Transfer](#/rest/models/structures/not-before-or-after) expires if not completed prior to this time.
     *
     * @maps notAfter
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setNotAfter(?\DateTime $notAfter): void
    {
        $this->notAfter = $notAfter;
    }

    /**
     * Returns Items.
     *
     * @return PortalPaymentJobQuote[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * Sets Items.
     *
     * @maps items
     *
     * @param PortalPaymentJobQuote[]|null $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
    }

    /**
     * Converts the PortalPaymentJob object to a human-readable string representation.
     *
     * @return string The string representation of the PortalPaymentJob object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PortalPaymentJob',
            [
                'notBefore' => $this->notBefore,
                'notAfter' => $this->notAfter,
                'items' => $this->items,
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
        if (isset($this->notBefore)) {
            $json['notBefore'] = DateTimeHelper::toRfc3339DateTime($this->notBefore);
        }
        if (isset($this->notAfter)) {
            $json['notAfter']  = DateTimeHelper::toRfc3339DateTime($this->notAfter);
        }
        if (isset($this->items)) {
            $json['items']     = $this->items;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
