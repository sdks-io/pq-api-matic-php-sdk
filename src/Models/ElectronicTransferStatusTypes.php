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
 * The status of a bank transfer
 */
class ElectronicTransferStatusTypes
{
    /**
     * The bank transfer has been started to the destination bank.
     */
    public const IN_PROGRESS = 'IN_PROGRESS';

    /**
     * The bank transfer has been performed and the funds have arrived in the destination bank.
     */
    public const PROCESSED = 'PROCESSED';

    /**
     * The bank transfer has failed and the funds have been sent back to the source account.
     */
    public const FAILED = 'REFUNDED';

    /**
     * The bank transfer has failed.
     */
    public const REFUNDED = 'FAILED';

    private const _ALL_VALUES = [self::IN_PROGRESS, self::PROCESSED, self::FAILED, self::REFUNDED];

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
        throw new Exception("$value is invalid for ElectronicTransferStatusTypes.");
    }
}
