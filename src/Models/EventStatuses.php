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
 * Indicates the current verification status type of an event.
 */
class EventStatuses
{
    /**
     * TO BE DONE
     */
    public const UNDEFINED = 'UNDEFINED';

    /**
     * Processing of the event has been canceled.
     */
    public const CANCELLED = 'CANCELLED';

    /**
     * Processing of the event has been completed.
     */
    public const COMPLETED = 'COMPLETED';

    /**
     * The event is currently being processed.
     */
    public const IN_PROGRESS = 'IN_PROGRESS';

    /**
     * The event is waiting to be processed.
     */
    public const PENDING = 'PENDING';

    /**
     * The event processing has been suspended.
     */
    public const SUSPENDED = 'SUSPENDED';

    private const _ALL_VALUES =
        [self::UNDEFINED, self::CANCELLED, self::COMPLETED, self::IN_PROGRESS, self::PENDING, self::SUSPENDED];

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
        throw new Exception("$value is invalid for EventStatuses.");
    }
}
