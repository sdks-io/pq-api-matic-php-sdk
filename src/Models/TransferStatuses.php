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
 * Current status of a [transfer](#/rest/models/structures/transfer)
 */
class TransferStatuses
{
    public const ACCEPTED = 'ACCEPTED';

    public const CANCELLED = 'CANCELLED';

    public const COMPLETED = 'COMPLETED';

    public const EXPIRED = 'EXPIRED';

    public const FAILED = 'FAILED';

    public const PENDING = 'PENDING';

    public const PENDING_ACCEPTANCE = 'PENDING_ACCEPTANCE';

    public const QUOTED = 'QUOTED';

    public const RETURNED = 'RETURNED';

    public const SCHEDULED = 'SCHEDULED';

    public const VERIFICATION_HOLD = 'VERIFICATION_HOLD';

    public const VOIDED = 'VOIDED';

    private const _ALL_VALUES = [
        self::ACCEPTED,
        self::CANCELLED,
        self::COMPLETED,
        self::EXPIRED,
        self::FAILED,
        self::PENDING,
        self::PENDING_ACCEPTANCE,
        self::QUOTED,
        self::RETURNED,
        self::SCHEDULED,
        self::VERIFICATION_HOLD,
        self::VOIDED
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
        throw new Exception("$value is invalid for TransferStatuses.");
    }
}
