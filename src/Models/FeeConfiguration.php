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

class FeeConfiguration implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $category;

    /**
     * @var FeeDistribution[]|null
     */
    private $distribution;

    /**
     * @var string|null
     */
    private $source;

    /**
     * @var float|null
     */
    private $totalAmount;

    /**
     * @var float|null
     */
    private $transactionAmount;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $valueAmount;

    /**
     * @var string|null
     */
    private $valueType;

    /**
     * Returns Category.
     * Category types
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * Sets Category.
     * Category types
     *
     * @maps category
     * @factory \PayQuickerSDKLib\Models\CategoryTypes::checkValue
     */
    public function setCategory(?string $category): void
    {
        $this->category = $category;
    }

    /**
     * Returns Distribution.
     *
     * @return FeeDistribution[]|null
     */
    public function getDistribution(): ?array
    {
        return $this->distribution;
    }

    /**
     * Sets Distribution.
     *
     * @maps distribution
     *
     * @param FeeDistribution[]|null $distribution
     */
    public function setDistribution(?array $distribution): void
    {
        $this->distribution = $distribution;
    }

    /**
     * Returns Source.
     * Fee source types
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * Sets Source.
     * Fee source types
     *
     * @maps source
     * @factory \PayQuickerSDKLib\Models\FeeSources::checkValue
     */
    public function setSource(?string $source): void
    {
        $this->source = $source;
    }

    /**
     * Returns Total Amount.
     * Total amount of money for all transactions
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }

    /**
     * Sets Total Amount.
     * Total amount of money for all transactions
     *
     * @maps totalAmount
     */
    public function setTotalAmount(?float $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * Returns Transaction Amount.
     * Total amount of money for the transaction
     */
    public function getTransactionAmount(): ?float
    {
        return $this->transactionAmount;
    }

    /**
     * Sets Transaction Amount.
     * Total amount of money for the transaction
     *
     * @maps transactionAmount
     */
    public function setTransactionAmount(?float $transactionAmount): void
    {
        $this->transactionAmount = $transactionAmount;
    }

    /**
     * Returns Type.
     * Fee types
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Fee types
     *
     * @maps type
     * @factory \PayQuickerSDKLib\Models\Fees::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Value Amount.
     * Value of the target resource
     */
    public function getValueAmount(): ?string
    {
        return $this->valueAmount;
    }

    /**
     * Sets Value Amount.
     * Value of the target resource
     *
     * @maps valueAmount
     */
    public function setValueAmount(?string $valueAmount): void
    {
        $this->valueAmount = $valueAmount;
    }

    /**
     * Returns Value Type.
     * Fee value types
     */
    public function getValueType(): ?string
    {
        return $this->valueType;
    }

    /**
     * Sets Value Type.
     * Fee value types
     *
     * @maps valueType
     * @factory \PayQuickerSDKLib\Models\FeeValues::checkValue
     */
    public function setValueType(?string $valueType): void
    {
        $this->valueType = $valueType;
    }

    /**
     * Converts the FeeConfiguration object to a human-readable string representation.
     *
     * @return string The string representation of the FeeConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'FeeConfiguration',
            [
                'category' => $this->category,
                'distribution' => $this->distribution,
                'source' => $this->source,
                'totalAmount' => $this->totalAmount,
                'transactionAmount' => $this->transactionAmount,
                'type' => $this->type,
                'valueAmount' => $this->valueAmount,
                'valueType' => $this->valueType,
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
        if (isset($this->category)) {
            $json['category']          = CategoryTypes::checkValue($this->category);
        }
        if (isset($this->distribution)) {
            $json['distribution']      = $this->distribution;
        }
        if (isset($this->source)) {
            $json['source']            = FeeSources::checkValue($this->source);
        }
        if (isset($this->totalAmount)) {
            $json['totalAmount']       = $this->totalAmount;
        }
        if (isset($this->transactionAmount)) {
            $json['transactionAmount'] = $this->transactionAmount;
        }
        if (isset($this->type)) {
            $json['type']              = Fees::checkValue($this->type);
        }
        if (isset($this->valueAmount)) {
            $json['valueAmount']       = $this->valueAmount;
        }
        if (isset($this->valueType)) {
            $json['valueType']         = FeeValues::checkValue($this->valueType);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
