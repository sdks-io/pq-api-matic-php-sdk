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

class EventRequirementCategories
{
    public const ACKNOWLEDGEMENT = 'ACKNOWLEDGEMENT';

    public const CATEGORY_UNDEFINED = 'CATEGORY_UNDEFINED';

    public const EXTERNAL_REFERENCE_KYC = 'EXTERNAL_REFERENCE_KYC';

    public const GEO_IP_VERIFICATION = 'GEO_IP_VERIFICATION';

    public const KYC = 'KYC';

    public const TAX = 'TAX';

    public const VIDEO_CALL_KYC = 'VIDEO_CALL_KYC';

    private const _ALL_VALUES = [
        self::ACKNOWLEDGEMENT,
        self::CATEGORY_UNDEFINED,
        self::EXTERNAL_REFERENCE_KYC,
        self::GEO_IP_VERIFICATION,
        self::KYC,
        self::TAX,
        self::VIDEO_CALL_KYC
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
        throw new Exception("$value is invalid for EventRequirementCategories.");
    }
}
