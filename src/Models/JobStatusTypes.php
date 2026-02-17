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
 * Job Status Types
 */
class JobStatusTypes
{
    /**
     * COMPLETED.
     */
    public const COMPLETED = 'COMPLETED';

    /**
     * APPROVED.
     */
    public const APPROVED = 'APPROVED';

    /**
     * CANCELLED.
     */
    public const CANCELLED = 'CANCELLED';

    /**
     * FAILED.
     */
    public const FAILED = 'FAILED';

    /**
     * IN_PROGRESS.
     */
    public const IN_PROGRESS = 'IN_PROGRESS';

    /**
     * PARSING.
     */
    public const PARSING = 'PARSING';

    /**
     * PENDING_REVIEW.
     */
    public const PENDING_REVIEW = 'PENDING_REVIEW';

    /**
     * PROCESSING.
     */
    public const PROCESSING = 'PROCESSING';

    /**
     * SCHEDULED.
     */
    public const SCHEDULED = 'SCHEDULED';

    /**
     * SUBMITTED.
     */
    public const SUBMITTED = 'SUBMITTED';

    private const _ALL_VALUES = [
        self::COMPLETED,
        self::APPROVED,
        self::CANCELLED,
        self::FAILED,
        self::IN_PROGRESS,
        self::PARSING,
        self::PENDING_REVIEW,
        self::PROCESSING,
        self::SCHEDULED,
        self::SUBMITTED
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
        throw new Exception("$value is invalid for JobStatusTypes.");
    }
}
