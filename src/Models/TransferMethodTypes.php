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
 * Optional transfer methods applicable only to bank and e-wallet transfers.
 */
class TransferMethodTypes
{
    public const IACH = 'IACH';

    public const WIRE = 'WIRE';

    public const US_SAMEDAY_IACH = 'US_SAMEDAY_IACH';

    public const STANDARD_EWALLET = 'STANDARD_EWALLET';

    public const STANDARD_POST = 'STANDARD_POST';

    private const _ALL_VALUES =
        [self::IACH, self::WIRE, self::US_SAMEDAY_IACH, self::STANDARD_EWALLET, self::STANDARD_POST];

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
        throw new Exception("$value is invalid for TransferMethodTypes.");
    }
}
