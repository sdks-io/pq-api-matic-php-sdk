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

class UpdatePrepaidCard implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $cardPackage;

    /**
     * @var string|null
     */
    private $status;

    /**
     * Returns Card Package.
     * [Package](#/rest/models/structures/prepaid-card-package) for the card being displayed, including
     * artwork, packaging, and delivery method
     */
    public function getCardPackage(): ?string
    {
        return $this->cardPackage;
    }

    /**
     * Sets Card Package.
     * [Package](#/rest/models/structures/prepaid-card-package) for the card being displayed, including
     * artwork, packaging, and delivery method
     *
     * @maps cardPackage
     */
    public function setCardPackage(?string $cardPackage): void
    {
        $this->cardPackage = $cardPackage;
    }

    /**
     * Returns Status.
     * Current [status](#/rest/models/structures/prepaid-card-status) of the prepaid card
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Current [status](#/rest/models/structures/prepaid-card-status) of the prepaid card
     *
     * @maps status
     * @factory \PayQuickerSDKLib\Models\PrepaidCardStatuses::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Converts the UpdatePrepaidCard object to a human-readable string representation.
     *
     * @return string The string representation of the UpdatePrepaidCard object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UpdatePrepaidCard',
            [
                'cardPackage' => $this->cardPackage,
                'status' => $this->status,
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
        if (isset($this->cardPackage)) {
            $json['cardPackage'] = $this->cardPackage;
        }
        if (isset($this->status)) {
            $json['status']      = PrepaidCardStatuses::checkValue($this->status);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
