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
 * Current verification status type of the electronic wallet
 */
class ElectronicWalletStatuses
{
    public const ACTIVE = 'ACTIVE';

    public const DELETED = 'DELETED';

    public const PENDING_VERIFICATION = 'PENDING_VERIFICATION';

    public const VERIFIED = 'VERIFIED';

    public const UNKNOWN = 'UNKNOWN';

    private const _ALL_VALUES =
        [self::ACTIVE, self::DELETED, self::PENDING_VERIFICATION, self::VERIFIED, self::UNKNOWN];

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
        throw new Exception("$value is invalid for ElectronicWalletStatuses.");
    }
}
