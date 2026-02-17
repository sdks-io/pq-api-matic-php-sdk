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

class CreateOrUpdateUser implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $currency = Currencies::USD;

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
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var \DateTime|null
     */
    private $dateOfBirth;

    /**
     * @var string|null
     */
    private $taxResidentStatus;

    /**
     * @var string|null
     */
    private $phoneNumber;

    /**
     * @var string|null
     */
    private $mobileNumber;

    /**
     * @var string|null
     */
    private $phoneNumberCountry;

    /**
     * @var string|null
     */
    private $mobileNumberCountry;

    /**
     * @var string|null
     */
    private $addressLine1;

    /**
     * @var string|null
     */
    private $addressLine2;

    /**
     * @var string|null
     */
    private $addressLine3;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $region;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var string|null
     */
    private $postalCode;

    /**
     * @var string|null
     */
    private $gender;

    /**
     * @var string|null
     */
    private $userType;

    /**
     * @var string|null
     */
    private $language;

    /**
     * @var string|null
     */
    private $countryOfBirth;

    /**
     * @var string|null
     */
    private $countryOfNationality;

    /**
     * @var string|null
     */
    private $businessContactRole;

    /**
     * @var string|null
     */
    private $governmentIdType;

    /**
     * @var string|null
     */
    private $governmentId;

    /**
     * @var string|null
     */
    private $occupationTitle;

    /**
     * @var string|null
     */
    private $occupationType;

    /**
     * @var string|null
     */
    private $mailingAddressLine1;

    /**
     * @var string|null
     */
    private $mailingAddressLine2;

    /**
     * @var string|null
     */
    private $mailingAddressLine3;

    /**
     * @var string|null
     */
    private $mailingCountry;

    /**
     * @var string|null
     */
    private $mailingCity;

    /**
     * @var string|null
     */
    private $mailingRegion;

    /**
     * @var string|null
     */
    private $mailingPostalCode;

    /**
     * @var string|null
     */
    private $businessAddressLine1;

    /**
     * @var string|null
     */
    private $businessAddressLine2;

    /**
     * @var string|null
     */
    private $businessAddressLine3;

    /**
     * @var string|null
     */
    private $businessCountry;

    /**
     * @var string|null
     */
    private $businessCity;

    /**
     * @var string|null
     */
    private $businessRegion;

    /**
     * @var string|null
     */
    private $businessPostalCode;

    /**
     * @var string|null
     */
    private $premiseNumber;

    /**
     * @var string|null
     */
    private $programToken;

    /**
     * @var string|null
     */
    private $primaryUserToken;

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
     * Returns First Name.
     * First name
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     * First name
     *
     * @maps firstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     * Last name
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     * Last name
     *
     * @maps lastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Date of Birth.
     */
    public function getDateOfBirth(): ?\DateTime
    {
        return $this->dateOfBirth;
    }

    /**
     * Sets Date of Birth.
     *
     * @maps dateOfBirth
     * @factory \PayQuickerSDKLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDateOfBirth(?\DateTime $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * Returns Tax Resident Status.
     * Tax [resident status type](#/rest/models/structures/tax-resident-status)
     */
    public function getTaxResidentStatus(): ?string
    {
        return $this->taxResidentStatus;
    }

    /**
     * Sets Tax Resident Status.
     * Tax [resident status type](#/rest/models/structures/tax-resident-status)
     *
     * @maps taxResidentStatus
     * @factory \PayQuickerSDKLib\Models\TaxResidentStatuses::checkValue
     */
    public function setTaxResidentStatus(?string $taxResidentStatus): void
    {
        $this->taxResidentStatus = $taxResidentStatus;
    }

    /**
     * Returns Phone Number.
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * Sets Phone Number.
     *
     * @maps phoneNumber
     */
    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Returns Mobile Number.
     */
    public function getMobileNumber(): ?string
    {
        return $this->mobileNumber;
    }

    /**
     * Sets Mobile Number.
     *
     * @maps mobileNumber
     */
    public function setMobileNumber(?string $mobileNumber): void
    {
        $this->mobileNumber = $mobileNumber;
    }

    /**
     * Returns Phone Number Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     */
    public function getPhoneNumberCountry(): ?string
    {
        return $this->phoneNumberCountry;
    }

    /**
     * Sets Phone Number Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     *
     * @maps phoneNumberCountry
     * @factory \PayQuickerSDKLib\Models\Countries::checkValue
     */
    public function setPhoneNumberCountry(?string $phoneNumberCountry): void
    {
        $this->phoneNumberCountry = $phoneNumberCountry;
    }

    /**
     * Returns Mobile Number Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     */
    public function getMobileNumberCountry(): ?string
    {
        return $this->mobileNumberCountry;
    }

    /**
     * Sets Mobile Number Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     *
     * @maps mobileNumberCountry
     * @factory \PayQuickerSDKLib\Models\Countries::checkValue
     */
    public function setMobileNumberCountry(?string $mobileNumberCountry): void
    {
        $this->mobileNumberCountry = $mobileNumberCountry;
    }

    /**
     * Returns Address Line 1.
     * Address Line 1
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * Sets Address Line 1.
     * Address Line 1
     *
     * @maps addressLine1
     */
    public function setAddressLine1(?string $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * Returns Address Line 2.
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * Sets Address Line 2.
     *
     * @maps addressLine2
     */
    public function setAddressLine2(?string $addressLine2): void
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * Returns Address Line 3.
     */
    public function getAddressLine3(): ?string
    {
        return $this->addressLine3;
    }

    /**
     * Sets Address Line 3.
     *
     * @maps addressLine3
     */
    public function setAddressLine3(?string $addressLine3): void
    {
        $this->addressLine3 = $addressLine3;
    }

    /**
     * Returns City.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     *
     * @maps city
     */
    public function setCity(?string $city): void
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
     * Returns Postal Code.
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * Sets Postal Code.
     *
     * @maps postalCode
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Returns Gender.
     * [Gender](#/rest/models/structures/gender) as a user identifies
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * Sets Gender.
     * [Gender](#/rest/models/structures/gender) as a user identifies
     *
     * @maps gender
     * @factory \PayQuickerSDKLib\Models\Genders::checkValue
     */
    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * Returns User Type.
     * Account holder's profile [type](#/rest/models/structures/user-type)
     */
    public function getUserType(): ?string
    {
        return $this->userType;
    }

    /**
     * Sets User Type.
     * Account holder's profile [type](#/rest/models/structures/user-type)
     *
     * @maps userType
     * @factory \PayQuickerSDKLib\Models\UserTypes::checkValue
     */
    public function setUserType(?string $userType): void
    {
        $this->userType = $userType;
    }

    /**
     * Returns Language.
     * The [Language](#/rest/models/structures/language) type in IETF's BCP 47 format
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Sets Language.
     * The [Language](#/rest/models/structures/language) type in IETF's BCP 47 format
     *
     * @maps language
     * @factory \PayQuickerSDKLib\Models\Languages::checkValue
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * Returns Country of Birth.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     */
    public function getCountryOfBirth(): ?string
    {
        return $this->countryOfBirth;
    }

    /**
     * Sets Country of Birth.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     *
     * @maps countryOfBirth
     * @factory \PayQuickerSDKLib\Models\Countries::checkValue
     */
    public function setCountryOfBirth(?string $countryOfBirth): void
    {
        $this->countryOfBirth = $countryOfBirth;
    }

    /**
     * Returns Country of Nationality.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     */
    public function getCountryOfNationality(): ?string
    {
        return $this->countryOfNationality;
    }

    /**
     * Sets Country of Nationality.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     *
     * @maps countryOfNationality
     * @factory \PayQuickerSDKLib\Models\Countries::checkValue
     */
    public function setCountryOfNationality(?string $countryOfNationality): void
    {
        $this->countryOfNationality = $countryOfNationality;
    }

    /**
     * Returns Business Contact Role.
     * Business contact role
     */
    public function getBusinessContactRole(): ?string
    {
        return $this->businessContactRole;
    }

    /**
     * Sets Business Contact Role.
     * Business contact role
     *
     * @maps businessContactRole
     * @factory \PayQuickerSDKLib\Models\BusinessContactRoles::checkValue
     */
    public function setBusinessContactRole(?string $businessContactRole): void
    {
        $this->businessContactRole = $businessContactRole;
    }

    /**
     * Returns Government Id Type.
     * Indicates the type of ID submitted for user verification purposes.
     */
    public function getGovernmentIdType(): ?string
    {
        return $this->governmentIdType;
    }

    /**
     * Sets Government Id Type.
     * Indicates the type of ID submitted for user verification purposes.
     *
     * @maps governmentIdType
     * @factory \PayQuickerSDKLib\Models\GovernmentIds::checkValue
     */
    public function setGovernmentIdType(?string $governmentIdType): void
    {
        $this->governmentIdType = $governmentIdType;
    }

    /**
     * Returns Government Id.
     */
    public function getGovernmentId(): ?string
    {
        return $this->governmentId;
    }

    /**
     * Sets Government Id.
     *
     * @maps governmentId
     */
    public function setGovernmentId(?string $governmentId): void
    {
        $this->governmentId = $governmentId;
    }

    /**
     * Returns Occupation Title.
     */
    public function getOccupationTitle(): ?string
    {
        return $this->occupationTitle;
    }

    /**
     * Sets Occupation Title.
     *
     * @maps occupationTitle
     */
    public function setOccupationTitle(?string $occupationTitle): void
    {
        $this->occupationTitle = $occupationTitle;
    }

    /**
     * Returns Occupation Type.
     * [Type of occupation](#/rest/models/structures/occupation) for the user
     */
    public function getOccupationType(): ?string
    {
        return $this->occupationType;
    }

    /**
     * Sets Occupation Type.
     * [Type of occupation](#/rest/models/structures/occupation) for the user
     *
     * @maps occupationType
     * @factory \PayQuickerSDKLib\Models\Occupations::checkValue
     */
    public function setOccupationType(?string $occupationType): void
    {
        $this->occupationType = $occupationType;
    }

    /**
     * Returns Mailing Address Line 1.
     */
    public function getMailingAddressLine1(): ?string
    {
        return $this->mailingAddressLine1;
    }

    /**
     * Sets Mailing Address Line 1.
     *
     * @maps mailingAddressLine1
     */
    public function setMailingAddressLine1(?string $mailingAddressLine1): void
    {
        $this->mailingAddressLine1 = $mailingAddressLine1;
    }

    /**
     * Returns Mailing Address Line 2.
     */
    public function getMailingAddressLine2(): ?string
    {
        return $this->mailingAddressLine2;
    }

    /**
     * Sets Mailing Address Line 2.
     *
     * @maps mailingAddressLine2
     */
    public function setMailingAddressLine2(?string $mailingAddressLine2): void
    {
        $this->mailingAddressLine2 = $mailingAddressLine2;
    }

    /**
     * Returns Mailing Address Line 3.
     */
    public function getMailingAddressLine3(): ?string
    {
        return $this->mailingAddressLine3;
    }

    /**
     * Sets Mailing Address Line 3.
     *
     * @maps mailingAddressLine3
     */
    public function setMailingAddressLine3(?string $mailingAddressLine3): void
    {
        $this->mailingAddressLine3 = $mailingAddressLine3;
    }

    /**
     * Returns Mailing Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     */
    public function getMailingCountry(): ?string
    {
        return $this->mailingCountry;
    }

    /**
     * Sets Mailing Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     *
     * @maps mailingCountry
     * @factory \PayQuickerSDKLib\Models\Countries::checkValue
     */
    public function setMailingCountry(?string $mailingCountry): void
    {
        $this->mailingCountry = $mailingCountry;
    }

    /**
     * Returns Mailing City.
     */
    public function getMailingCity(): ?string
    {
        return $this->mailingCity;
    }

    /**
     * Sets Mailing City.
     *
     * @maps mailingCity
     */
    public function setMailingCity(?string $mailingCity): void
    {
        $this->mailingCity = $mailingCity;
    }

    /**
     * Returns Mailing Region.
     */
    public function getMailingRegion(): ?string
    {
        return $this->mailingRegion;
    }

    /**
     * Sets Mailing Region.
     *
     * @maps mailingRegion
     */
    public function setMailingRegion(?string $mailingRegion): void
    {
        $this->mailingRegion = $mailingRegion;
    }

    /**
     * Returns Mailing Postal Code.
     */
    public function getMailingPostalCode(): ?string
    {
        return $this->mailingPostalCode;
    }

    /**
     * Sets Mailing Postal Code.
     *
     * @maps mailingPostalCode
     */
    public function setMailingPostalCode(?string $mailingPostalCode): void
    {
        $this->mailingPostalCode = $mailingPostalCode;
    }

    /**
     * Returns Business Address Line 1.
     * Business address line 1
     */
    public function getBusinessAddressLine1(): ?string
    {
        return $this->businessAddressLine1;
    }

    /**
     * Sets Business Address Line 1.
     * Business address line 1
     *
     * @maps businessAddressLine1
     */
    public function setBusinessAddressLine1(?string $businessAddressLine1): void
    {
        $this->businessAddressLine1 = $businessAddressLine1;
    }

    /**
     * Returns Business Address Line 2.
     * Business address line 2
     */
    public function getBusinessAddressLine2(): ?string
    {
        return $this->businessAddressLine2;
    }

    /**
     * Sets Business Address Line 2.
     * Business address line 2
     *
     * @maps businessAddressLine2
     */
    public function setBusinessAddressLine2(?string $businessAddressLine2): void
    {
        $this->businessAddressLine2 = $businessAddressLine2;
    }

    /**
     * Returns Business Address Line 3.
     * Business address line 3
     */
    public function getBusinessAddressLine3(): ?string
    {
        return $this->businessAddressLine3;
    }

    /**
     * Sets Business Address Line 3.
     * Business address line 3
     *
     * @maps businessAddressLine3
     */
    public function setBusinessAddressLine3(?string $businessAddressLine3): void
    {
        $this->businessAddressLine3 = $businessAddressLine3;
    }

    /**
     * Returns Business Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     */
    public function getBusinessCountry(): ?string
    {
        return $this->businessCountry;
    }

    /**
     * Sets Business Country.
     * Throughout the PayQuicker API, the usage of the 2-letter alpha code is used in place of the country
     * name, e.g., for bank country or residential country.
     *
     * The 2-letter codes adhere to the ISO 3166-1 spec and are listed here for convenience.
     *
     * @maps businessCountry
     * @factory \PayQuickerSDKLib\Models\Countries::checkValue
     */
    public function setBusinessCountry(?string $businessCountry): void
    {
        $this->businessCountry = $businessCountry;
    }

    /**
     * Returns Business City.
     * Business city
     */
    public function getBusinessCity(): ?string
    {
        return $this->businessCity;
    }

    /**
     * Sets Business City.
     * Business city
     *
     * @maps businessCity
     */
    public function setBusinessCity(?string $businessCity): void
    {
        $this->businessCity = $businessCity;
    }

    /**
     * Returns Business Region.
     * Region that the business is based out of
     */
    public function getBusinessRegion(): ?string
    {
        return $this->businessRegion;
    }

    /**
     * Sets Business Region.
     * Region that the business is based out of
     *
     * @maps businessRegion
     */
    public function setBusinessRegion(?string $businessRegion): void
    {
        $this->businessRegion = $businessRegion;
    }

    /**
     * Returns Business Postal Code.
     */
    public function getBusinessPostalCode(): ?string
    {
        return $this->businessPostalCode;
    }

    /**
     * Sets Business Postal Code.
     *
     * @maps businessPostalCode
     */
    public function setBusinessPostalCode(?string $businessPostalCode): void
    {
        $this->businessPostalCode = $businessPostalCode;
    }

    /**
     * Returns Premise Number.
     */
    public function getPremiseNumber(): ?string
    {
        return $this->premiseNumber;
    }

    /**
     * Sets Premise Number.
     *
     * @maps premiseNumber
     */
    public function setPremiseNumber(?string $premiseNumber): void
    {
        $this->premiseNumber = $premiseNumber;
    }

    /**
     * Returns Program Token.
     * Auto-generated unique identifier representing a program, prefixed with prog-
     */
    public function getProgramToken(): ?string
    {
        return $this->programToken;
    }

    /**
     * Sets Program Token.
     * Auto-generated unique identifier representing a program, prefixed with prog-
     *
     * @maps programToken
     */
    public function setProgramToken(?string $programToken): void
    {
        $this->programToken = $programToken;
    }

    /**
     * Returns Primary User Token.
     * Auto-generated unique identifier representing a user, prefixed with `user-`.
     */
    public function getPrimaryUserToken(): ?string
    {
        return $this->primaryUserToken;
    }

    /**
     * Sets Primary User Token.
     * Auto-generated unique identifier representing a user, prefixed with `user-`.
     *
     * @maps primaryUserToken
     */
    public function setPrimaryUserToken(?string $primaryUserToken): void
    {
        $this->primaryUserToken = $primaryUserToken;
    }

    /**
     * Converts the CreateOrUpdateUser object to a human-readable string representation.
     *
     * @return string The string representation of the CreateOrUpdateUser object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateOrUpdateUser',
            [
                'currency' => $this->currency,
                'programUserId' => $this->programUserId,
                'email' => $this->email,
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'dateOfBirth' => $this->dateOfBirth,
                'taxResidentStatus' => $this->taxResidentStatus,
                'phoneNumber' => $this->phoneNumber,
                'mobileNumber' => $this->mobileNumber,
                'phoneNumberCountry' => $this->phoneNumberCountry,
                'mobileNumberCountry' => $this->mobileNumberCountry,
                'addressLine1' => $this->addressLine1,
                'addressLine2' => $this->addressLine2,
                'addressLine3' => $this->addressLine3,
                'city' => $this->city,
                'region' => $this->region,
                'country' => $this->country,
                'postalCode' => $this->postalCode,
                'gender' => $this->gender,
                'userType' => $this->userType,
                'language' => $this->language,
                'countryOfBirth' => $this->countryOfBirth,
                'countryOfNationality' => $this->countryOfNationality,
                'businessContactRole' => $this->businessContactRole,
                'governmentIdType' => $this->governmentIdType,
                'governmentId' => $this->governmentId,
                'occupationTitle' => $this->occupationTitle,
                'occupationType' => $this->occupationType,
                'mailingAddressLine1' => $this->mailingAddressLine1,
                'mailingAddressLine2' => $this->mailingAddressLine2,
                'mailingAddressLine3' => $this->mailingAddressLine3,
                'mailingCountry' => $this->mailingCountry,
                'mailingCity' => $this->mailingCity,
                'mailingRegion' => $this->mailingRegion,
                'mailingPostalCode' => $this->mailingPostalCode,
                'businessAddressLine1' => $this->businessAddressLine1,
                'businessAddressLine2' => $this->businessAddressLine2,
                'businessAddressLine3' => $this->businessAddressLine3,
                'businessCountry' => $this->businessCountry,
                'businessCity' => $this->businessCity,
                'businessRegion' => $this->businessRegion,
                'businessPostalCode' => $this->businessPostalCode,
                'premiseNumber' => $this->premiseNumber,
                'programToken' => $this->programToken,
                'primaryUserToken' => $this->primaryUserToken,
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
        if (isset($this->currency)) {
            $json['currency']             = Currencies::checkValue($this->currency);
        }
        if (isset($this->programUserId)) {
            $json['programUserId']        = $this->programUserId;
        }
        if (isset($this->email)) {
            $json['email']                = $this->email;
        }
        if (isset($this->firstName)) {
            $json['firstName']            = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['lastName']             = $this->lastName;
        }
        if (isset($this->dateOfBirth)) {
            $json['dateOfBirth']          = DateTimeHelper::toRfc3339DateTime($this->dateOfBirth);
        }
        if (isset($this->taxResidentStatus)) {
            $json['taxResidentStatus']    = TaxResidentStatuses::checkValue($this->taxResidentStatus);
        }
        if (isset($this->phoneNumber)) {
            $json['phoneNumber']          = $this->phoneNumber;
        }
        if (isset($this->mobileNumber)) {
            $json['mobileNumber']         = $this->mobileNumber;
        }
        if (isset($this->phoneNumberCountry)) {
            $json['phoneNumberCountry']   = Countries::checkValue($this->phoneNumberCountry);
        }
        if (isset($this->mobileNumberCountry)) {
            $json['mobileNumberCountry']  = Countries::checkValue($this->mobileNumberCountry);
        }
        if (isset($this->addressLine1)) {
            $json['addressLine1']         = $this->addressLine1;
        }
        if (isset($this->addressLine2)) {
            $json['addressLine2']         = $this->addressLine2;
        }
        if (isset($this->addressLine3)) {
            $json['addressLine3']         = $this->addressLine3;
        }
        if (isset($this->city)) {
            $json['city']                 = $this->city;
        }
        if (isset($this->region)) {
            $json['region']               = $this->region;
        }
        if (isset($this->country)) {
            $json['country']              = Countries::checkValue($this->country);
        }
        if (isset($this->postalCode)) {
            $json['postalCode']           = $this->postalCode;
        }
        if (isset($this->gender)) {
            $json['gender']               = Genders::checkValue($this->gender);
        }
        if (isset($this->userType)) {
            $json['userType']             = UserTypes::checkValue($this->userType);
        }
        if (isset($this->language)) {
            $json['language']             = Languages::checkValue($this->language);
        }
        if (isset($this->countryOfBirth)) {
            $json['countryOfBirth']       = Countries::checkValue($this->countryOfBirth);
        }
        if (isset($this->countryOfNationality)) {
            $json['countryOfNationality'] = Countries::checkValue($this->countryOfNationality);
        }
        if (isset($this->businessContactRole)) {
            $json['businessContactRole']  = BusinessContactRoles::checkValue($this->businessContactRole);
        }
        if (isset($this->governmentIdType)) {
            $json['governmentIdType']     = GovernmentIds::checkValue($this->governmentIdType);
        }
        if (isset($this->governmentId)) {
            $json['governmentId']         = $this->governmentId;
        }
        if (isset($this->occupationTitle)) {
            $json['occupationTitle']      = $this->occupationTitle;
        }
        if (isset($this->occupationType)) {
            $json['occupationType']       = Occupations::checkValue($this->occupationType);
        }
        if (isset($this->mailingAddressLine1)) {
            $json['mailingAddressLine1']  = $this->mailingAddressLine1;
        }
        if (isset($this->mailingAddressLine2)) {
            $json['mailingAddressLine2']  = $this->mailingAddressLine2;
        }
        if (isset($this->mailingAddressLine3)) {
            $json['mailingAddressLine3']  = $this->mailingAddressLine3;
        }
        if (isset($this->mailingCountry)) {
            $json['mailingCountry']       = Countries::checkValue($this->mailingCountry);
        }
        if (isset($this->mailingCity)) {
            $json['mailingCity']          = $this->mailingCity;
        }
        if (isset($this->mailingRegion)) {
            $json['mailingRegion']        = $this->mailingRegion;
        }
        if (isset($this->mailingPostalCode)) {
            $json['mailingPostalCode']    = $this->mailingPostalCode;
        }
        if (isset($this->businessAddressLine1)) {
            $json['businessAddressLine1'] = $this->businessAddressLine1;
        }
        if (isset($this->businessAddressLine2)) {
            $json['businessAddressLine2'] = $this->businessAddressLine2;
        }
        if (isset($this->businessAddressLine3)) {
            $json['businessAddressLine3'] = $this->businessAddressLine3;
        }
        if (isset($this->businessCountry)) {
            $json['businessCountry']      = Countries::checkValue($this->businessCountry);
        }
        if (isset($this->businessCity)) {
            $json['businessCity']         = $this->businessCity;
        }
        if (isset($this->businessRegion)) {
            $json['businessRegion']       = $this->businessRegion;
        }
        if (isset($this->businessPostalCode)) {
            $json['businessPostalCode']   = $this->businessPostalCode;
        }
        if (isset($this->premiseNumber)) {
            $json['premiseNumber']        = $this->premiseNumber;
        }
        if (isset($this->programToken)) {
            $json['programToken']         = $this->programToken;
        }
        if (isset($this->primaryUserToken)) {
            $json['primaryUserToken']     = $this->primaryUserToken;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
