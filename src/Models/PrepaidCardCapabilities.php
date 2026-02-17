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
 * Capabilities of a [prepaid card](page:resources/prepaid-cards).
 */
class PrepaidCardCapabilities
{
    /**
     * The prepaid card supports ApplePay and can be added to an iOS device.
     */
    public const APPLEPAY = 'APPLEPAY';

    /**
     * The prepaid card supports banking details that allow for loads (i.e., direct deposit).
     */
    public const BANK_IN = 'BANK_IN';

    /**
     * The prepaid card supports transfers to external bank accounts.
     */
    public const BANK_OUT = 'BANK_OUT';

    /**
     * The prepaid card supports Google Pay and can be added to a supported Android device.
     */
    public const GOOGLEPAY = 'GOOGLEPAY';

    /**
     * The prepaid card supports revealing the card details or rendered card image via the API.
     */
    public const REVEAL_CARD = 'REVEAL_CARD';

    /**
     * TO BE DONE
     */
    public const REVEAL_PIN = 'REVEAL_PIN';

    /**
     * The prepaid card supports Samsung Pay and can be added to a supported Samsung device.
     */
    public const SAMSUNGPAY = 'SAMSUNGPAY';

    /**
     * The prepaid card supports setting the PIN via the API.
     */
    public const SET_PIN = 'SET_PIN';

    /**
     * The prepaid card supports contactless transactions at supported terminals.
     */
    public const CONTACTLESS = 'CONTACTLESS';

    private const _ALL_VALUES = [
        self::APPLEPAY,
        self::BANK_IN,
        self::BANK_OUT,
        self::GOOGLEPAY,
        self::REVEAL_CARD,
        self::REVEAL_PIN,
        self::SAMSUNGPAY,
        self::SET_PIN,
        self::CONTACTLESS
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
        throw new Exception("$value is invalid for PrepaidCardCapabilities.");
    }
}
