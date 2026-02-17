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
 * Response from a invitation request
 */
class PortalPaymentQuote implements \JsonSerializable
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
     * @var string|null
     */
    private $purpose;

    /**
     * @var string|null
     */
    private $clientPaymentId = 'd4b6f130-1d1c-4ce2-903a-0c1ad128f55e';

    /**
     * @var bool|null
     */
    private $autoAcceptQuote;

    /**
     * @var \DateTime|null
     */
    private $notBefore;

    /**
     * @var \DateTime|null
     */
    private $notAfter;

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
     * Returns Purpose.
     * Used to identify the [purpose of a payment](#/models/structures/payment-object) and impacts
     * reporting and calculated taxable earnings (if utilizing tax services)
     */
    public function getPurpose(): ?string
    {
        return $this->purpose;
    }

    /**
     * Sets Purpose.
     * Used to identify the [purpose of a payment](#/models/structures/payment-object) and impacts
     * reporting and calculated taxable earnings (if utilizing tax services)
     *
     * @maps purpose
     * @factory \PayQuickerSDKLib\Models\PaymentPurposes::checkValue
     */
    public function setPurpose(?string $purpose): void
    {
        $this->purpose = $purpose;
    }

    /**
     * Returns Client Payment Id.
     * Unique value provided by the client for the [payment](page:resources/payments), utilized for
     * reference and deduplication.
     */
    public function getClientPaymentId(): ?string
    {
        return $this->clientPaymentId;
    }

    /**
     * Sets Client Payment Id.
     * Unique value provided by the client for the [payment](page:resources/payments), utilized for
     * reference and deduplication.
     *
     * @maps clientPaymentId
     */
    public function setClientPaymentId(?string $clientPaymentId): void
    {
        $this->clientPaymentId = $clientPaymentId;
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
     * Returns Not Before.
     * [Transfer](#/rest/models/structures/not-before-or-after) is scheduled and will not process before
     * this time.
     */
    public function getNotBefore(): ?\DateTime
    {
        return $this->notBefore;
    }

    /**
     * Sets Not Before.
     * [Transfer](#/rest/models/structures/not-before-or-after) is scheduled and will not process before
     * this time.
     *
     * @maps notBefore
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setNotBefore(?\DateTime $notBefore): void
    {
        $this->notBefore = $notBefore;
    }

    /**
     * Returns Not After.
     * [Transfer](#/rest/models/structures/not-before-or-after) expires if not completed prior to this time.
     */
    public function getNotAfter(): ?\DateTime
    {
        return $this->notAfter;
    }

    /**
     * Sets Not After.
     * [Transfer](#/rest/models/structures/not-before-or-after) expires if not completed prior to this time.
     *
     * @maps notAfter
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setNotAfter(?\DateTime $notAfter): void
    {
        $this->notAfter = $notAfter;
    }

    /**
     * Converts the PortalPaymentQuote object to a human-readable string representation.
     *
     * @return string The string representation of the PortalPaymentQuote object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PortalPaymentQuote',
            [
                'amount' => $this->amount,
                'currency' => $this->currency,
                'sourceToken' => $this->sourceToken,
                'programUserId' => $this->programUserId,
                'email' => $this->email,
                'note' => $this->note,
                'memo' => $this->memo,
                'purpose' => $this->purpose,
                'clientPaymentId' => $this->clientPaymentId,
                'autoAcceptQuote' => $this->autoAcceptQuote,
                'notBefore' => $this->notBefore,
                'notAfter' => $this->notAfter,
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
            $json['amount']          = $this->amount;
        }
        if (isset($this->currency)) {
            $json['currency']        = Currencies::checkValue($this->currency);
        }
        if (isset($this->sourceToken)) {
            $json['sourceToken']     = $this->sourceToken;
        }
        if (isset($this->programUserId)) {
            $json['programUserId']   = $this->programUserId;
        }
        if (isset($this->email)) {
            $json['email']           = $this->email;
        }
        if (isset($this->note)) {
            $json['note']            = $this->note;
        }
        if (isset($this->memo)) {
            $json['memo']            = $this->memo;
        }
        if (isset($this->purpose)) {
            $json['purpose']         = PaymentPurposes::checkValue($this->purpose);
        }
        if (isset($this->clientPaymentId)) {
            $json['clientPaymentId'] = $this->clientPaymentId;
        }
        if (isset($this->autoAcceptQuote)) {
            $json['autoAcceptQuote'] = $this->autoAcceptQuote;
        }
        if (isset($this->notBefore)) {
            $json['notBefore']       = DateTimeHelper::toRfc3339DateTime($this->notBefore);
        }
        if (isset($this->notAfter)) {
            $json['notAfter']        = DateTimeHelper::toRfc3339DateTime($this->notAfter);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
