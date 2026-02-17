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

class EventRequirements
{
    public const ACH_UPGRADE_PII_DETAILS_VALIDATED = 'ACH_UPGRADE_PII_DETAILS_VALIDATED';

    public const AGREEMENTS_ACCEPTED = 'AGREEMENTS_ACCEPTED';

    public const DOCUMENTS_REQUIRED = 'DOCUMENTS_REQUIRED';

    public const EMAIL_ADDRESS_VERIFIED = 'EMAIL_ADDRESS_VERIFIED';

    public const FINANCIAL_PROCESSOR_ACCOUNT_CREATED = 'FINANCIAL_PROCESSOR_ACCOUNT_CREATED';

    public const IDENTITY_VERIFIED = 'IDENTITY_VERIFIED';

    public const MFA_REGISTRATION_CANCELLED = 'MFA_REGISTRATION_CANCELLED';

    public const MFA_REGISTRATION_CHALLENGE_SENT = 'MFA_REGISTRATION_CHALLENGE_SENT';

    public const MFA_REGISTRATION_COMPLETED = 'MFA_REGISTRATION_COMPLETED';

    public const MFA_REGISTRATION_PII_COLLECTED = 'MFA_REGISTRATION_PII_COLLECTED';

    public const MFA_REGISTRATION_PROCESSOR_REGISTRATION = 'MFA_REGISTRATION_PROCESSOR_REGISTRATION';

    public const MFA_REGISTRATION_TYPE_CHANGED = 'MFA_REGISTRATION_TYPE_CHANGED';

    public const MFA_REGISTRATION_VALIDATION = 'MFA_REGISTRATION_VALIDATION';

    public const ORDER_PLASTIC_CARD = 'ORDER_PLASTIC_CARD';

    public const PEP_SANCTIONS_SCREENING_VERIFIED = 'PEP_SANCTIONS_SCREENING_VERIFIED';

    public const PERSONAL_DETAILS_COLLECTED = 'PERSONAL_DETAILS_COLLECTED';

    public const PROCESS_EXECUTED = 'PROCESS_EXECUTED';

    public const TYPE_UNDEFINED = 'TYPE_UNDEFINED';

    public const USER_CREATED = 'USER_CREATED';

    private const _ALL_VALUES = [
        self::ACH_UPGRADE_PII_DETAILS_VALIDATED,
        self::AGREEMENTS_ACCEPTED,
        self::DOCUMENTS_REQUIRED,
        self::EMAIL_ADDRESS_VERIFIED,
        self::FINANCIAL_PROCESSOR_ACCOUNT_CREATED,
        self::IDENTITY_VERIFIED,
        self::MFA_REGISTRATION_CANCELLED,
        self::MFA_REGISTRATION_CHALLENGE_SENT,
        self::MFA_REGISTRATION_COMPLETED,
        self::MFA_REGISTRATION_PII_COLLECTED,
        self::MFA_REGISTRATION_PROCESSOR_REGISTRATION,
        self::MFA_REGISTRATION_TYPE_CHANGED,
        self::MFA_REGISTRATION_VALIDATION,
        self::ORDER_PLASTIC_CARD,
        self::PEP_SANCTIONS_SCREENING_VERIFIED,
        self::PERSONAL_DETAILS_COLLECTED,
        self::PROCESS_EXECUTED,
        self::TYPE_UNDEFINED,
        self::USER_CREATED
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
        throw new Exception("$value is invalid for EventRequirements.");
    }
}
