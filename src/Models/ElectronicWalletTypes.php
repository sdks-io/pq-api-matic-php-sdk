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
 * Name of the electronic wallet
 */
class ElectronicWalletTypes
{
    public const AIRTEL_MONEY = 'AIRTEL_MONEY';

    public const AIRTEL_TIGO_MONEY = 'AIRTEL_TIGO_MONEY';

    public const ALIPAY = 'ALIPAY';

    public const AMOLE = 'AMOLE';

    public const ASTRAPAY = 'ASTRAPAY';

    public const AWASH_BIRR = 'AWASH_BIRR';

    public const AYA_PAY_WALLET = 'AYA_PAY_WALLET';

    public const BANKILY = 'BANKILY';

    public const BIGPAY = 'BIGPAY';

    public const BILLET_BHD_WALLET = 'BILLET_BHD_WALLET';

    public const BILLETERA_MOVIL_BANPRO = 'BILLETERA_MOVIL_BANPRO';

    public const BKASH = 'BKASH';

    public const CBE_BIRR = 'CBE_BIRR';

    public const CELLPAY = 'CELLPAY';

    public const COINS = 'COINS';

    public const DANA = 'DANA';

    public const DAVIPLATA = 'DAVIPLATA';

    public const DIGICEL_MYCASH = 'DIGICEL_MYCASH';

    public const DINARAK = 'DINARAK';

    public const EASY_PAISA_WALLET = 'EASY_PAISA_WALLET';

    public const ECOCASH = 'ECOCASH';

    public const EQUITEL_MONEY = 'EQUITEL_MONEY';

    public const ESEWA = 'ESEWA';

    public const EXPRESS_UNION = 'EXPRESS_UNION';

    public const EZ_CASH = 'EZ_CASH';

    public const FDH_BANK_WALLETS = 'FDH_BANK_WALLETS';

    public const FINJA_WALLET = 'FINJA_WALLET';

    public const GADHA = 'GADHA';

    public const GCASH = 'GCASH';

    public const GOPAY = 'GOPAY';

    public const GRABPAY = 'GRABPAY';

    public const HELLOCASH = 'HELLOCASH';

    public const HORMUUD_EVC = 'HORMUUD_EVC';

    public const ICASH = 'ICASH';

    public const ILLICOCASH = 'ILLICOCASH';

    public const IME_PAY = 'IME_PAY';

    public const IMKAS = 'IMKAS';

    public const JAZZ_CASH_WALLET = 'JAZZ_CASH_WALLET';

    public const KHALTI_WALLET = 'KHALTI_WALLET';

    public const LENDMN = 'LENDMN';

    public const LINKAJA = 'LINKAJA';

    public const M_PAISA = 'M_PAISA';

    public const M_PESA = 'M_PESA';

    public const MCASH = 'MCASH';

    public const MGURUSH_MOBILE_MONEY = 'MGURUSH_MOBILE_MONEY';

    public const MOMO = 'MOMO';

    public const MONCASH = 'MONCASH';

    public const MOOV_MONEY = 'MOOV_MONEY';

    public const MORU = 'MORU';

    public const MOVII = 'MOVII';

    public const MTN_GUINEA_CONAKRY = 'MTN_GUINEA_CONAKRY';

    public const MTN_MOBILE_MONEY = 'MTN_MOBILE_MONEY';

    public const NAMASTEPAY = 'NAMASTEPAY';

    public const NAYAPAY = 'NAYAPAY';

    public const NEQUI = 'NEQUI';

    public const ORANGE_MONEY = 'ORANGE_MONEY';

    public const OVO = 'OVO';

    public const PAYMAYA = 'PAYMAYA';

    public const PAYTREN = 'PAYTREN';

    public const PRABHU_PAY = 'PRABHU_PAY';

    public const PREMIER_WALLET = 'PREMIER_WALLET';

    public const QIWI = 'QIWI';

    public const QPAY = 'QPAY';

    public const SADAPAY = 'SADAPAY';

    public const SAJILOPAY = 'SAJILOPAY';

    public const SHOPEEPAY = 'SHOPEEPAY';

    public const SMARTCASH_AIRTEL = 'SMARTCASH_AIRTEL';

    public const TELEBIRR = 'TELEBIRR';

    public const TIGO_MONEY = 'TIGO_MONEY';

    public const TIGO_PESA = 'TIGO_PESA';

    public const TNG_DIGITAL = 'TNG_DIGITAL';

    public const TNM_WALLETS = 'TNM_WALLETS';

    public const TRUEMONEY_WALLET = 'TRUEMONEY_WALLET';

    public const UNIPAGO = 'UNIPAGO';

    public const UWALLET = 'UWALLET';

    public const VNPAY = 'VNPAY';

    public const VNPT_PAY = 'VNPT_PAY';

    public const VODAFONE_MONEY = 'VODAFONE_MONEY';

    public const WECHATPAY = 'WECHATPAY';

    public const WING_MONEY = 'WING_MONEY';

    public const YOAPP = 'YOAPP';

    public const ZAIN_CASH = 'ZAIN_CASH';

    public const ZALOPAY = 'ZALOPAY';

    public const ZAMTEL_MOBILE_MONEY = 'ZAMTEL_MOBILE_MONEY';

    public const UNDEFINED = 'UNDEFINED';

    private const _ALL_VALUES = [
        self::AIRTEL_MONEY,
        self::AIRTEL_TIGO_MONEY,
        self::ALIPAY,
        self::AMOLE,
        self::ASTRAPAY,
        self::AWASH_BIRR,
        self::AYA_PAY_WALLET,
        self::BANKILY,
        self::BIGPAY,
        self::BILLET_BHD_WALLET,
        self::BILLETERA_MOVIL_BANPRO,
        self::BKASH,
        self::CBE_BIRR,
        self::CELLPAY,
        self::COINS,
        self::DANA,
        self::DAVIPLATA,
        self::DIGICEL_MYCASH,
        self::DINARAK,
        self::EASY_PAISA_WALLET,
        self::ECOCASH,
        self::EQUITEL_MONEY,
        self::ESEWA,
        self::EXPRESS_UNION,
        self::EZ_CASH,
        self::FDH_BANK_WALLETS,
        self::FINJA_WALLET,
        self::GADHA,
        self::GCASH,
        self::GOPAY,
        self::GRABPAY,
        self::HELLOCASH,
        self::HORMUUD_EVC,
        self::ICASH,
        self::ILLICOCASH,
        self::IME_PAY,
        self::IMKAS,
        self::JAZZ_CASH_WALLET,
        self::KHALTI_WALLET,
        self::LENDMN,
        self::LINKAJA,
        self::M_PAISA,
        self::M_PESA,
        self::MCASH,
        self::MGURUSH_MOBILE_MONEY,
        self::MOMO,
        self::MONCASH,
        self::MOOV_MONEY,
        self::MORU,
        self::MOVII,
        self::MTN_GUINEA_CONAKRY,
        self::MTN_MOBILE_MONEY,
        self::NAMASTEPAY,
        self::NAYAPAY,
        self::NEQUI,
        self::ORANGE_MONEY,
        self::OVO,
        self::PAYMAYA,
        self::PAYTREN,
        self::PRABHU_PAY,
        self::PREMIER_WALLET,
        self::QIWI,
        self::QPAY,
        self::SADAPAY,
        self::SAJILOPAY,
        self::SHOPEEPAY,
        self::SMARTCASH_AIRTEL,
        self::TELEBIRR,
        self::TIGO_MONEY,
        self::TIGO_PESA,
        self::TNG_DIGITAL,
        self::TNM_WALLETS,
        self::TRUEMONEY_WALLET,
        self::UNIPAGO,
        self::UWALLET,
        self::VNPAY,
        self::VNPT_PAY,
        self::VODAFONE_MONEY,
        self::WECHATPAY,
        self::WING_MONEY,
        self::YOAPP,
        self::ZAIN_CASH,
        self::ZALOPAY,
        self::ZAMTEL_MOBILE_MONEY,
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
        throw new Exception("$value is invalid for ElectronicWalletTypes.");
    }
}
