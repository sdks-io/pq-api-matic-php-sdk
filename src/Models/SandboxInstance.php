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

class SandboxInstance
{
    public const SANDBOX = 'sandbox';

    public const SBX1 = 'sbx1';

    public const SBX2 = 'sbx2';

    public const SBX3 = 'sbx3';

    public const SBX4 = 'sbx4';

    public const SBX5 = 'sbx5';

    public const SBX6 = 'sbx6';

    public const SBX7 = 'sbx7';

    public const SBX8 = 'sbx8';

    public const SBX9 = 'sbx9';

    public const SBX10 = 'sbx10';

    public const SBX11 = 'sbx11';

    private const _ALL_VALUES = [
        self::SANDBOX,
        self::SBX1,
        self::SBX2,
        self::SBX3,
        self::SBX4,
        self::SBX5,
        self::SBX6,
        self::SBX7,
        self::SBX8,
        self::SBX9,
        self::SBX10,
        self::SBX11
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
        throw new Exception("$value is invalid for SandboxInstance.");
    }
}
