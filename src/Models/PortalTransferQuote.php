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
class PortalTransferQuote implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $sourceToken = 'acct-3908ab5a-6ce1-474d-8b80-a63a7b147860';

    /**
     * @var string|null
     */
    private $programUserId;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $note;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var bool|null
     */
    private $autoAcceptQuote;

    /**
     * @var string|null
     */
    private $clientTransferId;

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
    private $transferLockSide;

    /**
     * @var string|null
     */
    private $transferMethodType;

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
     * Returns Program User Id.
     * [Program identifier](#/rest/models/structures/program-user-id) for the user
     */
    public function getProgramUserId(): ?string
    {
        return $this->programUserId;
    }

    /**
     * Sets Program User Id.
     * [Program identifier](#/rest/models/structures/program-user-id) for the user
     *
     * @maps programUserId
     */
    public function setProgramUserId(?string $programUserId): void
    {
        $this->programUserId = $programUserId;
    }

    /**
     * Returns Email.
     * Contact [email address](#/rest/models/structures/email-address) for the user account for the user
     * account
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     * Contact [email address](#/rest/models/structures/email-address) for the user account for the user
     * account
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
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
     * Returns Client Transfer Id.
     * [Unique value](#/rest/models/structures/client-transfer-id) provided by the client for the transfer,
     * utilized for reference and deduplication.
     */
    public function getClientTransferId(): ?string
    {
        return $this->clientTransferId;
    }

    /**
     * Sets Client Transfer Id.
     * [Unique value](#/rest/models/structures/client-transfer-id) provided by the client for the transfer,
     * utilized for reference and deduplication.
     *
     * @maps clientTransferId
     */
    public function setClientTransferId(?string $clientTransferId): void
    {
        $this->clientTransferId = $clientTransferId;
    }

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
     * Returns Transfer Lock Side.
     * Type of [lockside](page:additional-api-information/transfer-lockside-types) for transfers.
     */
    public function getTransferLockSide(): ?string
    {
        return $this->transferLockSide;
    }

    /**
     * Sets Transfer Lock Side.
     * Type of [lockside](page:additional-api-information/transfer-lockside-types) for transfers.
     *
     * @maps transferLockSide
     * @factory \PayQuickerSDKLib\Models\LockSideTypes::checkValue
     */
    public function setTransferLockSide(?string $transferLockSide): void
    {
        $this->transferLockSide = $transferLockSide;
    }

    /**
     * Returns Transfer Method Type.
     * Optional transfer methods applicable only to bank and e-wallet transfers.
     */
    public function getTransferMethodType(): ?string
    {
        return $this->transferMethodType;
    }

    /**
     * Sets Transfer Method Type.
     * Optional transfer methods applicable only to bank and e-wallet transfers.
     *
     * @maps transferMethodType
     * @factory \PayQuickerSDKLib\Models\TransferMethodTypes::checkValue
     */
    public function setTransferMethodType(?string $transferMethodType): void
    {
        $this->transferMethodType = $transferMethodType;
    }

    /**
     * Converts the PortalTransferQuote object to a human-readable string representation.
     *
     * @return string The string representation of the PortalTransferQuote object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PortalTransferQuote',
            [
                'sourceToken' => $this->sourceToken,
                'programUserId' => $this->programUserId,
                'email' => $this->email,
                'note' => $this->note,
                'memo' => $this->memo,
                'autoAcceptQuote' => $this->autoAcceptQuote,
                'clientTransferId' => $this->clientTransferId,
                'destinationAmount' => $this->destinationAmount,
                'destinationCurrency' => $this->destinationCurrency,
                'transferLockSide' => $this->transferLockSide,
                'transferMethodType' => $this->transferMethodType,
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
        if (isset($this->sourceToken)) {
            $json['sourceToken']         = $this->sourceToken;
        }
        if (isset($this->programUserId)) {
            $json['programUserId']       = $this->programUserId;
        }
        if (isset($this->email)) {
            $json['email']               = $this->email;
        }
        if (isset($this->note)) {
            $json['note']                = $this->note;
        }
        if (isset($this->memo)) {
            $json['memo']                = $this->memo;
        }
        if (isset($this->autoAcceptQuote)) {
            $json['autoAcceptQuote']     = $this->autoAcceptQuote;
        }
        if (isset($this->clientTransferId)) {
            $json['clientTransferId']    = $this->clientTransferId;
        }
        if (isset($this->destinationAmount)) {
            $json['destinationAmount']   = $this->destinationAmount;
        }
        if (isset($this->destinationCurrency)) {
            $json['destinationCurrency'] = Currencies::checkValue($this->destinationCurrency);
        }
        if (isset($this->transferLockSide)) {
            $json['transferLockSide']    = LockSideTypes::checkValue($this->transferLockSide);
        }
        if (isset($this->transferMethodType)) {
            $json['transferMethodType']  = TransferMethodTypes::checkValue($this->transferMethodType);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
