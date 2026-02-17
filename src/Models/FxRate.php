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

/**
 * Exchange rate
 */
class FxRate implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $destinationAmount;

    /**
     * @var string|null
     */
    private $destinationCurrency = Currencies::USD;

    /**
     * @var string|null
     */
    private $destinationFormattedAmount = '$0.05 USD';

    /**
     * @var float|null
     */
    private $rate;

    /**
     * @var float|null
     */
    private $sourceAmount = 1.02;

    /**
     * @var string|null
     */
    private $sourceCurrency = Currencies::USD;

    /**
     * @var string|null
     */
    private $sourceFormattedAmount = '$0.05 USD';

    /**
     * Returns Destination Amount.
     * Allocated money to be sent in the transaction.
     */
    public function getDestinationAmount(): ?float
    {
        return $this->destinationAmount;
    }

    /**
     * Sets Destination Amount.
     * Allocated money to be sent in the transaction.
     *
     * @maps destinationAmount
     */
    public function setDestinationAmount(?float $destinationAmount): void
    {
        $this->destinationAmount = $destinationAmount;
    }

    /**
     * Returns Destination Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     */
    public function getDestinationCurrency(): ?string
    {
        return $this->destinationCurrency;
    }

    /**
     * Sets Destination Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     *
     * @maps destinationCurrency
     * @factory \PayQuickerSDKLib\Models\Currencies::checkValue
     */
    public function setDestinationCurrency(?string $destinationCurrency): void
    {
        $this->destinationCurrency = $destinationCurrency;
    }

    /**
     * Returns Destination Formatted Amount.
     * Combination of the amount and currency type
     */
    public function getDestinationFormattedAmount(): ?string
    {
        return $this->destinationFormattedAmount;
    }

    /**
     * Sets Destination Formatted Amount.
     * Combination of the amount and currency type
     *
     * @maps destinationFormattedAmount
     */
    public function setDestinationFormattedAmount(?string $destinationFormattedAmount): void
    {
        $this->destinationFormattedAmount = $destinationFormattedAmount;
    }

    /**
     * Returns Rate.
     * Exchange [rate](#/rest/models/structures/rate)
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }

    /**
     * Sets Rate.
     * Exchange [rate](#/rest/models/structures/rate)
     *
     * @maps rate
     */
    public function setRate(?float $rate): void
    {
        $this->rate = $rate;
    }

    /**
     * Returns Source Amount.
     * Allocated money to be sent in the transaction.
     */
    public function getSourceAmount(): ?float
    {
        return $this->sourceAmount;
    }

    /**
     * Sets Source Amount.
     * Allocated money to be sent in the transaction.
     *
     * @maps sourceAmount
     */
    public function setSourceAmount(?float $sourceAmount): void
    {
        $this->sourceAmount = $sourceAmount;
    }

    /**
     * Returns Source Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     */
    public function getSourceCurrency(): ?string
    {
        return $this->sourceCurrency;
    }

    /**
     * Sets Source Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     *
     * @maps sourceCurrency
     * @factory \PayQuickerSDKLib\Models\Currencies::checkValue
     */
    public function setSourceCurrency(?string $sourceCurrency): void
    {
        $this->sourceCurrency = $sourceCurrency;
    }

    /**
     * Returns Source Formatted Amount.
     * Combination of the amount and currency type
     */
    public function getSourceFormattedAmount(): ?string
    {
        return $this->sourceFormattedAmount;
    }

    /**
     * Sets Source Formatted Amount.
     * Combination of the amount and currency type
     *
     * @maps sourceFormattedAmount
     */
    public function setSourceFormattedAmount(?string $sourceFormattedAmount): void
    {
        $this->sourceFormattedAmount = $sourceFormattedAmount;
    }

    /**
     * Converts the FxRate object to a human-readable string representation.
     *
     * @return string The string representation of the FxRate object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'FxRate',
            [
                'destinationAmount' => $this->destinationAmount,
                'destinationCurrency' => $this->destinationCurrency,
                'destinationFormattedAmount' => $this->destinationFormattedAmount,
                'rate' => $this->rate,
                'sourceAmount' => $this->sourceAmount,
                'sourceCurrency' => $this->sourceCurrency,
                'sourceFormattedAmount' => $this->sourceFormattedAmount,
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
        if (isset($this->destinationAmount)) {
            $json['destinationAmount']          = $this->destinationAmount;
        }
        if (isset($this->destinationCurrency)) {
            $json['destinationCurrency']        = Currencies::checkValue($this->destinationCurrency);
        }
        if (isset($this->destinationFormattedAmount)) {
            $json['destinationFormattedAmount'] = $this->destinationFormattedAmount;
        }
        if (isset($this->rate)) {
            $json['rate']                       = $this->rate;
        }
        if (isset($this->sourceAmount)) {
            $json['sourceAmount']               = $this->sourceAmount;
        }
        if (isset($this->sourceCurrency)) {
            $json['sourceCurrency']             = Currencies::checkValue($this->sourceCurrency);
        }
        if (isset($this->sourceFormattedAmount)) {
            $json['sourceFormattedAmount']      = $this->sourceFormattedAmount;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
