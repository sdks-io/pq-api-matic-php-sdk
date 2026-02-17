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
 * The processor type for the prepaid card
 */
class CardProcessors
{
    public const FIS = 'FIS';

    public const FLEX = 'FLEX';

    public const EPS = 'EPS';

    public const TOKA = 'TOKA';

    public const QOLO = 'QOLO';

    public const UNDEFINED = 'UNDEFINED';

    private const _ALL_VALUES = [self::FIS, self::FLEX, self::EPS, self::TOKA, self::QOLO, self::UNDEFINED];

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
        throw new Exception("$value is invalid for CardProcessors.");
    }
}
