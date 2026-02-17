<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * Indicates the enums for KYC.
 */
class DocumentTypes
{
    public const UNDEFINED = 'UNDEFINED';

    public const ARMED_FORCES_ID_CARD = 'ARMED_FORCES_ID_CARD';

    public const BANK_OR_CREDIT_CARD_STATEMENT = 'BANK_OR_CREDIT_CARD_STATEMENT';

    public const BANK_REFERENCE_LETTER = 'BANK_REFERENCE_LETTER';

    public const BIRTH_CERTIFICATE = 'BIRTH_CERTIFICATE';

    public const DEED_POLL = 'DEED_POLL';

    public const DEED_POLL_NAME_CHANGE = 'DEED_POLL_NAME_CHANGE';

    public const DRIVERS_LICENSE = 'DRIVERS_LICENSE';

    public const DRIVERS_LICENSE_BACK = 'DRIVERS_LICENSE_BACK';

    public const DRIVERS_LICENSE_NAME_CHANGE = 'DRIVERS_LICENSE_NAME_CHANGE';

    public const FIREARMS_LICENSE = 'FIREARMS_LICENSE';

    public const HEALTH_ID_CARD = 'HEALTH_ID_CARD';

    public const HIGH_QUALITY_HEADSHOT = 'HIGH_QUALITY_HEADSHOT';

    public const MARRIAGE_LICENSE = 'MARRIAGE_LICENSE';

    public const MARRIAGE_LICENSE_NAME_CHANGE = 'MARRIAGE_LICENSE_NAME_CHANGE';

    public const MATRICULA_CONSULAR_ID_CARD = 'MATRICULA_CONSULAR_ID_CARD';

    public const NATIONAL_IDENTITY_CARD = 'NATIONAL_IDENTITY_CARD';

    public const NATIONAL_IDENTITY_CARD_FRONT = 'NATIONAL_IDENTITY_CARD_FRONT';

    public const NATIONAL_IDENTITY_CARD_BACK = 'NATIONAL_IDENTITY_CARD_BACK';

    public const NATIONAL_INSURANCE_CARD = 'NATIONAL_INSURANCE_CARD';

    public const OFFICIAL_NAME_CHANGE_DOCUMENT = 'OFFICIAL_NAME_CHANGE_DOCUMENT';

    public const OTHER_GOVERNMENT_ISSUED_ID = 'OTHER_GOVERNMENT_ISSUED_ID';

    public const PASSPORT = 'PASSPORT';

    public const PAY_STUB = 'PAY_STUB';

    public const PROOF_OF_AGE_CARD = 'PROOF_OF_AGE_CARD';

    public const PROVISIONAL_DRIVERS_LICENSE = 'PROVISIONAL_DRIVERS_LICENSE';

    public const PUBLIC_SERVICE_CARD_FRONT = 'PUBLIC_SERVICE_CARD_FRONT';

    public const PUBLIC_SERVICE_CARD_BACK = 'PUBLIC_SERVICE_CARD_BACK';

    public const RESIDENT_CARD = 'RESIDENT_CARD';

    public const RESIDENT_IMMIGRATION_CARD = 'RESIDENT_IMMIGRATION_CARD';

    public const SOCIAL_SECURITY_CARD = 'SOCIAL_SECURITY_CARD';

    public const TAX_IDENTIFICATION_CARD_OR_LETTER = 'TAX_IDENTIFICATION_CARD_OR_LETTER';

    public const TAX_STATEMENT = 'TAX_STATEMENT';

    public const UTILITY_BILL = 'UTILITY_BILL';

    public const VOTERS_CARD = 'VOTERS_CARD';

    public const ARMED_FORCES_ID_CARD_BACK = 'ARMED_FORCES_ID_CARD_BACK';

    public const TAX_DOCUMENT = 'TAX_DOCUMENT';

    public const HEALTH_ID_CARD_BACK = 'HEALTH_ID_CARD_BACK';

    public const PROOF_OF_AGE_CARD_BACK = 'PROOF_OF_AGE_CARD_BACK';

    public const INDEPENDENT_PERSONAL_REFERENCE_DOCUMENT = 'INDEPENDENT_PERSONAL_REFERENCE_DOCUMENT';

    public const VIDEO_CALL_FILE = 'VIDEO_CALL_FILE';

    public const HOME_OR_AUTO_INSURANCE_CERTIFICATE_OR_SCHEDULE = 'HOME_OR_AUTO_INSURANCE_CERTIFICATE_OR_SCHEDULE';

    public const DIVORCE_DECREE_NAME_CHANGE = 'DIVORCE_DECREE_NAME_CHANGE';

    public const CIVIL_PARTNERSHIP_REGISTRATION_NAME_CHANGE = 'CIVIL_PARTNERSHIP_REGISTRATION_NAME_CHANGE';

    public const RENT_AGREEMENT = 'RENT_AGREEMENT';

    public const VEHICLE_REGISTRATION = 'VEHICLE_REGISTRATION';

    public const BENEFITS_CONFIRMATION_LETTER = 'BENEFITS_CONFIRMATION_LETTER';

    public const RESIDENT_CARD_BACK = 'RESIDENT_CARD_BACK';

    public const LOAN_ACCOUNT_STATEMENT = 'LOAN_ACCOUNT_STATEMENT';

    public const PROCESSED_CHECK = 'PROCESSED_CHECK';

    public const RESIDENTIAL_DIRECTORY_LISTING = 'RESIDENTIAL_DIRECTORY_LISTING';

    public const GENERIC_DOCUMENT = 'GENERIC_DOCUMENT';

    public const GOVERNMENT_ISSUED_PHOTOID = 'GOVERNMENT_ISSUED_PHOTOID';

    public const GOVERNMENT_ISSUED_PHOTO_ID_BACK = 'GOVERNMENT_ISSUED_PHOTO_ID_BACK';

    public const SOCIAL_INSURANCE_NUMBER_CARD = 'SOCIAL_INSURANCE_NUMBER_CARD';

    public const SOCIAL_INSURANCE_NUMBER_LETTER = 'SOCIAL_INSURANCE_NUMBER_LETTER';

    public const OTHER_SOCIAL_INSURANCE_NUMBER_DOCUMENT = 'OTHER_SOCIAL_INSURANCE_NUMBER_DOCUMENT';

    public const PLASTIC_CARD_CUSTOM_IMAGE = 'PLASTIC_CARD_CUSTOM_IMAGE';

    private const _ALL_VALUES = [
        self::UNDEFINED,
        self::ARMED_FORCES_ID_CARD,
        self::BANK_OR_CREDIT_CARD_STATEMENT,
        self::BANK_REFERENCE_LETTER,
        self::BIRTH_CERTIFICATE,
        self::DEED_POLL,
        self::DEED_POLL_NAME_CHANGE,
        self::DRIVERS_LICENSE,
        self::DRIVERS_LICENSE_BACK,
        self::DRIVERS_LICENSE_NAME_CHANGE,
        self::FIREARMS_LICENSE,
        self::HEALTH_ID_CARD,
        self::HIGH_QUALITY_HEADSHOT,
        self::MARRIAGE_LICENSE,
        self::MARRIAGE_LICENSE_NAME_CHANGE,
        self::MATRICULA_CONSULAR_ID_CARD,
        self::NATIONAL_IDENTITY_CARD,
        self::NATIONAL_IDENTITY_CARD_FRONT,
        self::NATIONAL_IDENTITY_CARD_BACK,
        self::NATIONAL_INSURANCE_CARD,
        self::OFFICIAL_NAME_CHANGE_DOCUMENT,
        self::OTHER_GOVERNMENT_ISSUED_ID,
        self::PASSPORT,
        self::PAY_STUB,
        self::PROOF_OF_AGE_CARD,
        self::PROVISIONAL_DRIVERS_LICENSE,
        self::PUBLIC_SERVICE_CARD_FRONT,
        self::PUBLIC_SERVICE_CARD_BACK,
        self::RESIDENT_CARD,
        self::RESIDENT_IMMIGRATION_CARD,
        self::SOCIAL_SECURITY_CARD,
        self::TAX_IDENTIFICATION_CARD_OR_LETTER,
        self::TAX_STATEMENT,
        self::UTILITY_BILL,
        self::VOTERS_CARD,
        self::ARMED_FORCES_ID_CARD_BACK,
        self::TAX_DOCUMENT,
        self::HEALTH_ID_CARD_BACK,
        self::PROOF_OF_AGE_CARD_BACK,
        self::INDEPENDENT_PERSONAL_REFERENCE_DOCUMENT,
        self::VIDEO_CALL_FILE,
        self::HOME_OR_AUTO_INSURANCE_CERTIFICATE_OR_SCHEDULE,
        self::DIVORCE_DECREE_NAME_CHANGE,
        self::CIVIL_PARTNERSHIP_REGISTRATION_NAME_CHANGE,
        self::RENT_AGREEMENT,
        self::VEHICLE_REGISTRATION,
        self::BENEFITS_CONFIRMATION_LETTER,
        self::RESIDENT_CARD_BACK,
        self::LOAN_ACCOUNT_STATEMENT,
        self::PROCESSED_CHECK,
        self::RESIDENTIAL_DIRECTORY_LISTING,
        self::GENERIC_DOCUMENT,
        self::GOVERNMENT_ISSUED_PHOTOID,
        self::GOVERNMENT_ISSUED_PHOTO_ID_BACK,
        self::SOCIAL_INSURANCE_NUMBER_CARD,
        self::SOCIAL_INSURANCE_NUMBER_LETTER,
        self::OTHER_SOCIAL_INSURANCE_NUMBER_DOCUMENT,
        self::PLASTIC_CARD_CUSTOM_IMAGE
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for DocumentTypes.");
    }
}
