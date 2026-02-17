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
 * Receipt status types
 */
class ReceiptStatuses
{
    public const UNDEFINED = 'UNDEFINED';

    public const PENDING = 'PENDING';

    public const COMPLETE = 'COMPLETE';

    public const FAILED = 'FAILED';

    public const CANCELED = 'CANCELED';

    public const SCHEDULED = 'SCHEDULED';

    public const REVIEW_REQUIRED = 'REVIEW_REQUIRED';

    public const EXPIRED = 'EXPIRED';

    public const REFUNDED = 'REFUNDED';

    public const PROCESSING = 'PROCESSING';

    public const REVERSED = 'REVERSED';

    public const UNSETTLED = 'UNSETTLED';

    private const _ALL_VALUES = [
        self::UNDEFINED,
        self::PENDING,
        self::COMPLETE,
        self::FAILED,
        self::CANCELED,
        self::SCHEDULED,
        self::REVIEW_REQUIRED,
        self::EXPIRED,
        self::REFUNDED,
        self::PROCESSING,
        self::REVERSED,
        self::UNSETTLED
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
        throw new Exception("$value is invalid for ReceiptStatuses.");
    }
}
