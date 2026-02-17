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

class ReceiptResult implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $token = 'rcpt-b7fda294-8d3a-48e8-9a11-ef7be07a732c';

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * @var string|null
     */
    private $sign;

    /**
     * @var string|null
     */
    private $sourceToken = 'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860';

    /**
     * @var string|null
     */
    private $destinationToken = 'dest-631b200f-665d-4dbe-bd01-3063c9dec97d';

    /**
     * @var float|null
     */
    private $amount = 1.02;

    /**
     * @var string|null
     */
    private $currency = Currencies::USD;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var ReceiptDescriptions[]|null
     */
    private $descriptions;

    /**
     * @var DeliveryDetails|null
     */
    private $deliveryDetails;

    /**
     * @var ReceiptDetails|null
     */
    private $details;

    /**
     * @var FxRate|null
     */
    private $fxRate;

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
     * Auto-generated unique identifier representing a receipt, prefixed with `rcpt-`.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * Auto-generated unique identifier representing a receipt, prefixed with `rcpt-`.
     *
     * @maps token
     */
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }

    /**
     * Returns Type.
     * [Transfer type](#/rest/models/structures/transfer-type)
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * [Transfer type](#/rest/models/structures/transfer-type)
     *
     * @maps type
     * @factory \PayQuickerSDKLib\Models\TransferTypes::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Created On.
     * Time object was [created](#/rest/models/structures/created-on)
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * Time object was [created](#/rest/models/structures/created-on)
     *
     * @maps createdOn
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(?\DateTime $createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Returns Sign.
     * Receipt sign types
     */
    public function getSign(): ?string
    {
        return $this->sign;
    }

    /**
     * Sets Sign.
     * Receipt sign types
     *
     * @maps sign
     * @factory \PayQuickerSDKLib\Models\Signs::checkValue
     */
    public function setSign(?string $sign): void
    {
        $this->sign = $sign;
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
     * Returns Destination Token.
     * Unique identifier representing the [destination of funds](#/rest/models/structures/destination-
     * token)
     */
    public function getDestinationToken(): ?string
    {
        return $this->destinationToken;
    }

    /**
     * Sets Destination Token.
     * Unique identifier representing the [destination of funds](#/rest/models/structures/destination-
     * token)
     *
     * @maps destinationToken
     */
    public function setDestinationToken(?string $destinationToken): void
    {
        $this->destinationToken = $destinationToken;
    }

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
     * Returns Status.
     * Receipt status types
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Receipt status types
     *
     * @maps status
     * @factory \PayQuickerSDKLib\Models\ReceiptStatuses::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Descriptions.
     *
     * @return ReceiptDescriptions[]|null
     */
    public function getDescriptions(): ?array
    {
        return $this->descriptions;
    }

    /**
     * Sets Descriptions.
     *
     * @maps descriptions
     *
     * @param ReceiptDescriptions[]|null $descriptions
     */
    public function setDescriptions(?array $descriptions): void
    {
        $this->descriptions = $descriptions;
    }

    /**
     * Returns Delivery Details.
     * The delivery details of a Bank transfer with the minimum and maximum delivery in minutes or the
     * expected delivery time.
     */
    public function getDeliveryDetails(): ?DeliveryDetails
    {
        return $this->deliveryDetails;
    }

    /**
     * Sets Delivery Details.
     * The delivery details of a Bank transfer with the minimum and maximum delivery in minutes or the
     * expected delivery time.
     *
     * @maps deliveryDetails
     */
    public function setDeliveryDetails(?DeliveryDetails $deliveryDetails): void
    {
        $this->deliveryDetails = $deliveryDetails;
    }

    /**
     * Returns Details.
     */
    public function getDetails(): ?ReceiptDetails
    {
        return $this->details;
    }

    /**
     * Sets Details.
     *
     * @maps details
     */
    public function setDetails(?ReceiptDetails $details): void
    {
        $this->details = $details;
    }

    /**
     * Returns Fx Rate.
     * Exchange rate
     */
    public function getFxRate(): ?FxRate
    {
        return $this->fxRate;
    }

    /**
     * Sets Fx Rate.
     * Exchange rate
     *
     * @maps fxRate
     */
    public function setFxRate(?FxRate $fxRate): void
    {
        $this->fxRate = $fxRate;
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
     * Converts the ReceiptResult object to a human-readable string representation.
     *
     * @return string The string representation of the ReceiptResult object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ReceiptResult',
            [
                'token' => $this->token,
                'type' => $this->type,
                'createdOn' => $this->createdOn,
                'sign' => $this->sign,
                'sourceToken' => $this->sourceToken,
                'destinationToken' => $this->destinationToken,
                'amount' => $this->amount,
                'currency' => $this->currency,
                'status' => $this->status,
                'descriptions' => $this->descriptions,
                'deliveryDetails' => $this->deliveryDetails,
                'details' => $this->details,
                'fxRate' => $this->fxRate,
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
            $json['token']            = $this->token;
        }
        if (isset($this->type)) {
            $json['type']             = TransferTypes::checkValue($this->type);
        }
        if (isset($this->createdOn)) {
            $json['createdOn']        = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->sign)) {
            $json['sign']             = Signs::checkValue($this->sign);
        }
        if (isset($this->sourceToken)) {
            $json['sourceToken']      = $this->sourceToken;
        }
        if (isset($this->destinationToken)) {
            $json['destinationToken'] = $this->destinationToken;
        }
        if (isset($this->amount)) {
            $json['amount']           = $this->amount;
        }
        if (isset($this->currency)) {
            $json['currency']         = Currencies::checkValue($this->currency);
        }
        if (isset($this->status)) {
            $json['status']           = ReceiptStatuses::checkValue($this->status);
        }
        if (isset($this->descriptions)) {
            $json['descriptions']     = $this->descriptions;
        }
        if (isset($this->deliveryDetails)) {
            $json['deliveryDetails']  = $this->deliveryDetails;
        }
        if (isset($this->details)) {
            $json['details']          = $this->details;
        }
        if (isset($this->fxRate)) {
            $json['fxRate']           = $this->fxRate;
        }
        if (isset($this->links)) {
            $json['links']            = $this->links;
        }
        if (isset($this->meta)) {
            $json['meta']             = $this->meta;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
