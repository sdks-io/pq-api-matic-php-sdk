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

class AuthorizationObject implements \JsonSerializable
{
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
     * @var Translation[]|null
     */
    private $descriptions;

    /**
     * @var \DateTime|null
     */
    private $authDate;

    /**
     * @var string|null
     */
    private $reference;

    /**
     * Returns Type.
     * Financial types for the [prepaid card](page:resources/prepaid-cards) authorization.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Financial types for the [prepaid card](page:resources/prepaid-cards) authorization.
     *
     * @maps type
     * @factory \PayQuickerSDKLib\Models\PrepaidCardAuthorizations::checkValue
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
     * @return Translation[]|null
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
     * @param Translation[]|null $descriptions
     */
    public function setDescriptions(?array $descriptions): void
    {
        $this->descriptions = $descriptions;
    }

    /**
     * Returns Auth Date.
     * Date that the auth was created
     */
    public function getAuthDate(): ?\DateTime
    {
        return $this->authDate;
    }

    /**
     * Sets Auth Date.
     * Date that the auth was created
     *
     * @maps authDate
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setAuthDate(?\DateTime $authDate): void
    {
        $this->authDate = $authDate;
    }

    /**
     * Returns Reference.
     * [Provider reference](#/rest/models/structures/identity-verification-provider-reference) used for
     * performing identity checks for the provider
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Sets Reference.
     * [Provider reference](#/rest/models/structures/identity-verification-provider-reference) used for
     * performing identity checks for the provider
     *
     * @maps reference
     */
    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * Converts the AuthorizationObject object to a human-readable string representation.
     *
     * @return string The string representation of the AuthorizationObject object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'AuthorizationObject',
            [
                'type' => $this->type,
                'createdOn' => $this->createdOn,
                'sign' => $this->sign,
                'sourceToken' => $this->sourceToken,
                'amount' => $this->amount,
                'currency' => $this->currency,
                'status' => $this->status,
                'descriptions' => $this->descriptions,
                'authDate' => $this->authDate,
                'reference' => $this->reference,
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
        if (isset($this->type)) {
            $json['type']         = PrepaidCardAuthorizations::checkValue($this->type);
        }
        if (isset($this->createdOn)) {
            $json['createdOn']    = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->sign)) {
            $json['sign']         = Signs::checkValue($this->sign);
        }
        if (isset($this->sourceToken)) {
            $json['sourceToken']  = $this->sourceToken;
        }
        if (isset($this->amount)) {
            $json['amount']       = $this->amount;
        }
        if (isset($this->currency)) {
            $json['currency']     = Currencies::checkValue($this->currency);
        }
        if (isset($this->status)) {
            $json['status']       = ReceiptStatuses::checkValue($this->status);
        }
        if (isset($this->descriptions)) {
            $json['descriptions'] = $this->descriptions;
        }
        if (isset($this->authDate)) {
            $json['authDate']     = DateTimeHelper::toRfc3339DateTime($this->authDate);
        }
        if (isset($this->reference)) {
            $json['reference']    = $this->reference;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
