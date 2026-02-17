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
 * The [Language](#/rest/models/structures/language) type in IETF's BCP 47 format
 */
class Languages
{
    /**
     * Czech
     */
    public const CSCZ = 'cs-CZ';

    /**
     * German
     */
    public const DEDE = 'de-DE';

    /**
     * English (UK)
     */
    public const ENGB = 'en-GB';

    /**
     * English (US)
     */
    public const ENUS = 'en-US';

    /**
     * Spanish (Spain)
     */
    public const ESES = 'es-ES';

    /**
     * Spanish (Mexico)
     */
    public const ESMX = 'es-MX';

    /**
     * French (Canadian)
     */
    public const FRCA = 'fr-CA';

    /**
     * French (France)
     */
    public const FRFR = 'fr-FR';

    /**
     * Italian
     */
    public const ITIT = 'it-IT';

    /**
     * I bet you already know
     */
    public const JAJP = 'ja-JP';

    /**
     * Korea
     */
    public const KOKR = 'ko-KR';

    /**
     * Dutch
     */
    public const NLNL = 'nl-NL';

    /**
     * Polish
     */
    public const PLPL = 'pl-PL';

    /**
     * Portuguese (Brazil)
     */
    public const PTBR = 'pt-BR';

    /**
     * Portuguese (Portugal)
     */
    public const PTPT = 'pt-PT';

    /**
     * Russian
     */
    public const RURU = 'ru-RU';

    /**
     * Chinese (Simplified)
     */
    public const ZHHANS = 'zh-Hans';

    /**
     * Chinese (Traditional)
     */
    public const ZHHANT = 'zh-Hant';

    private const _ALL_VALUES = [
        self::CSCZ,
        self::DEDE,
        self::ENGB,
        self::ENUS,
        self::ESES,
        self::ESMX,
        self::FRCA,
        self::FRFR,
        self::ITIT,
        self::JAJP,
        self::KOKR,
        self::NLNL,
        self::PLPL,
        self::PTBR,
        self::PTPT,
        self::RURU,
        self::ZHHANS,
        self::ZHHANT
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
        throw new Exception("$value is invalid for Languages.");
    }
}
