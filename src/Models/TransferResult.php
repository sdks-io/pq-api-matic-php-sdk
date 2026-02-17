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

class TransferResult implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $token;

    /**
     * @var string|null
     */
    private $portalId;

    /**
     * @var string|null
     */
    private $clientTransferId;

    /**
     * @var \DateTime|null
     */
    private $created;

    /**
     * @var DeliveryDetails|null
     */
    private $deliveryDetails;

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
    private $destinationToken = 'dest-631b200f-665d-4dbe-bd01-3063c9dec97d';

    /**
     * @var FeeDistribution|null
     */
    private $fee;

    /**
     * @var FxRate|null
     */
    private $fxRate;

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
    private $status;

    /**
     * @var string|null
     */
    private $receiptToken = 'rcpt-b7fda294-8d3a-48e8-9a11-ef7be07a732c';

    /**
     * @var string|null
     */
    private $transferLockSide;

    /**
     * @var string|null
     */
    private $transferMethodType;

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
     * [Token](#/rest/models/structures/token) representing the resource
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * [Token](#/rest/models/structures/token) representing the resource
     *
     * @maps token
     */
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }

    /**
     * Returns Portal Id.
     * Reference ID in the PayQuicker Hosted Portal, if applicable.
     */
    public function getPortalId(): ?string
    {
        return $this->portalId;
    }

    /**
     * Sets Portal Id.
     * Reference ID in the PayQuicker Hosted Portal, if applicable.
     *
     * @maps portalId
     */
    public function setPortalId(?string $portalId): void
    {
        $this->portalId = $portalId;
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
     * Returns Created.
     * Time object was [created](#/rest/models/structures/created-on)
     */
    public function getCreated(): ?\DateTime
    {
        return $this->created;
    }

    /**
     * Sets Created.
     * Time object was [created](#/rest/models/structures/created-on)
     *
     * @maps created
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreated(?\DateTime $created): void
    {
        $this->created = $created;
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
     * Returns Fee.
     */
    public function getFee(): ?FeeDistribution
    {
        return $this->fee;
    }

    /**
     * Sets Fee.
     *
     * @maps fee
     */
    public function setFee(?FeeDistribution $fee): void
    {
        $this->fee = $fee;
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
     * Returns Status.
     * Current status of a [transfer](#/rest/models/structures/transfer)
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Current status of a [transfer](#/rest/models/structures/transfer)
     *
     * @maps status
     * @factory \PayQuickerSDKLib\Models\TransferStatuses::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Receipt Token.
     * Auto-generated unique identifier representing a receipt, prefixed with `rcpt-`.
     */
    public function getReceiptToken(): ?string
    {
        return $this->receiptToken;
    }

    /**
     * Sets Receipt Token.
     * Auto-generated unique identifier representing a receipt, prefixed with `rcpt-`.
     *
     * @maps receiptToken
     */
    public function setReceiptToken(?string $receiptToken): void
    {
        $this->receiptToken = $receiptToken;
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
     * Converts the TransferResult object to a human-readable string representation.
     *
     * @return string The string representation of the TransferResult object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TransferResult',
            [
                'token' => $this->token,
                'portalId' => $this->portalId,
                'clientTransferId' => $this->clientTransferId,
                'created' => $this->created,
                'deliveryDetails' => $this->deliveryDetails,
                'destinationAmount' => $this->destinationAmount,
                'destinationCurrency' => $this->destinationCurrency,
                'destinationToken' => $this->destinationToken,
                'fee' => $this->fee,
                'fxRate' => $this->fxRate,
                'memo' => $this->memo,
                'note' => $this->note,
                'sourceToken' => $this->sourceToken,
                'programUserId' => $this->programUserId,
                'email' => $this->email,
                'status' => $this->status,
                'receiptToken' => $this->receiptToken,
                'transferLockSide' => $this->transferLockSide,
                'transferMethodType' => $this->transferMethodType,
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
            $json['token']               = $this->token;
        }
        if (isset($this->portalId)) {
            $json['portalId']            = $this->portalId;
        }
        if (isset($this->clientTransferId)) {
            $json['clientTransferId']    = $this->clientTransferId;
        }
        if (isset($this->created)) {
            $json['created']             = DateTimeHelper::toRfc3339DateTime($this->created);
        }
        if (isset($this->deliveryDetails)) {
            $json['deliveryDetails']     = $this->deliveryDetails;
        }
        if (isset($this->destinationAmount)) {
            $json['destinationAmount']   = $this->destinationAmount;
        }
        if (isset($this->destinationCurrency)) {
            $json['destinationCurrency'] = Currencies::checkValue($this->destinationCurrency);
        }
        if (isset($this->destinationToken)) {
            $json['destinationToken']    = $this->destinationToken;
        }
        if (isset($this->fee)) {
            $json['fee']                 = $this->fee;
        }
        if (isset($this->fxRate)) {
            $json['fxRate']              = $this->fxRate;
        }
        if (isset($this->memo)) {
            $json['memo']                = $this->memo;
        }
        if (isset($this->note)) {
            $json['note']                = $this->note;
        }
        if (isset($this->sourceToken)) {
            $json['sourceToken']         = $this->sourceToken;
        }
        if (isset($this->programUserId)) {
            $json['programUserId']       = $this->programUserId;
        }
        if (isset($this->email)) {
            $json['email']               = $this->email;
        }
        if (isset($this->status)) {
            $json['status']              = TransferStatuses::checkValue($this->status);
        }
        if (isset($this->receiptToken)) {
            $json['receiptToken']        = $this->receiptToken;
        }
        if (isset($this->transferLockSide)) {
            $json['transferLockSide']    = LockSideTypes::checkValue($this->transferLockSide);
        }
        if (isset($this->transferMethodType)) {
            $json['transferMethodType']  = TransferMethodTypes::checkValue($this->transferMethodType);
        }
        if (isset($this->links)) {
            $json['links']               = $this->links;
        }
        if (isset($this->meta)) {
            $json['meta']                = $this->meta;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
