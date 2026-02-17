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
 * 3 Character symbol for country
 */
class CountriesAlphaCode3
{
    public const AFG = 'AFG';

    public const ALB = 'ALB';

    public const ATA = 'ATA';

    public const DZA = 'DZA';

    public const ASM = 'ASM';

    public const AND_ = 'AND';

    public const AGO = 'AGO';

    public const ATG = 'ATG';

    public const AZE = 'AZE';

    public const ARG = 'ARG';

    public const AUS = 'AUS';

    public const AUT = 'AUT';

    public const BHS = 'BHS';

    public const BHR = 'BHR';

    public const BGD = 'BGD';

    public const ARM = 'ARM';

    public const BRB = 'BRB';

    public const BEL = 'BEL';

    public const BMU = 'BMU';

    public const BTN = 'BTN';

    public const BOL = 'BOL';

    public const BIH = 'BIH';

    public const BWA = 'BWA';

    public const BVT = 'BVT';

    public const BRA = 'BRA';

    public const BLZ = 'BLZ';

    public const IOT = 'IOT';

    public const SLB = 'SLB';

    public const VGB = 'VGB';

    public const BRN = 'BRN';

    public const BGR = 'BGR';

    public const MMR = 'MMR';

    public const BDI = 'BDI';

    public const BLR = 'BLR';

    public const KHM = 'KHM';

    public const CMR = 'CMR';

    public const CAN = 'CAN';

    public const CPV = 'CPV';

    public const CYM = 'CYM';

    public const CAF = 'CAF';

    public const LKA = 'LKA';

    public const TCD = 'TCD';

    public const CHL = 'CHL';

    public const CHN = 'CHN';

    public const TWN = 'TWN';

    public const CXR = 'CXR';

    public const CCK = 'CCK';

    public const COL = 'COL';

    public const COM = 'COM';

    public const MYT = 'MYT';

    public const COG = 'COG';

    public const COD = 'COD';

    public const COK = 'COK';

    public const CRI = 'CRI';

    public const HRV = 'HRV';

    public const CUB = 'CUB';

    public const CYP = 'CYP';

    public const CZE = 'CZE';

    public const BEN = 'BEN';

    public const DNK = 'DNK';

    public const DMA = 'DMA';

    public const DOM = 'DOM';

    public const ECU = 'ECU';

    public const SLV = 'SLV';

    public const CIV = 'CIV';

    public const GNQ = 'GNQ';

    public const ETH = 'ETH';

    public const ERI = 'ERI';

    public const EST = 'EST';

    public const FRO = 'FRO';

    public const FLK = 'FLK';

    public const SGS = 'SGS';

    public const FJI = 'FJI';

    public const FIN = 'FIN';

    public const ALA = 'ALA';

    public const FRA = 'FRA';

    public const GUF = 'GUF';

    public const PYF = 'PYF';

    public const ATF = 'ATF';

    public const DJI = 'DJI';

    public const GAB = 'GAB';

    public const GEO = 'GEO';

    public const GMB = 'GMB';

    public const PSE = 'PSE';

    public const DEU = 'DEU';

    public const GHA = 'GHA';

    public const GIB = 'GIB';

    public const KIR = 'KIR';

    public const GRC = 'GRC';

    public const GRL = 'GRL';

    public const GRD = 'GRD';

    public const GLP = 'GLP';

    public const GUM = 'GUM';

    public const GTM = 'GTM';

    public const GIN = 'GIN';

    public const GUY = 'GUY';

    public const HTI = 'HTI';

    public const HMD = 'HMD';

    public const VAT = 'VAT';

    public const HND = 'HND';

    public const HKG = 'HKG';

    public const HUN = 'HUN';

    public const ISL = 'ISL';

    public const IND = 'IND';

    public const IDN = 'IDN';

    public const IRN = 'IRN';

    public const IRQ = 'IRQ';

    public const IRL = 'IRL';

    public const ISR = 'ISR';

    public const ITA = 'ITA';

    public const JAM = 'JAM';

    public const JPN = 'JPN';

    public const KAZ = 'KAZ';

    public const JOR = 'JOR';

    public const KEN = 'KEN';

    public const PRK = 'PRK';

    public const KOR = 'KOR';

    public const KWT = 'KWT';

    public const KGZ = 'KGZ';

    public const LAO = 'LAO';

    public const LBN = 'LBN';

    public const LSO = 'LSO';

    public const LVA = 'LVA';

    public const LBR = 'LBR';

    public const LBY = 'LBY';

    public const LIE = 'LIE';

    public const LTU = 'LTU';

    public const LUX = 'LUX';

    public const MAC = 'MAC';

    public const MDG = 'MDG';

    public const MWI = 'MWI';

    public const MYS = 'MYS';

    public const MDV = 'MDV';

    public const MLI = 'MLI';

    public const MLT = 'MLT';

    public const MTQ = 'MTQ';

    public const MRT = 'MRT';

    public const MUS = 'MUS';

    public const MEX = 'MEX';

    public const MCO = 'MCO';

    public const MNG = 'MNG';

    public const MDA = 'MDA';

    public const MNE = 'MNE';

    public const MSR = 'MSR';

    public const MAR = 'MAR';

    public const MOZ = 'MOZ';

    public const OMN = 'OMN';

    public const NAM = 'NAM';

    public const NRU = 'NRU';

    public const NPL = 'NPL';

    public const NLD = 'NLD';

    public const ANT = 'ANT';

    public const CUW = 'CUW';

    public const ABW = 'ABW';

    public const SXM = 'SXM';

    public const BES = 'BES';

    public const NCL = 'NCL';

    public const VUT = 'VUT';

    public const NZL = 'NZL';

    public const NIC = 'NIC';

    public const NER = 'NER';

    public const NGA = 'NGA';

    public const NIU = 'NIU';

    public const NFK = 'NFK';

    public const NOR = 'NOR';

    public const MNP = 'MNP';

    public const UMI = 'UMI';

    public const FSM = 'FSM';

    public const MHL = 'MHL';

    public const PLW = 'PLW';

    public const PAK = 'PAK';

    public const PAN = 'PAN';

    public const PNG = 'PNG';

    public const PRY = 'PRY';

    public const PER = 'PER';

    public const PHL = 'PHL';

    public const PCN = 'PCN';

    public const POL = 'POL';

    public const PRT = 'PRT';

    public const GNB = 'GNB';

    public const TLS = 'TLS';

    public const PRI = 'PRI';

    public const QAT = 'QAT';

    public const REU = 'REU';

    public const ROU = 'ROU';

    public const RUS = 'RUS';

    public const RWA = 'RWA';

    public const BLM = 'BLM';

    public const SHN = 'SHN';

    public const KNA = 'KNA';

    public const AIA = 'AIA';

    public const LCA = 'LCA';

    public const MAF = 'MAF';

    public const SPM = 'SPM';

    public const VCT = 'VCT';

    public const SMR = 'SMR';

    public const STP = 'STP';

    public const SAU = 'SAU';

    public const SEN = 'SEN';

    public const SRB = 'SRB';

    public const SYC = 'SYC';

    public const SLE = 'SLE';

    public const SGP = 'SGP';

    public const SVK = 'SVK';

    public const VNM = 'VNM';

    public const SVN = 'SVN';

    public const SOM = 'SOM';

    public const ZAF = 'ZAF';

    public const ZWE = 'ZWE';

    public const ESP = 'ESP';

    public const SSD = 'SSD';

    public const ESH = 'ESH';

    public const SDN = 'SDN';

    public const SUR = 'SUR';

    public const SJM = 'SJM';

    public const SWZ = 'SWZ';

    public const SWE = 'SWE';

    public const CHE = 'CHE';

    public const SYR = 'SYR';

    public const TJK = 'TJK';

    public const THA = 'THA';

    public const TGO = 'TGO';

    public const TKL = 'TKL';

    public const TON = 'TON';

    public const TTO = 'TTO';

    public const ARE = 'ARE';

    public const TUN = 'TUN';

    public const TUR = 'TUR';

    public const TKM = 'TKM';

    public const TCA = 'TCA';

    public const TUV = 'TUV';

    public const UGA = 'UGA';

    public const UKR = 'UKR';

    public const MKD = 'MKD';

    public const EGY = 'EGY';

    public const GBR = 'GBR';

    public const GGY = 'GGY';

    public const JEY = 'JEY';

    public const IMN = 'IMN';

    public const TZA = 'TZA';

    public const USA = 'USA';

    public const VIR = 'VIR';

    public const BFA = 'BFA';

    public const URY = 'URY';

    public const UZB = 'UZB';

    public const VEN = 'VEN';

    public const WLF = 'WLF';

    public const WSM = 'WSM';

    public const YEM = 'YEM';

    public const ZMB = 'ZMB';

    private const _ALL_VALUES = [
        self::AFG,
        self::ALB,
        self::ATA,
        self::DZA,
        self::ASM,
        self::AND_,
        self::AGO,
        self::ATG,
        self::AZE,
        self::ARG,
        self::AUS,
        self::AUT,
        self::BHS,
        self::BHR,
        self::BGD,
        self::ARM,
        self::BRB,
        self::BEL,
        self::BMU,
        self::BTN,
        self::BOL,
        self::BIH,
        self::BWA,
        self::BVT,
        self::BRA,
        self::BLZ,
        self::IOT,
        self::SLB,
        self::VGB,
        self::BRN,
        self::BGR,
        self::MMR,
        self::BDI,
        self::BLR,
        self::KHM,
        self::CMR,
        self::CAN,
        self::CPV,
        self::CYM,
        self::CAF,
        self::LKA,
        self::TCD,
        self::CHL,
        self::CHN,
        self::TWN,
        self::CXR,
        self::CCK,
        self::COL,
        self::COM,
        self::MYT,
        self::COG,
        self::COD,
        self::COK,
        self::CRI,
        self::HRV,
        self::CUB,
        self::CYP,
        self::CZE,
        self::BEN,
        self::DNK,
        self::DMA,
        self::DOM,
        self::ECU,
        self::SLV,
        self::CIV,
        self::GNQ,
        self::ETH,
        self::ERI,
        self::EST,
        self::FRO,
        self::FLK,
        self::SGS,
        self::FJI,
        self::FIN,
        self::ALA,
        self::FRA,
        self::GUF,
        self::PYF,
        self::ATF,
        self::DJI,
        self::GAB,
        self::GEO,
        self::GMB,
        self::PSE,
        self::DEU,
        self::GHA,
        self::GIB,
        self::KIR,
        self::GRC,
        self::GRL,
        self::GRD,
        self::GLP,
        self::GUM,
        self::GTM,
        self::GIN,
        self::GUY,
        self::HTI,
        self::HMD,
        self::VAT,
        self::HND,
        self::HKG,
        self::HUN,
        self::ISL,
        self::IND,
        self::IDN,
        self::IRN,
        self::IRQ,
        self::IRL,
        self::ISR,
        self::ITA,
        self::JAM,
        self::JPN,
        self::KAZ,
        self::JOR,
        self::KEN,
        self::PRK,
        self::KOR,
        self::KWT,
        self::KGZ,
        self::LAO,
        self::LBN,
        self::LSO,
        self::LVA,
        self::LBR,
        self::LBY,
        self::LIE,
        self::LTU,
        self::LUX,
        self::MAC,
        self::MDG,
        self::MWI,
        self::MYS,
        self::MDV,
        self::MLI,
        self::MLT,
        self::MTQ,
        self::MRT,
        self::MUS,
        self::MEX,
        self::MCO,
        self::MNG,
        self::MDA,
        self::MNE,
        self::MSR,
        self::MAR,
        self::MOZ,
        self::OMN,
        self::NAM,
        self::NRU,
        self::NPL,
        self::NLD,
        self::ANT,
        self::CUW,
        self::ABW,
        self::SXM,
        self::BES,
        self::NCL,
        self::VUT,
        self::NZL,
        self::NIC,
        self::NER,
        self::NGA,
        self::NIU,
        self::NFK,
        self::NOR,
        self::MNP,
        self::UMI,
        self::FSM,
        self::MHL,
        self::PLW,
        self::PAK,
        self::PAN,
        self::PNG,
        self::PRY,
        self::PER,
        self::PHL,
        self::PCN,
        self::POL,
        self::PRT,
        self::GNB,
        self::TLS,
        self::PRI,
        self::QAT,
        self::REU,
        self::ROU,
        self::RUS,
        self::RWA,
        self::BLM,
        self::SHN,
        self::KNA,
        self::AIA,
        self::LCA,
        self::MAF,
        self::SPM,
        self::VCT,
        self::SMR,
        self::STP,
        self::SAU,
        self::SEN,
        self::SRB,
        self::SYC,
        self::SLE,
        self::SGP,
        self::SVK,
        self::VNM,
        self::SVN,
        self::SOM,
        self::ZAF,
        self::ZWE,
        self::ESP,
        self::SSD,
        self::ESH,
        self::SDN,
        self::SUR,
        self::SJM,
        self::SWZ,
        self::SWE,
        self::CHE,
        self::SYR,
        self::TJK,
        self::THA,
        self::TGO,
        self::TKL,
        self::TON,
        self::TTO,
        self::ARE,
        self::TUN,
        self::TUR,
        self::TKM,
        self::TCA,
        self::TUV,
        self::UGA,
        self::UKR,
        self::MKD,
        self::EGY,
        self::GBR,
        self::GGY,
        self::JEY,
        self::IMN,
        self::TZA,
        self::USA,
        self::VIR,
        self::BFA,
        self::URY,
        self::UZB,
        self::VEN,
        self::WLF,
        self::WSM,
        self::YEM,
        self::ZMB
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
        throw new Exception("$value is invalid for CountriesAlphaCode3.");
    }
}
