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
 * Indicates the type of ID submitted for user verification purposes.
 */
class GovernmentIds
{
    /**
     * Identity code for both citizens and residents of Mexico.
     */
    public const CURP = 'CURP';

    /**
     * Identity card with a photo issued by an official authority.
     */
    public const NATIONAL_ID_CARD = 'NATIONAL_ID_CARD';

    /**
     * Travel document that certifies the identity and nationality of its holder.
     */
    public const PASSPORT = 'PASSPORT';

    /**
     * Social Security number for citizens of the United States.
     */
    public const SSN = 'SSN';

    private const _ALL_VALUES = [self::CURP, self::NATIONAL_ID_CARD, self::PASSPORT, self::SSN];

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
        throw new Exception("$value is invalid for GovernmentIds.");
    }
}
