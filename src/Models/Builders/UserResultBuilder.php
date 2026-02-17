<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models\Builders;

use Core\Utils\CoreHelper;
use PayQuickerSDKLib\Models\HateoasSelfRef;
use PayQuickerSDKLib\Models\MetadataItems;
use PayQuickerSDKLib\Models\UserResult;

/**
 * Builder for model UserResult
 *
 * @see UserResult
 */
class UserResultBuilder
{
    /**
     * @var UserResult
     */
    private $instance;

    private function __construct(UserResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new User Result Builder object.
     */
    public static function init(): self
    {
        return new self(new UserResult());
    }

    /**
     * Sets token field.
     *
     * @param string|null $value
     */
    public function token(?string $value): self
    {
        $this->instance->setToken($value);
        return $this;
    }

    /**
     * Sets address Line 1 field.
     *
     * @param string|null $value
     */
    public function addressLine1(?string $value): self
    {
        $this->instance->setAddressLine1($value);
        return $this;
    }

    /**
     * Sets address Line 2 field.
     *
     * @param string|null $value
     */
    public function addressLine2(?string $value): self
    {
        $this->instance->setAddressLine2($value);
        return $this;
    }

    /**
     * Sets address Line 3 field.
     *
     * @param string|null $value
     */
    public function addressLine3(?string $value): self
    {
        $this->instance->setAddressLine3($value);
        return $this;
    }

    /**
     * Sets business Address Line 1 field.
     *
     * @param string|null $value
     */
    public function businessAddressLine1(?string $value): self
    {
        $this->instance->setBusinessAddressLine1($value);
        return $this;
    }

    /**
     * Sets business Address Line 2 field.
     *
     * @param string|null $value
     */
    public function businessAddressLine2(?string $value): self
    {
        $this->instance->setBusinessAddressLine2($value);
        return $this;
    }

    /**
     * Sets business Address Line 3 field.
     *
     * @param string|null $value
     */
    public function businessAddressLine3(?string $value): self
    {
        $this->instance->setBusinessAddressLine3($value);
        return $this;
    }

    /**
     * Sets business Address Type field.
     *
     * @param string|null $value
     */
    public function businessAddressType(?string $value): self
    {
        $this->instance->setBusinessAddressType($value);
        return $this;
    }

    /**
     * Sets business City field.
     *
     * @param string|null $value
     */
    public function businessCity(?string $value): self
    {
        $this->instance->setBusinessCity($value);
        return $this;
    }

    /**
     * Sets business Contact Role field.
     *
     * @param string|null $value
     */
    public function businessContactRole(?string $value): self
    {
        $this->instance->setBusinessContactRole($value);
        return $this;
    }

    /**
     * Sets business Country field.
     *
     * @param string|null $value
     */
    public function businessCountry(?string $value): self
    {
        $this->instance->setBusinessCountry($value);
        return $this;
    }

    /**
     * Sets business Name field.
     *
     * @param string|null $value
     */
    public function businessName(?string $value): self
    {
        $this->instance->setBusinessName($value);
        return $this;
    }

    /**
     * Sets business Postal Code field.
     *
     * @param string|null $value
     */
    public function businessPostalCode(?string $value): self
    {
        $this->instance->setBusinessPostalCode($value);
        return $this;
    }

    /**
     * Sets business Region field.
     *
     * @param string|null $value
     */
    public function businessRegion(?string $value): self
    {
        $this->instance->setBusinessRegion($value);
        return $this;
    }

    /**
     * Sets city field.
     *
     * @param string|null $value
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Sets country field.
     *
     * @param string|null $value
     */
    public function country(?string $value): self
    {
        $this->instance->setCountry($value);
        return $this;
    }

    /**
     * Sets country Of Birth field.
     *
     * @param string|null $value
     */
    public function countryOfBirth(?string $value): self
    {
        $this->instance->setCountryOfBirth($value);
        return $this;
    }

    /**
     * Sets country Of Nationality field.
     *
     * @param string|null $value
     */
    public function countryOfNationality(?string $value): self
    {
        $this->instance->setCountryOfNationality($value);
        return $this;
    }

    /**
     * Sets created On field.
     *
     * @param \DateTime|null $value
     */
    public function createdOn(?\DateTime $value): self
    {
        $this->instance->setCreatedOn($value);
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets date Of Birth field.
     *
     * @param \DateTime|null $value
     */
    public function dateOfBirth(?\DateTime $value): self
    {
        $this->instance->setDateOfBirth($value);
        return $this;
    }

    /**
     * Sets email field.
     *
     * @param string|null $value
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Sets employer Id field.
     *
     * @param string|null $value
     */
    public function employerId(?string $value): self
    {
        $this->instance->setEmployerId($value);
        return $this;
    }

    /**
     * Sets first Name field.
     *
     * @param string|null $value
     */
    public function firstName(?string $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Sets gender field.
     *
     * @param string|null $value
     */
    public function gender(?string $value): self
    {
        $this->instance->setGender($value);
        return $this;
    }

    /**
     * Sets government Id field.
     *
     * @param string|null $value
     */
    public function governmentId(?string $value): self
    {
        $this->instance->setGovernmentId($value);
        return $this;
    }

    /**
     * Sets government Id Type field.
     *
     * @param string|null $value
     */
    public function governmentIdType(?string $value): self
    {
        $this->instance->setGovernmentIdType($value);
        return $this;
    }

    /**
     * Sets language field.
     *
     * @param string|null $value
     */
    public function language(?string $value): self
    {
        $this->instance->setLanguage($value);
        return $this;
    }

    /**
     * Sets last Name field.
     *
     * @param string|null $value
     */
    public function lastName(?string $value): self
    {
        $this->instance->setLastName($value);
        return $this;
    }

    /**
     * Sets mailing Address Line 1 field.
     *
     * @param string|null $value
     */
    public function mailingAddressLine1(?string $value): self
    {
        $this->instance->setMailingAddressLine1($value);
        return $this;
    }

    /**
     * Sets mailing Address Line 2 field.
     *
     * @param string|null $value
     */
    public function mailingAddressLine2(?string $value): self
    {
        $this->instance->setMailingAddressLine2($value);
        return $this;
    }

    /**
     * Sets mailing Address Line 3 field.
     *
     * @param string|null $value
     */
    public function mailingAddressLine3(?string $value): self
    {
        $this->instance->setMailingAddressLine3($value);
        return $this;
    }

    /**
     * Sets mailing City field.
     *
     * @param string|null $value
     */
    public function mailingCity(?string $value): self
    {
        $this->instance->setMailingCity($value);
        return $this;
    }

    /**
     * Sets mailing Country field.
     *
     * @param string|null $value
     */
    public function mailingCountry(?string $value): self
    {
        $this->instance->setMailingCountry($value);
        return $this;
    }

    /**
     * Sets mailing Postal Code field.
     *
     * @param string|null $value
     */
    public function mailingPostalCode(?string $value): self
    {
        $this->instance->setMailingPostalCode($value);
        return $this;
    }

    /**
     * Sets mailing Region field.
     *
     * @param string|null $value
     */
    public function mailingRegion(?string $value): self
    {
        $this->instance->setMailingRegion($value);
        return $this;
    }

    /**
     * Sets mobile Number field.
     *
     * @param string|null $value
     */
    public function mobileNumber(?string $value): self
    {
        $this->instance->setMobileNumber($value);
        return $this;
    }

    /**
     * Sets mobile Number Country field.
     *
     * @param string|null $value
     */
    public function mobileNumberCountry(?string $value): self
    {
        $this->instance->setMobileNumberCountry($value);
        return $this;
    }

    /**
     * Sets occupation Title field.
     *
     * @param string|null $value
     */
    public function occupationTitle(?string $value): self
    {
        $this->instance->setOccupationTitle($value);
        return $this;
    }

    /**
     * Sets occupation Type field.
     *
     * @param string|null $value
     */
    public function occupationType(?string $value): self
    {
        $this->instance->setOccupationType($value);
        return $this;
    }

    /**
     * Sets phone Number field.
     *
     * @param string|null $value
     */
    public function phoneNumber(?string $value): self
    {
        $this->instance->setPhoneNumber($value);
        return $this;
    }

    /**
     * Sets phone Number Country field.
     *
     * @param string|null $value
     */
    public function phoneNumberCountry(?string $value): self
    {
        $this->instance->setPhoneNumberCountry($value);
        return $this;
    }

    /**
     * Sets postal Code field.
     *
     * @param string|null $value
     */
    public function postalCode(?string $value): self
    {
        $this->instance->setPostalCode($value);
        return $this;
    }

    /**
     * Sets program User Id field.
     *
     * @param string|null $value
     */
    public function programUserId(?string $value): self
    {
        $this->instance->setProgramUserId($value);
        return $this;
    }

    /**
     * Sets region field.
     *
     * @param string|null $value
     */
    public function region(?string $value): self
    {
        $this->instance->setRegion($value);
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets tax Resident Status field.
     *
     * @param string|null $value
     */
    public function taxResidentStatus(?string $value): self
    {
        $this->instance->setTaxResidentStatus($value);
        return $this;
    }

    /**
     * Sets user Type field.
     *
     * @param string|null $value
     */
    public function userType(?string $value): self
    {
        $this->instance->setUserType($value);
        return $this;
    }

    /**
     * Sets links field.
     *
     * @param HateoasSelfRef[]|null $value
     */
    public function links(?array $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Sets meta field.
     *
     * @param MetadataItems|null $value
     */
    public function meta(?MetadataItems $value): self
    {
        $this->instance->setMeta($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new User Result object.
     */
    public function build(): UserResult
    {
        return CoreHelper::clone($this->instance);
    }
}
