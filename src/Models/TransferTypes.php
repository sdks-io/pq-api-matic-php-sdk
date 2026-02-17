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
 * [Transfer type](#/rest/models/structures/transfer-type)
 */
class TransferTypes
{
    public const ACCOUNT_TO_ACCOUNT_TRANSFER = 'ACCOUNT_TO_ACCOUNT_TRANSFER';

    public const BANK_TRANSFER = 'BANK_TRANSFER';

    public const BANK_TRANSFER_RETURN = 'BANK_TRANSFER_RETURN';

    public const BANK_TRANSFER_REVERSAL = 'BANK_TRANSFER_REVERSAL';

    public const CANCELLED_PAYMENT = 'CANCELLED_PAYMENT';

    public const CARD_PURCHASE = 'CARD_PURCHASE';

    public const CARD_PURCHASE_REFUND = 'CARD_PURCHASE_REFUND';

    public const CASH_WITHDRAWAL = 'CASH_WITHDRAWAL';

    public const DEPOSIT = 'DEPOSIT';

    public const ESCHEATED_FUNDS_RETURN = 'ESCHEATED_FUNDS_RETURN';

    public const FEE = 'FEE';

    public const FEE_REFUND = 'FEE_REFUND';

    public const PAPER_CHECK = 'PAPER_CHECK';

    public const PAYMENT = 'PAYMENT';

    public const PAYMENT_RETRACTION = 'PAYMENT_RETRACTION';

    public const PREPAID_CARD_LOAD = 'PREPAID_CARD_LOAD';

    public const PREPAID_CARD_UNLOAD = 'PREPAID_CARD_UNLOAD';

    public const PROVISIONAL_REFUND = 'PROVISIONAL_REFUND';

    public const SPENDBACK = 'SPENDBACK';

    public const SPENDBACK_RETURN = 'SPENDBACK_RETURN';

    public const ELECTRONIC_WALLET_TRANSFER = 'ELECTRONIC_WALLET_TRANSFER';

    private const _ALL_VALUES = [
        self::ACCOUNT_TO_ACCOUNT_TRANSFER,
        self::BANK_TRANSFER,
        self::BANK_TRANSFER_RETURN,
        self::BANK_TRANSFER_REVERSAL,
        self::CANCELLED_PAYMENT,
        self::CARD_PURCHASE,
        self::CARD_PURCHASE_REFUND,
        self::CASH_WITHDRAWAL,
        self::DEPOSIT,
        self::ESCHEATED_FUNDS_RETURN,
        self::FEE,
        self::FEE_REFUND,
        self::PAPER_CHECK,
        self::PAYMENT,
        self::PAYMENT_RETRACTION,
        self::PREPAID_CARD_LOAD,
        self::PREPAID_CARD_UNLOAD,
        self::PROVISIONAL_REFUND,
        self::SPENDBACK,
        self::SPENDBACK_RETURN,
        self::ELECTRONIC_WALLET_TRANSFER
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
        throw new Exception("$value is invalid for TransferTypes.");
    }
}
