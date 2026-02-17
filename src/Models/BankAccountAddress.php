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

class BankAccountAddress implements \JsonSerializable
{
    /**
     * @var string
     */
    private $address1;

    /**
     * @var string|null
     */
    private $address2;

    /**
     * @var string|null
     */
    private $address3;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string|null
     */
    private $region;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $country;

    /**
     * @param string $address1
     * @param string $city
     * @param string $postalCode
     * @param string $country
     */
    public function __construct(string $address1, string $city, string $postalCode, string $country)
    {
        $this->address1 = $address1;
        $this->city = $city;
        $this->postalCode = $postalCode;
        $this->country = $country;
    }

    /**
     * Returns Address 1.
     * Address Line 1
     */
    public function getAddress1(): string
    {
        return $this->address1;
    }

    /**
     * Sets Address 1.
     * Address Line 1
     *
     * @required
     * @maps address1
     */
    public function setAddress1(string $address1): void
    {
        $this->address1 = $address1;
    }

    /**
     * Returns Address 2.
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /**
     * Sets Address 2.
     *
     * @maps address2
     */
    public function setAddress2(?string $address2): void
    {
        $this->address2 = $address2;
    }

    /**
     * Returns Address 3.
     */
    public function getAddress3(): ?string
    {
        return $this->address3;
    }

    /**
     * Sets Address 3.
     *
     * @maps address3
     */
    public function setAddress3(?string $address3): void
    {
        $this->address3 = $address3;
    }

    /**
     * Returns City.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Sets City.
     *
     * @required
     * @maps city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Region.
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * Sets Region.
     *
     * @maps region
     */
    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    /**
     * Returns Postal Code.
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * Sets Postal Code.
     *
     * @required
     * @maps postalCode
     */
    public function setPostalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Returns Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     */
    public function getCountry(): string
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
     * @required
     * @maps country
     * @factory \PayQuickerSDKLib\Models\Countries::checkValue
     */
    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    /**
     * Converts the BankAccountAddress object to a human-readable string representation.
     *
     * @return string The string representation of the BankAccountAddress object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BankAccountAddress',
            [
                'address1' => $this->address1,
                'address2' => $this->address2,
                'address3' => $this->address3,
                'city' => $this->city,
                'region' => $this->region,
                'postalCode' => $this->postalCode,
                'country' => $this->country,
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
        $json['address1']     = $this->address1;
        if (isset($this->address2)) {
            $json['address2'] = $this->address2;
        }
        if (isset($this->address3)) {
            $json['address3'] = $this->address3;
        }
        $json['city']         = $this->city;
        if (isset($this->region)) {
            $json['region']   = $this->region;
        }
        $json['postalCode']   = $this->postalCode;
        $json['country']      = Countries::checkValue($this->country);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
