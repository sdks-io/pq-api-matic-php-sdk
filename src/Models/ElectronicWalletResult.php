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

class ElectronicWalletResult implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $token = 'dest-631b200f-665d-4dbe-bd01-3063c9dec97d';

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $electronicWalletCountry;

    /**
     * @var string|null
     */
    private $electronicWalletCurrency = Currencies::USD;

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * @var ElectronicWalletField[]|null
     */
    private $fields;

    /**
     * @var string|null
     */
    private $status;

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
     * Unique identifier representing the [destination of funds](#/rest/models/structures/destination-
     * token)
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * Unique identifier representing the [destination of funds](#/rest/models/structures/destination-
     * token)
     *
     * @maps token
     */
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }

    /**
     * Returns Type.
     * Name of the electronic wallet
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Name of the electronic wallet
     *
     * @maps type
     * @factory \PayQuickerSDKLib\Models\ElectronicWalletTypes::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Electronic Wallet Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     */
    public function getElectronicWalletCountry(): ?string
    {
        return $this->electronicWalletCountry;
    }

    /**
     * Sets Electronic Wallet Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     *
     * @maps electronicWalletCountry
     * @factory \PayQuickerSDKLib\Models\Countries::checkValue
     */
    public function setElectronicWalletCountry(?string $electronicWalletCountry): void
    {
        $this->electronicWalletCountry = $electronicWalletCountry;
    }

    /**
     * Returns Electronic Wallet Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     */
    public function getElectronicWalletCurrency(): ?string
    {
        return $this->electronicWalletCurrency;
    }

    /**
     * Sets Electronic Wallet Currency.
     * [Currency code type](#/rest/models/structures/country) for the object
     *
     * @maps electronicWalletCurrency
     * @factory \PayQuickerSDKLib\Models\Currencies::checkValue
     */
    public function setElectronicWalletCurrency(?string $electronicWalletCurrency): void
    {
        $this->electronicWalletCurrency = $electronicWalletCurrency;
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
     * Returns Fields.
     *
     * @return ElectronicWalletField[]|null
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * Sets Fields.
     *
     * @maps fields
     *
     * @param ElectronicWalletField[]|null $fields
     */
    public function setFields(?array $fields): void
    {
        $this->fields = $fields;
    }

    /**
     * Returns Status.
     * Current verification status type of the electronic wallet
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Current verification status type of the electronic wallet
     *
     * @maps status
     * @factory \PayQuickerSDKLib\Models\ElectronicWalletStatuses::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
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
     * Converts the ElectronicWalletResult object to a human-readable string representation.
     *
     * @return string The string representation of the ElectronicWalletResult object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ElectronicWalletResult',
            [
                'token' => $this->token,
                'type' => $this->type,
                'electronicWalletCountry' => $this->electronicWalletCountry,
                'electronicWalletCurrency' => $this->electronicWalletCurrency,
                'createdOn' => $this->createdOn,
                'fields' => $this->fields,
                'status' => $this->status,
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
            $json['token']                    = $this->token;
        }
        if (isset($this->type)) {
            $json['type']                     = ElectronicWalletTypes::checkValue($this->type);
        }
        if (isset($this->electronicWalletCountry)) {
            $json['electronicWalletCountry']  = Countries::checkValue($this->electronicWalletCountry);
        }
        if (isset($this->electronicWalletCurrency)) {
            $json['electronicWalletCurrency'] = Currencies::checkValue($this->electronicWalletCurrency);
        }
        if (isset($this->createdOn)) {
            $json['createdOn']                = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->fields)) {
            $json['fields']                   = $this->fields;
        }
        if (isset($this->status)) {
            $json['status']                   = ElectronicWalletStatuses::checkValue($this->status);
        }
        if (isset($this->links)) {
            $json['links']                    = $this->links;
        }
        if (isset($this->meta)) {
            $json['meta']                     = $this->meta;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
