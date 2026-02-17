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
 * Response from a invitation request
 */
class GatewaySpendbackQuote implements \JsonSerializable
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
     * @var string|null
     */
    private $sourceToken = 'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860';

    /**
     * @var string|null
     */
    private $destinationToken = 'dest-631b200f-665d-4dbe-bd01-3063c9dec97d';

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $note;

    /**
     * @var string|null
     */
    private $clientSpendbackId;

    /**
     * @var bool|null
     */
    private $autoAcceptQuote;

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
     * Returns Memo.
     * Optional internal [memo](#/rest/models/structures/memo) not visible to the user
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * Optional internal [memo](#/rest/models/structures/memo) not visible to the user
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Note.
     * [Optional comments](#/rest/models/structures/notes) visible to the user
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * Sets Note.
     * [Optional comments](#/rest/models/structures/notes) visible to the user
     *
     * @maps note
     */
    public function setNote(?string $note): void
    {
        $this->note = $note;
    }

    /**
     * Returns Client Spendback Id.
     * [Unique value](#/rest/models/structures/client-transfer-id) provided by the client for the
     * spendback
     */
    public function getClientSpendbackId(): ?string
    {
        return $this->clientSpendbackId;
    }

    /**
     * Sets Client Spendback Id.
     * [Unique value](#/rest/models/structures/client-transfer-id) provided by the client for the
     * spendback
     *
     * @maps clientSpendbackId
     */
    public function setClientSpendbackId(?string $clientSpendbackId): void
    {
        $this->clientSpendbackId = $clientSpendbackId;
    }

    /**
     * Returns Auto Accept Quote.
     * Determines whether the quote is [automatically accepted](#/rest/models/structures/auto-accept-quote)
     * or if a `POST` utilizing the token for the quote is required.
     */
    public function getAutoAcceptQuote(): ?bool
    {
        return $this->autoAcceptQuote;
    }

    /**
     * Sets Auto Accept Quote.
     * Determines whether the quote is [automatically accepted](#/rest/models/structures/auto-accept-quote)
     * or if a `POST` utilizing the token for the quote is required.
     *
     * @maps autoAcceptQuote
     */
    public function setAutoAcceptQuote(?bool $autoAcceptQuote): void
    {
        $this->autoAcceptQuote = $autoAcceptQuote;
    }

    /**
     * Converts the GatewaySpendbackQuote object to a human-readable string representation.
     *
     * @return string The string representation of the GatewaySpendbackQuote object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GatewaySpendbackQuote',
            [
                'amount' => $this->amount,
                'currency' => $this->currency,
                'sourceToken' => $this->sourceToken,
                'destinationToken' => $this->destinationToken,
                'memo' => $this->memo,
                'note' => $this->note,
                'clientSpendbackId' => $this->clientSpendbackId,
                'autoAcceptQuote' => $this->autoAcceptQuote,
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
            $json['amount']            = $this->amount;
        }
        if (isset($this->currency)) {
            $json['currency']          = Currencies::checkValue($this->currency);
        }
        if (isset($this->sourceToken)) {
            $json['sourceToken']       = $this->sourceToken;
        }
        if (isset($this->destinationToken)) {
            $json['destinationToken']  = $this->destinationToken;
        }
        if (isset($this->memo)) {
            $json['memo']              = $this->memo;
        }
        if (isset($this->note)) {
            $json['note']              = $this->note;
        }
        if (isset($this->clientSpendbackId)) {
            $json['clientSpendbackId'] = $this->clientSpendbackId;
        }
        if (isset($this->autoAcceptQuote)) {
            $json['autoAcceptQuote']   = $this->autoAcceptQuote;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
