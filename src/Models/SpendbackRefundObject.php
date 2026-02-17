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

class SpendbackRefundObject implements \JsonSerializable
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
     * @var float|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $clientSpendbackRefundId;

    /**
     * @var \DateTime|null
     */
    private $created;

    /**
     * @var string|null
     */
    private $currency = Currencies::USD;

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
    private $destinationToken = 'dest-631b200f-665d-4dbe-bd01-3063c9dec97d';

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
     * @var HateoasSelfRef[]|null
     */
    private $links;

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
     * Returns Amount.
     * Money to be refunded from original payment
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Money to be refunded from original payment
     *
     * @maps amount
     */
    public function setAmount(?float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Client Spendback Refund Id.
     * [Unique value](#/rest/models/structures/client-transfer-id) provided by the client for the transfer,
     * utilized for reference and deduplication.
     */
    public function getClientSpendbackRefundId(): ?string
    {
        return $this->clientSpendbackRefundId;
    }

    /**
     * Sets Client Spendback Refund Id.
     * [Unique value](#/rest/models/structures/client-transfer-id) provided by the client for the transfer,
     * utilized for reference and deduplication.
     *
     * @maps clientSpendbackRefundId
     */
    public function setClientSpendbackRefundId(?string $clientSpendbackRefundId): void
    {
        $this->clientSpendbackRefundId = $clientSpendbackRefundId;
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
     * Converts the SpendbackRefundObject object to a human-readable string representation.
     *
     * @return string The string representation of the SpendbackRefundObject object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SpendbackRefundObject',
            [
                'token' => $this->token,
                'portalId' => $this->portalId,
                'amount' => $this->amount,
                'clientSpendbackRefundId' => $this->clientSpendbackRefundId,
                'created' => $this->created,
                'currency' => $this->currency,
                'memo' => $this->memo,
                'note' => $this->note,
                'sourceToken' => $this->sourceToken,
                'destinationToken' => $this->destinationToken,
                'programUserId' => $this->programUserId,
                'email' => $this->email,
                'status' => $this->status,
                'receiptToken' => $this->receiptToken,
                'links' => $this->links,
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
            $json['token']                   = $this->token;
        }
        if (isset($this->portalId)) {
            $json['portalId']                = $this->portalId;
        }
        if (isset($this->amount)) {
            $json['amount']                  = $this->amount;
        }
        if (isset($this->clientSpendbackRefundId)) {
            $json['clientSpendbackRefundId'] = $this->clientSpendbackRefundId;
        }
        if (isset($this->created)) {
            $json['created']                 = DateTimeHelper::toRfc3339DateTime($this->created);
        }
        if (isset($this->currency)) {
            $json['currency']                = Currencies::checkValue($this->currency);
        }
        if (isset($this->memo)) {
            $json['memo']                    = $this->memo;
        }
        if (isset($this->note)) {
            $json['note']                    = $this->note;
        }
        if (isset($this->sourceToken)) {
            $json['sourceToken']             = $this->sourceToken;
        }
        if (isset($this->destinationToken)) {
            $json['destinationToken']        = $this->destinationToken;
        }
        if (isset($this->programUserId)) {
            $json['programUserId']           = $this->programUserId;
        }
        if (isset($this->email)) {
            $json['email']                   = $this->email;
        }
        if (isset($this->status)) {
            $json['status']                  = TransferStatuses::checkValue($this->status);
        }
        if (isset($this->receiptToken)) {
            $json['receiptToken']            = $this->receiptToken;
        }
        if (isset($this->links)) {
            $json['links']                   = $this->links;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
