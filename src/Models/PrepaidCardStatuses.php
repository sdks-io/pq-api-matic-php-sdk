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
 * Current [status](#/rest/models/structures/prepaid-card-status) of the prepaid card
 */
class PrepaidCardStatuses
{
    /**
     * The prepaid card is active and ready to use.
     */
    public const ACTIVATED = 'ACTIVATED';

    /**
     * The prepaid card is damaged and is no longer usable.
     */
    public const CLOSED = 'CLOSED';

    /**
     * The prepaid card is expired and is no longer usable.
     */
    public const CLOSED_LOST_STOLEN_DAMAGED = 'CLOSED_LOST_STOLEN_DAMAGED';

    /**
     * The prepaid card has been suspended for compliance reasons.
     */
    public const COMPLIANCE_HOLD = 'COMPLIANCE_HOLD';

    /**
     * The expiration date set for the prepaid card has elapsed. The prepaid card will no longer be
     * accepted.
     */
    public const EXPIRED = 'EXPIRED';

    /**
     * The prepaid card has been created but has not yet been activated. Instantly issued cards are
     * activated automatically.Plastic cards are activated upon delivery and require the CVV on the back of
     * the prepaid card to complete.
     */
    public const PENDING_ACTIVATION = 'PENDING_ACTIVATION';

    /**
     * The prepaid card is awaiting order placement and will transition to PENDING_ACTIVATION once ordered.
     */
    public const QUEUED = 'QUEUED';

    /**
     * TO BE DONE
     */
    public const STAGED = 'STAGED';

    /**
     * The prepaid card has been suspended and may neither send nor receive funds.
     */
    public const SUSPENDED = 'SUSPENDED';

    private const _ALL_VALUES = [
        self::ACTIVATED,
        self::CLOSED,
        self::CLOSED_LOST_STOLEN_DAMAGED,
        self::COMPLIANCE_HOLD,
        self::EXPIRED,
        self::PENDING_ACTIVATION,
        self::QUEUED,
        self::STAGED,
        self::SUSPENDED
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
        throw new Exception("$value is invalid for PrepaidCardStatuses.");
    }
}
