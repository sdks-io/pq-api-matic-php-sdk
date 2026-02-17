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
 * Financial purpose of the [bank account](#/rest/models/structures/bank-account-type)
 */
class BankAccountTypes
{
    /**
     * An account at a financial institution against which checks can be drawn by the account depositor.
     */
    public const CHECKING = 'CHECKING';

    /**
     * An interest-bearing account at a bank or credit union.
     */
    public const MONEY_MARKET = 'MONEY_MARKET';

    /**
     * An account at a financial institution that pays interest but cannot be used directly as money in the
     * narrow sense of a medium of exchange.
     */
    public const SAVINGS = 'SAVINGS';

    /**
     * Unknown or unrecognized.
     */
    public const UNDEFINED = 'UNDEFINED';

    private const _ALL_VALUES = [self::CHECKING, self::MONEY_MARKET, self::SAVINGS, self::UNDEFINED];

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
        throw new Exception("$value is invalid for BankAccountTypes.");
    }
}
