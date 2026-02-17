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

class AgreementTypes
{
    public const CARD_HOLDER_AGREEMENT = 'CARD_HOLDER_AGREEMENT';

    public const CARD_HOLDER_AGREEMENT_CONSENT = 'CARD_HOLDER_AGREEMENT_CONSENT';

    public const CARD_LIMITS = 'CARD_LIMITS';

    public const E_SIGN_AND_CONSENT = 'E_SIGN_AND_CONSENT';

    public const FEE_AGREEMENT = 'FEE_AGREEMENT';

    public const PRIVACY_POLICY = 'PRIVACY_POLICY';

    public const PRIVACY_POLICY_ADDENDUM = 'PRIVACY_POLICY_ADDENDUM';

    public const TERMS_OF_USE = 'TERMS_OF_USE';

    public const UNDEFINED = 'UNDEFINED';

    private const _ALL_VALUES = [
        self::CARD_HOLDER_AGREEMENT,
        self::CARD_HOLDER_AGREEMENT_CONSENT,
        self::CARD_LIMITS,
        self::E_SIGN_AND_CONSENT,
        self::FEE_AGREEMENT,
        self::PRIVACY_POLICY,
        self::PRIVACY_POLICY_ADDENDUM,
        self::TERMS_OF_USE,
        self::UNDEFINED
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
        throw new Exception("$value is invalid for AgreementTypes.");
    }
}
