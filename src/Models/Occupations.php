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
 * [Type of occupation](#/rest/models/structures/occupation) for the user
 */
class Occupations
{
    public const ARTS = 'ARTS';

    public const DESIGN = 'DESIGN';

    public const EDUCATION = 'EDUCATION';

    public const ENGINEERING = 'ENGINEERING';

    public const FINANCE = 'FINANCE';

    public const GOVERNMENT = 'GOVERNMENT';

    public const HEALTHCARE = 'HEALTHCARE';

    public const HOSPITALITY_AND_TOURISM = 'HOSPITALITY_AND_TOURISM';

    public const INDEPENDENT_BUSINESS_OWNER = 'INDEPENDENT_BUSINESS_OWNER';

    public const LAW = 'LAW';

    public const MANUFACTURING = 'MANUFACTURING';

    public const MATH = 'MATH';

    public const MEDIA = 'MEDIA';

    public const OFFICE_AND_ADMIN_SUPPORT = 'OFFICE_AND_ADMIN_SUPPORT';

    public const SCIENCE = 'SCIENCE';

    public const SOCIAL_SERVICES = 'SOCIAL_SERVICES';

    public const TECHNOLOGY = 'TECHNOLOGY';

    public const SALES = 'SALES';

    private const _ALL_VALUES = [
        self::ARTS,
        self::DESIGN,
        self::EDUCATION,
        self::ENGINEERING,
        self::FINANCE,
        self::GOVERNMENT,
        self::HEALTHCARE,
        self::HOSPITALITY_AND_TOURISM,
        self::INDEPENDENT_BUSINESS_OWNER,
        self::LAW,
        self::MANUFACTURING,
        self::MATH,
        self::MEDIA,
        self::OFFICE_AND_ADMIN_SUPPORT,
        self::SCIENCE,
        self::SOCIAL_SERVICES,
        self::TECHNOLOGY,
        self::SALES
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
        throw new Exception("$value is invalid for Occupations.");
    }
}
