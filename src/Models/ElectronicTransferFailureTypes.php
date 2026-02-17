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
 * The type of failure for a bank transfer
 */
class ElectronicTransferFailureTypes
{
    /**
     * The account number is invalid or incorrect.
     */
    public const INCORRECT_ACCOUNT_NUMBER = 'INCORRECT_ACCOUNT_NUMBER';

    /**
     * The sort code or account number are invalid.
     */
    public const INVALID_SORT_CODE = 'INVALID_SORT_CODE';

    /**
     * No account was found with the details provided.
     */
    public const ACCOUNT_NOT_FOUND = 'ACCOUNT_NOT_FOUND';

    /**
     * The destination account number is invalid.
     */
    public const DESTINATION_ACCOUNT_NUMBER_INVALID = 'DESTINATION_ACCOUNT_NUMBER_INVALID';

    /**
     * The destination account number is invalid.
     */
    public const BENEFICIARY_ACCOUNT_NUMBER_INVALID = 'BENEFICIARY_ACCOUNT_NUMBER_INVALID';

    /**
     * The bank account is closed.
     */
    public const ACCOUNT_CLOSED = 'ACCOUNT_CLOSED';

    /**
     * GENERAL_COMPLIANCE
     */
    public const GENERAL_COMPLIANCE = 'GENERAL_COMPLIANCE';

    /**
     * INCORRECT_ROUTING_CODE
     */
    public const INCORRECT_ROUTING_CODE = 'INCORRECT_ROUTING_CODE';

    /**
     * BELOW_MIN_ABOVE_MAX_ALLOWED_AMOUNT
     */
    public const BELOW_MIN_ABOVE_MAX_ALLOWED_AMOUNT = 'BELOW_MIN_ABOVE_MAX_ALLOWED_AMOUNT';

    /**
     * INVALID_INSUFFICIENT_PAYMENT_DETAILS
     */
    public const INVALID_INSUFFICIENT_PAYMENT_DETAILS = 'INVALID_INSUFFICIENT_PAYMENT_DETAILS';

    /**
     * INVALID_BENEFICIARY_NAME
     */
    public const INVALID_BENEFICIARY_NAME = 'INVALID_BENEFICIARY_NAME';

    /**
     * INVALID_BENEFICIARY_TAX_ID
     */
    public const INVALID_BENEFICIARY_TAX_ID = 'INVALID_BENEFICIARY_TAX_ID';

    /**
     * INVALID_BENEFICIARY_BANK_BRANCH_ADDRESS
     */
    public const INVALID_BENEFICIARY_BANK_BRANCH_ADDRESS = 'INVALID_BENEFICIARY_BANK_BRANCH_ADDRESS';

    /**
     * INVALID_BENEFICIARY_ADDRESS
     */
    public const INVALID_BENEFICIARY_ADDRESS = 'INVALID_BENEFICIARY_ADDRESS';

    /**
     * BANK_UNABLE_TO_APPLY
     */
    public const BANK_UNABLE_TO_APPLY = 'BANK_UNABLE_TO_APPLY';

    /**
     * BANK_CODE_WRONG
     */
    public const BANK_CODE_WRONG = 'BANK_CODE_WRONG';

    /**
     * The transfer failed and the reason will be in the EFTFAILURECOMMENT field
     */
    public const OTHER = 'OTHER';

    private const _ALL_VALUES = [
        self::INCORRECT_ACCOUNT_NUMBER,
        self::INVALID_SORT_CODE,
        self::ACCOUNT_NOT_FOUND,
        self::DESTINATION_ACCOUNT_NUMBER_INVALID,
        self::BENEFICIARY_ACCOUNT_NUMBER_INVALID,
        self::ACCOUNT_CLOSED,
        self::GENERAL_COMPLIANCE,
        self::INCORRECT_ROUTING_CODE,
        self::BELOW_MIN_ABOVE_MAX_ALLOWED_AMOUNT,
        self::INVALID_INSUFFICIENT_PAYMENT_DETAILS,
        self::INVALID_BENEFICIARY_NAME,
        self::INVALID_BENEFICIARY_TAX_ID,
        self::INVALID_BENEFICIARY_BANK_BRANCH_ADDRESS,
        self::INVALID_BENEFICIARY_ADDRESS,
        self::BANK_UNABLE_TO_APPLY,
        self::BANK_CODE_WRONG,
        self::OTHER
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
        throw new Exception("$value is invalid for ElectronicTransferFailureTypes.");
    }
}
