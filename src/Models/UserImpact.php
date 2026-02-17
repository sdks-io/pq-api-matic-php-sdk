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

class UserImpact
{
    public const NO_IMPACT = 'NO_IMPACT';

    public const USER_RESTRICTIONS = 'USER_RESTRICTIONS';

    public const USER_SUSPENDED = 'USER_SUSPENDED';

    public const USER_PENDING_REGISTRATION = 'USER_PENDING_REGISTRATION';

    public const USER_CLOSED = 'USER_CLOSED';

    private const _ALL_VALUES = [
        self::NO_IMPACT,
        self::USER_RESTRICTIONS,
        self::USER_SUSPENDED,
        self::USER_PENDING_REGISTRATION,
        self::USER_CLOSED
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
        throw new Exception("$value is invalid for UserImpact.");
    }
}
