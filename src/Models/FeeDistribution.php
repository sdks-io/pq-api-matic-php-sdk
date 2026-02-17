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

class FeeDistribution implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $amount = 1.02;

    /**
     * @var string|null
     */
    private $currency = Currencies::USD;

    /**
     * @var ReceiptDescriptions[]|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $formattedAmount = '$0.05 USD';

    /**
     * @var float|null
     */
    private $percentage;

    /**
     * @var string|null
     */
    private $responsibility;

    /**
     * @var string|null
     */
    private $responsibilitySource;

    /**
     * @var string|null
     */
    private $sourceToken = 'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860';

    /**
     * Returns Amount.
     * Allocated money to be sent in the transaction.
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Allocated money to be sent in the transaction.
     *
     * @maps amount
     */
    public function setAmount(?float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     *
     * @maps currency
     * @factory \PayQuickerSDKLib\Models\Currencies::checkValue
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Description.
     *
     * @return ReceiptDescriptions[]|null
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @maps description
     *
     * @param ReceiptDescriptions[]|null $description
     */
    public function setDescription(?array $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Formatted Amount.
     * Combination of the amount and currency type
     */
    public function getFormattedAmount(): ?string
    {
        return $this->formattedAmount;
    }

    /**
     * Sets Formatted Amount.
     * Combination of the amount and currency type
     *
     * @maps formattedAmount
     */
    public function setFormattedAmount(?string $formattedAmount): void
    {
        $this->formattedAmount = $formattedAmount;
    }

    /**
     * Returns Percentage.
     * Fee percentage that the responsible account pays
     */
    public function getPercentage(): ?float
    {
        return $this->percentage;
    }

    /**
     * Sets Percentage.
     * Fee percentage that the responsible account pays
     *
     * @maps percentage
     */
    public function setPercentage(?float $percentage): void
    {
        $this->percentage = $percentage;
    }

    /**
     * Returns Responsibility.
     * Fee responsibility types
     */
    public function getResponsibility(): ?string
    {
        return $this->responsibility;
    }

    /**
     * Sets Responsibility.
     * Fee responsibility types
     *
     * @maps responsibility
     * @factory \PayQuickerSDKLib\Models\FeeResponsibilityParties::checkValue
     */
    public function setResponsibility(?string $responsibility): void
    {
        $this->responsibility = $responsibility;
    }

    /**
     * Returns Responsibility Source.
     * Fee responsibility source types
     */
    public function getResponsibilitySource(): ?string
    {
        return $this->responsibilitySource;
    }

    /**
     * Sets Responsibility Source.
     * Fee responsibility source types
     *
     * @maps responsibilitySource
     * @factory \PayQuickerSDKLib\Models\FeeResponsibilitySources::checkValue
     */
    public function setResponsibilitySource(?string $responsibilitySource): void
    {
        $this->responsibilitySource = $responsibilitySource;
    }

    /**
     * Returns Source Token.
     * Unique identifier representing the [source of funds](#/rest/models/structures/source-token)
     */
    public function getSourceToken(): ?string
    {
        return $this->sourceToken;
    }

    /**
     * Sets Source Token.
     * Unique identifier representing the [source of funds](#/rest/models/structures/source-token)
     *
     * @maps sourceToken
     */
    public function setSourceToken(?string $sourceToken): void
    {
        $this->sourceToken = $sourceToken;
    }

    /**
     * Converts the FeeDistribution object to a human-readable string representation.
     *
     * @return string The string representation of the FeeDistribution object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'FeeDistribution',
            [
                'amount' => $this->amount,
                'currency' => $this->currency,
                'description' => $this->description,
                'formattedAmount' => $this->formattedAmount,
                'percentage' => $this->percentage,
                'responsibility' => $this->responsibility,
                'responsibilitySource' => $this->responsibilitySource,
                'sourceToken' => $this->sourceToken,
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
        if (isset($this->amount)) {
            $json['amount']               = $this->amount;
        }
        if (isset($this->currency)) {
            $json['currency']             = Currencies::checkValue($this->currency);
        }
        if (isset($this->description)) {
            $json['description']          = $this->description;
        }
        if (isset($this->formattedAmount)) {
            $json['formattedAmount']      = $this->formattedAmount;
        }
        if (isset($this->percentage)) {
            $json['percentage']           = $this->percentage;
        }
        if (isset($this->responsibility)) {
            $json['responsibility']       = FeeResponsibilityParties::checkValue($this->responsibility);
        }
        if (isset($this->responsibilitySource)) {
            $json['responsibilitySource'] = FeeResponsibilitySources::checkValue($this->responsibilitySource);
        }
        if (isset($this->sourceToken)) {
            $json['sourceToken']          = $this->sourceToken;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
