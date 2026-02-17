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
 * Name of the bank
 */
class BankTypes
{
    public const MCB = 'MCB';

    public const PEOPLES = 'PEOPLES';

    public const PPS = 'PPS';

    public const TOKA = 'TOKA';

    public const UNDEFINED = 'UNDEFINED';

    public const CHOICELTD = 'CHOICELTD';

    public const FLEX = 'FLEX';

    public const REWARDS = 'REWARDS';

    public const PATHWARD = 'PATHWARD';

    public const SUTTON = 'SUTTON';

    private const _ALL_VALUES = [
        self::MCB,
        self::PEOPLES,
        self::PPS,
        self::TOKA,
        self::UNDEFINED,
        self::CHOICELTD,
        self::FLEX,
        self::REWARDS,
        self::PATHWARD,
        self::SUTTON
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
        throw new Exception("$value is invalid for BankTypes.");
    }
}
