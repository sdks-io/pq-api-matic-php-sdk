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

class PrepaidCardObject implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $token;

    /**
     * @var string|null
     */
    private $cardNetwork;

    /**
     * @var string|null
     */
    private $cardNumber;

    /**
     * @var string|null
     */
    private $cardPackage;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * @var string|null
     */
    private $currency = Currencies::USD;

    /**
     * @var string|null
     */
    private $cvv;

    /**
     * @var string|null
     */
    private $expires;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var BankAccountField[]|null
     */
    private $bankInDetails;

    /**
     * @var string[]|null
     */
    private $capabilities;

    /**
     * @var string|null
     */
    private $userToken;

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
     * Returns Card Network.
     * Major [credit card network](#/rest/models/structures/card-network) types
     */
    public function getCardNetwork(): ?string
    {
        return $this->cardNetwork;
    }

    /**
     * Sets Card Network.
     * Major [credit card network](#/rest/models/structures/card-network) types
     *
     * @maps cardNetwork
     * @factory \PayQuickerSDKLib\Models\CardNetworks::checkValue
     */
    public function setCardNetwork(?string $cardNetwork): void
    {
        $this->cardNetwork = $cardNetwork;
    }

    /**
     * Returns Card Number.
     * Unique number on the prepaid card
     */
    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    /**
     * Sets Card Number.
     * Unique number on the prepaid card
     *
     * @maps cardNumber
     */
    public function setCardNumber(?string $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * Returns Card Package.
     * [Package](#/rest/models/structures/prepaid-card-package) for the card being displayed, including
     * artwork, packaging, and delivery method
     */
    public function getCardPackage(): ?string
    {
        return $this->cardPackage;
    }

    /**
     * Sets Card Package.
     * [Package](#/rest/models/structures/prepaid-card-package) for the card being displayed, including
     * artwork, packaging, and delivery method
     *
     * @maps cardPackage
     */
    public function setCardPackage(?string $cardPackage): void
    {
        $this->cardPackage = $cardPackage;
    }

    /**
     * Returns Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     *
     * @maps country
     * @factory \PayQuickerSDKLib\Models\Countries::checkValue
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
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
     * Returns Cvv.
     * Three- or four-digit [Card Verification Value (CVV)](#/rest/models/structures/cvv) number displayed
     * on the back of a credit or debit card
     */
    public function getCvv(): ?string
    {
        return $this->cvv;
    }

    /**
     * Sets Cvv.
     * Three- or four-digit [Card Verification Value (CVV)](#/rest/models/structures/cvv) number displayed
     * on the back of a credit or debit card
     *
     * @maps cvv
     */
    public function setCvv(?string $cvv): void
    {
        $this->cvv = $cvv;
    }

    /**
     * Returns Expires.
     * Date and time the object will [expire](#/rest/models/structures/expiration)
     */
    public function getExpires(): ?string
    {
        return $this->expires;
    }

    /**
     * Sets Expires.
     * Date and time the object will [expire](#/rest/models/structures/expiration)
     *
     * @maps expires
     */
    public function setExpires(?string $expires): void
    {
        $this->expires = $expires;
    }

    /**
     * Returns Status.
     * Current [status](#/rest/models/structures/prepaid-card-status) of the prepaid card
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Current [status](#/rest/models/structures/prepaid-card-status) of the prepaid card
     *
     * @maps status
     * @factory \PayQuickerSDKLib\Models\PrepaidCardStatuses::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Bank in Details.
     *
     * @return BankAccountField[]|null
     */
    public function getBankInDetails(): ?array
    {
        return $this->bankInDetails;
    }

    /**
     * Sets Bank in Details.
     *
     * @maps bankInDetails
     *
     * @param BankAccountField[]|null $bankInDetails
     */
    public function setBankInDetails(?array $bankInDetails): void
    {
        $this->bankInDetails = $bankInDetails;
    }

    /**
     * Returns Capabilities.
     *
     * @return string[]|null
     */
    public function getCapabilities(): ?array
    {
        return $this->capabilities;
    }

    /**
     * Sets Capabilities.
     *
     * @maps capabilities
     * @factory \PayQuickerSDKLib\Models\PrepaidCardCapabilities::checkValue
     *
     * @param string[]|null $capabilities
     */
    public function setCapabilities(?array $capabilities): void
    {
        $this->capabilities = $capabilities;
    }

    /**
     * Returns User Token.
     * Auto-generated unique identifier representing a user, prefixed with `user-`.
     */
    public function getUserToken(): ?string
    {
        return $this->userToken;
    }

    /**
     * Sets User Token.
     * Auto-generated unique identifier representing a user, prefixed with `user-`.
     *
     * @maps userToken
     */
    public function setUserToken(?string $userToken): void
    {
        $this->userToken = $userToken;
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
     * Converts the PrepaidCardObject object to a human-readable string representation.
     *
     * @return string The string representation of the PrepaidCardObject object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PrepaidCardObject',
            [
                'token' => $this->token,
                'cardNetwork' => $this->cardNetwork,
                'cardNumber' => $this->cardNumber,
                'cardPackage' => $this->cardPackage,
                'country' => $this->country,
                'createdOn' => $this->createdOn,
                'currency' => $this->currency,
                'cvv' => $this->cvv,
                'expires' => $this->expires,
                'status' => $this->status,
                'bankInDetails' => $this->bankInDetails,
                'capabilities' => $this->capabilities,
                'userToken' => $this->userToken,
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
            $json['token']         = $this->token;
        }
        if (isset($this->cardNetwork)) {
            $json['cardNetwork']   = CardNetworks::checkValue($this->cardNetwork);
        }
        if (isset($this->cardNumber)) {
            $json['cardNumber']    = $this->cardNumber;
        }
        if (isset($this->cardPackage)) {
            $json['cardPackage']   = $this->cardPackage;
        }
        if (isset($this->country)) {
            $json['country']       = Countries::checkValue($this->country);
        }
        if (isset($this->createdOn)) {
            $json['createdOn']     = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->currency)) {
            $json['currency']      = Currencies::checkValue($this->currency);
        }
        if (isset($this->cvv)) {
            $json['cvv']           = $this->cvv;
        }
        if (isset($this->expires)) {
            $json['expires']       = $this->expires;
        }
        if (isset($this->status)) {
            $json['status']        = PrepaidCardStatuses::checkValue($this->status);
        }
        if (isset($this->bankInDetails)) {
            $json['bankInDetails'] = $this->bankInDetails;
        }
        if (isset($this->capabilities)) {
            $json['capabilities']  = PrepaidCardCapabilities::checkValue($this->capabilities);
        }
        if (isset($this->userToken)) {
            $json['userToken']     = $this->userToken;
        }
        if (isset($this->links)) {
            $json['links']         = $this->links;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
