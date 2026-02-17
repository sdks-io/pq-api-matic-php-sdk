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
 * The delivery details of a Bank transfer with the minimum and maximum delivery in minutes or the
 * expected delivery time.
 */
class DeliveryDetails implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $minimumDeliveryMinutes;

    /**
     * @var int|null
     */
    private $maximumDeliveryMinutes;

    /**
     * @var string|null
     */
    private $expectedDelivery;

    /**
     * @var \DateTime|null
     */
    private $expectedDeliveryTime;

    /**
     * Returns Minimum Delivery Minutes.
     */
    public function getMinimumDeliveryMinutes(): ?int
    {
        return $this->minimumDeliveryMinutes;
    }

    /**
     * Sets Minimum Delivery Minutes.
     *
     * @maps minimumDeliveryMinutes
     */
    public function setMinimumDeliveryMinutes(?int $minimumDeliveryMinutes): void
    {
        $this->minimumDeliveryMinutes = $minimumDeliveryMinutes;
    }

    /**
     * Returns Maximum Delivery Minutes.
     */
    public function getMaximumDeliveryMinutes(): ?int
    {
        return $this->maximumDeliveryMinutes;
    }

    /**
     * Sets Maximum Delivery Minutes.
     *
     * @maps maximumDeliveryMinutes
     */
    public function setMaximumDeliveryMinutes(?int $maximumDeliveryMinutes): void
    {
        $this->maximumDeliveryMinutes = $maximumDeliveryMinutes;
    }

    /**
     * Returns Expected Delivery.
     * Transfer expected delivery types
     */
    public function getExpectedDelivery(): ?string
    {
        return $this->expectedDelivery;
    }

    /**
     * Sets Expected Delivery.
     * Transfer expected delivery types
     *
     * @maps expectedDelivery
     * @factory \PayQuickerSDKLib\Models\ExpectedDeliveryTypes::checkValue
     */
    public function setExpectedDelivery(?string $expectedDelivery): void
    {
        $this->expectedDelivery = $expectedDelivery;
    }

    /**
     * Returns Expected Delivery Time.
     * The time of the expected delivery. Does not include the date.
     */
    public function getExpectedDeliveryTime(): ?\DateTime
    {
        return $this->expectedDeliveryTime;
    }

    /**
     * Sets Expected Delivery Time.
     * The time of the expected delivery. Does not include the date.
     *
     * @maps expectedDeliveryTime
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setExpectedDeliveryTime(?\DateTime $expectedDeliveryTime): void
    {
        $this->expectedDeliveryTime = $expectedDeliveryTime;
    }

    /**
     * Converts the DeliveryDetails object to a human-readable string representation.
     *
     * @return string The string representation of the DeliveryDetails object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'DeliveryDetails',
            [
                'minimumDeliveryMinutes' => $this->minimumDeliveryMinutes,
                'maximumDeliveryMinutes' => $this->maximumDeliveryMinutes,
                'expectedDelivery' => $this->expectedDelivery,
                'expectedDeliveryTime' => $this->expectedDeliveryTime,
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
        if (isset($this->minimumDeliveryMinutes)) {
            $json['minimumDeliveryMinutes'] = $this->minimumDeliveryMinutes;
        }
        if (isset($this->maximumDeliveryMinutes)) {
            $json['maximumDeliveryMinutes'] = $this->maximumDeliveryMinutes;
        }
        if (isset($this->expectedDelivery)) {
            $json['expectedDelivery']       = ExpectedDeliveryTypes::checkValue($this->expectedDelivery);
        }
        if (isset($this->expectedDeliveryTime)) {
            $json['expectedDeliveryTime']   = DateTimeHelper::toRfc3339DateTime($this->expectedDeliveryTime);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
