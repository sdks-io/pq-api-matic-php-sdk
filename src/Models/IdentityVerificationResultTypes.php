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
 * Result type of [verification](#/rest/models/structures/identity-verification-result-type)
 */
class IdentityVerificationResultTypes
{
    public const PASS = 'PASS';

    public const SERVICE_OFFLINE = 'SERVICE_OFFLINE';

    public const FAIL = 'FAIL';

    public const PROCESSING = 'PROCESSING';

    public const UNDEFINED = 'UNDEFINED';

    public const NOTYETEXECUTED = 'NOTYETEXECUTED';

    public const EXPIRED = 'EXPIRED';

    private const _ALL_VALUES = [
        self::PASS,
        self::SERVICE_OFFLINE,
        self::FAIL,
        self::PROCESSING,
        self::UNDEFINED,
        self::NOTYETEXECUTED,
        self::EXPIRED
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
        throw new Exception("$value is invalid for IdentityVerificationResultTypes.");
    }
}
