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
 * Classifies bank account [field types](#/rest/models/structures/bank-account-fields)
 */
class BankAccountFields
{
    /**
     * The nine-digit code based on the U.S. Bank location where the account was opened.
     */
    public const BANK_ACH_ABA = 'BANK_ACH_ABA';

    /**
     * The code that identifies an individual account, at a specific financial institution, in a particular
     * country, often referred to as the acount number.
     */
    public const BANK_BBAN = 'BANK_BBAN';

    /**
     * A code of a bank helps customers and bankers identify a particular bank branch.
     */
    public const BANK_BRANCH_CODE = 'BANK_BRANCH_CODE';

    /**
     * Name of branch for the actual financial institution. For example,`Bank of America`.
     */
    public const BANK_BRANCH_NAME = 'BANK_BRANCH_NAME';

    /**
     * The 6-digit number used to identify the individual branch of a financial institution used in
     * addition to the bank account number to identify the recipient of a transfer. For example,`082902`.
     * where: `08` is the two-digit code for NAB bank. `2` is the branch is located in Australian Capital
     * Territory. `902` is the NAB branch in Canberra City.
     */
    public const BANK_BSB_CODE = 'BANK_BSB_CODE';

    /**
     * The city in which the bank or financial institution associated with an account is located.
     */
    public const BANK_CITY = 'BANK_CITY';

    /**
     * CLABE (Clace Bancaria Estandarizada) The 18-digit account code containing the payee's bank account
     * number. For example, `014027000000000008`.
     */
    public const BANK_CLABE = 'BANK_CLABE';

    /**
     * Bank code of bank assigned to a bank.
     */
    public const BANK_CODE = 'BANK_CODE';

    /**
     * The ID number provided by the Mexican government to Mexican citizens and residents
     */
    public const BANK_CURP = 'BANK_CURP';

    /**
     * The standard international numbering system that identifies an overseas bank account. The number
     * starts with a two-digit country code, then two numbers, followed by several more alphanumeric
     * characters. For example,`Norway: NO 93 8601 1117947`.
     */
    public const BANK_IBAN = 'BANK_IBAN';

    /**
     * Name of actual financial institution. For example,`Bank of America`.
     */
    public const BANK_NAME = 'BANK_NAME';

    /**
     * The 8- or 11-digit Business Identifier Code (BIC) for a bank that does not allow for sending and
     * receiving financial transaction information. For example,`AAAABBCCDDD`.
     */
    public const BANK_NON_SWIFT_BIC = 'BANK_NON_SWIFT_BIC';

    /**
     * Nigerian Uniform Bank Account Number (NUBAN) The 10-digit standard international numbering system
     * that identifies a Nigerian bank account. For example, `0000013679`. where: `000001367` is the serial
     * number (the first 9 digits) and is used to indicate which bank the NUBAN is associated with, as well
     * as to point to a specific bank account at that bank. `9` (the last digit) is the [check digit](https:
     * //en.wikipedia.org/wiki/Check_digit) that determines whether the code in question is valid.
     */
    public const BANK_NUBAN = 'BANK_NUBAN';

    /**
     * The phone number for the actual financial institution.
     */
    public const BANK_PHONE_NUMBER = 'BANK_PHONE_NUMBER';

    /**
     * The 5-digit postal code of the account owner's permanent residence. For example, `50314`.
     */
    public const BANK_POSTAL_CODE = 'BANK_POSTAL_CODE';

    /**
     * The code that represents the purpose for initiating a payment to a foreign country. For example,
     * `/BANK/FUND TR`which is a cross-border fund transfer between banks.
     */
    public const BANK_PURPOSE_OF_PAYMENT_CODE = 'BANK_PURPOSE_OF_PAYMENT_CODE';

    /**
     * The two-letter region [ISO abbreviation code](https://en.wikipedia.org/wiki/ISO_3166-1) of the
     * bank's physical address.
     */
    public const BANK_REGION = 'BANK_REGION';

    /**
     * Resident Foreign Currency (RFC)The account maintained in foreign currencies for NRIs who have
     * returned to India and hold funds in foreign currency. For example, `USD` and `GBP`.
     */
    public const BANK_RFC = 'BANK_RFC';

    /**
     * Identifies both the bank and the branch where the account is held. Sort codes used to route money
     * transfers between financial institutions in the United Kingdom and in the Republic of Ireland. For
     * example, `12-34-56`.
     */
    public const BANK_SORT_CODE = 'BANK_SORT_CODE';

    /**
     * TO BE DONE
     */
    public const BANK_SSN = 'BANK_SSN';

    /**
     * The bank address's most specific details, like `street number`, `street name`, and `building name`.
     */
    public const BANK_STREET_ADDRESS = 'BANK_STREET_ADDRESS';

    /**
     * The 8- or 11-digit Business Identifier Code (BIC) for a bank that allows for sending and receiving
     * financial transaction information. For example, `AAAABBCCDDD` where: `AAAA` is the 4-character bank
     * code. `BB` is the 2-character country code. `CC` is the 2-character location code. `DD` is the 3-
     * character branch code.
     */
    public const BANK_SWIFT_BIC = 'BANK_SWIFT_BIC';

    /**
     * The 9-digit code that identifies a specific financial institution. For example, `XXXXYYYYC` where:
     * `XXXX` is the 4-digit Federal Reserve Routing Symbol. `YYYY` is the 4-digit ABA Institution
     * Identifier. `C` is the 1-digit check digit.
     */
    public const BANK_TRANSIT_CODE = 'BANK_TRANSIT_CODE';

    /**
     * The 9-digit value-added tax number for the bank that is designed to tax only the value added by a
     * business on top of the services and goods it can purchase.
     */
    public const BANK_VALUE_ADD_TAX = 'BANK_VALUE_ADD_TAX';

    /**
     * The unique identifier for the beneficial owner. For example,`caa81a5f-ec1e-4559-8b32-d90655bfd03c`.
     */
    public const BENEFICIARY_ACCOUNT_NUMBER = 'BENEFICIARY_ACCOUNT_NUMBER';

    /**
     * The beneficial owner's residential address.
     */
    public const BENEFICIARY_ADDRESS = 'BENEFICIARY_ADDRESS';

    /**
     * The legal full name for the beneficial owner.
     */
    public const BENEFICIARY_NAME = 'BENEFICIARY_NAME';

    /**
     * The phone number for the beneficial owner.
     */
    public const BENEFICIARY_PHONE_NUMBER = 'BENEFICIARY_PHONE_NUMBER';

    /**
     * The tax ID for the beneficial owner.
     */
    public const BENEFICIARY_TAX_ID = 'BENEFICIARY_TAX_ID';

    /**
     * Undefined or unrecognized bank account field.
     */
    public const UNDEFINED = 'UNDEFINED';

    private const _ALL_VALUES = [
        self::BANK_ACH_ABA,
        self::BANK_BBAN,
        self::BANK_BRANCH_CODE,
        self::BANK_BRANCH_NAME,
        self::BANK_BSB_CODE,
        self::BANK_CITY,
        self::BANK_CLABE,
        self::BANK_CODE,
        self::BANK_CURP,
        self::BANK_IBAN,
        self::BANK_NAME,
        self::BANK_NON_SWIFT_BIC,
        self::BANK_NUBAN,
        self::BANK_PHONE_NUMBER,
        self::BANK_POSTAL_CODE,
        self::BANK_PURPOSE_OF_PAYMENT_CODE,
        self::BANK_REGION,
        self::BANK_RFC,
        self::BANK_SORT_CODE,
        self::BANK_SSN,
        self::BANK_STREET_ADDRESS,
        self::BANK_SWIFT_BIC,
        self::BANK_TRANSIT_CODE,
        self::BANK_VALUE_ADD_TAX,
        self::BENEFICIARY_ACCOUNT_NUMBER,
        self::BENEFICIARY_ADDRESS,
        self::BENEFICIARY_NAME,
        self::BENEFICIARY_PHONE_NUMBER,
        self::BENEFICIARY_TAX_ID,
        self::UNDEFINED
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
        throw new Exception("$value is invalid for BankAccountFields.");
    }
}
