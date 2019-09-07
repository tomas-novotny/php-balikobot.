<?php

namespace Inspirum\Balikobot\Definitions;

class ServiceType
{
    /**
     * Balík do ruky
     *
     * @var string
     */
    public const CP_DR = 'DR';

    /**
     * Doporučená zásilka
     *
     * @var string
     */
    public const CP_RR = 'RR';

    /**
     * na poštu
     *
     * @var string
     */
    public const CP_NP = 'NP';

    /**
     * balík do ruky pro vybrané podavatele
     *
     * @var string
     */
    public const CP_DV = 'DV';

    /**
     * cenné psaní
     *
     * @var string
     */
    public const CP_VL = 'VL';

    /**
     * doporučená zásilka standard
     *
     * @var string
     */
    public const CP_SR = 'SR';

    /**
     * doporučený balíček
     *
     * @var string
     */
    public const CP_BA = 'BA';

    /**
     * cenný balík
     *
     * @var string
     */
    public const CP_BB = 'BB';

    /**
     * balík nadrozměr
     *
     * @var string
     */
    public const CP_BN = 'BN';

    /**
     * balík do balíkovny
     *
     * @var string
     */
    public const CP_NB = 'NB';

    /**
     * DE balík Do ruky s garantovaným časem dodání
     *
     * @var string
     */
    public const CP_DT = 'DT';

    /**
     * balík Do ruky s garantovaným časem dodání v neděli nebo svátek
     *
     * @var string
     */
    public const CP_DS = 'DS';

    /**
     * EMS expresní přeprava po ČR
     *
     * @var string
     */
    public const CP_EE = 'EE';

    /**
     * Balík Expres
     *
     * @var string
     */
    public const CP_BE = 'BE';

    /**
     * RR Doporučená zásilka do zahraničí Prioritní
     *
     * @var string
     */
    public const CP_RZP = 'RZP';

    /**
     * VL Cenné psaní do zahraničí Prioritní
     *
     * @var string
     */
    public const CP_VZP = 'VZP';

    /**
     * EMS Expresní přeprava do zahraničí
     *
     * @var string
     */
    public const CP_EM = 'EM';

    /**
     * CS Standardní balík do zahraničí Prioritní
     *
     * @var string
     */
    public const CP_CSP = 'CSP';

    /**
     * CS Standardní balík do zahraničí Ekonomický
     *
     * @var string
     */
    public const CP_CSE = 'CSE';

    /**
     * CV Cenný balík do zahraničí Prioritní
     *
     * @var string
     */
    public const CP_CVP = 'CVP';

    /**
     * CV Cenný balík do zahraničí Ekonomický
     *
     * @var string
     */
    public const CP_CVE = 'CVE';

    /**
     * Obchodní balík do zahraničí
     *
     * @var string
     */
    public const CP_CE = 'CE';

    /**
     * PPL Parcel Business CZ
     *
     * @var string
     */
    public const PPL_PARCEL_BUSSINESS_CZ = '1';

    /**
     * PPL Parcel Connect (exportní balík)
     *
     * @var string
     */
    public const PPL_CONNECT = '2';

    /**
     * PPL Parcel CZ Dopolední balík
     *
     * @var string
     */
    public const PPL_AFTERNOON = '3';

    /**
     * PPL Parcel CZ Private (soukromý balík)
     *
     * @var string
     */
    public const PPL_PRIVATE = '4';

    /**
     * PPL Parcel CZ Business (firemní balík)
     *
     * @var string
     */
    public const PPL_BUSINESS = '8';

    /**
     * PPL Parcel CZ Private - Večerní doručení
     *
     * @var string
     */
    public const PPL_PRIVATE_EVENING = '9';

    /**
     * PPl Parcel Import
     *
     * @var string
     */
    public const PPL_PARCEL_IMPORT = '11';

    /**
     * PPL Firemní paleta
     *
     * @var string
     */
    public const PPL_BUSINESS_PALETTE = '15';

    /**
     *
     * PPL Soukromá paleta
     *
     * @var string
     */
    public const PPL_PRIVATE_PALETTE = '19';

    /**
     * DPD Classic
     *
     * @var string
     */
    public const DPD_CLASSIC = '1';

    /**
     * DPD Private
     *
     * @var string
     */
    public const DPD_PRIVATE = '2';

    /**
     * DPD Pickup
     *
     * @var string
     */
    public const DPD_PICKUP = '3';

    /**
     * DPD Expresní doručení do 10:00
     *
     * @var string
     */
    public const DPD_EXPRESS_10 = '4';

    /**
     * DPD Expresní doručení do 12:00
     *
     * @var string
     */
    public const DPD_EXPRESS_12 = '5';

    /**
     * DPD Expresní doručení do 18:00
     *
     * @var string
     */
    public const DPD_EXPRESS_18 = '6';

    /**
     * DPD Private večerní doručení
     *
     * @var string
     */
    public const DPD_PRIVATE_EVENING = '7';

    /**
     * DPD Private sobotní doručení
     *
     * @var string
     */
    public const DPD_PRIVATE_SATURDAY = '8';

    /**
     * Soukromá zásilka (B2C)
     * // TODO: rename to B2C
     *
     * @var string
     */
    public const GEIS_PARCEL_PRIVATE = '1';

    /**
     * Firemní zásilka
     * // TODO: rename to B2B
     *
     * @var string
     */
    public const GEIS_PARCEL_BUSINESS = '2';

    /**
     * Mezinárodní zásilka (B2B)
     *
     * @var string
     */
    public const GEIS_PARCEL_BUSINESS_INTERNATIONAL = '3';

    /**
     * Vnitrostátní paletová zásilka B2B
     *
     * @var string
     */
    public const GEIS_CARGO_BUSINESS_NATIONAL = '4';

    /**
     * Mezinárodní paletová zásilka B2B
     *
     * @var string
     */
    public const GEIS_CARGO_BUSINESS_INTERNATIONAL = '5';

    /**
     * Geis Point
     *
     * @var string
     */
    public const GEIS_PARCEL_GEIS_POINT = '6';

    /**
     * Garantované doručení (GAR)
     *
     * @var string
     */
    public const GEIS_PARCEL_GARANTED = '7';

    /**
     * Doručení do 12. hodin (D12)
     *
     * @var string
     */
    public const GEIS_PARCEL_12 = '8';

    /**
     * Mezinárodní zásilka (B2C)
     *
     * @var string
     */
    public const GEIS_PARCEL_PRIVATE_INTERNATIONAL = '9';

    /**
     * Vnitrostátní paletová zásilka B2C
     *
     * @var string
     */
    public const GEIS_CARGO_PRIVATE_NATIONAL = '10';

    /**
     * Mezinárodní paletová zásilka B2C
     *
     * @var string
     */
    public const GEIS_CARGO_PRIVATE_INTERNATIONAL = '11';

    /**
     * Business Parcel (doručení do ruky)
     *
     * @var string
     */
    public const GLS_BUSINESS = '1';

    /**
     * ShopDelivery Service (doručení na výdejní místo)
     *
     * @var string
     */
    public const GLS_SHOP = '2';

    /**
     * Express Parcel (expresní zásilka)
     *
     * @var string
     */
    public const GLS_EXPRESS = '3';

    /**
     * Small Colli 24-CZ
     *
     * @var string
     */
    public const INTIME_SMALL_CZ = '1';

    /**
     * Medium Colli 24-CZ
     *
     * @var string
     */
    public const INTIME_MEDIUM_CZ = '2';

    /**
     * Large Colli 24-CZ
     *
     * @var string
     */
    public const INTIME_LARGE_CZ = '3';

    /**
     * Poštomat CZ
     *
     * @var string
     */
    public const INTIME_POSTOMAT_CZ = '4';

    /**
     * Poštomat SK
     *
     * @var string
     */
    public const INTIME_POSTOMAT_SK = '5';

    /**
     * Large Colli 48-SK
     *
     * @var string
     */
    public const INTIME_LARGE_SK = '6';

    /**
     * Extra Large Colli 24-CZ
     *
     * @var string
     */
    public const INTIME_EXTRA_CZ = '7';

    /**
     * Parcel EU
     *
     * @var string
     */
    public const INTIME_PARCEL_EU = '8';

    /**
     * Parcel EU+
     *
     * @var string
     */
    public const INTIME_PARCEL_EU_PLUS = '9';

    /**
     * 24 hodin (Standard)
     *
     * @var string
     */
    public const TOP_TRANS_STANDARD = '1';

    /**
     * Toptime
     *
     * @var string
     */
    public const TOP_TRANS_TOPTIME = '2';

    /**
     * Privat
     *
     * @var string
     */
    public const TOP_TRANS_PRIVATE = '3';

    /**
     * Weekend
     *
     * @var string
     */
    public const TOP_TRANS_WEEKEND = '4';

    /**
     * Osobní odběr
     *
     * @var string
     */
    public const TOP_TRANS_PERSONAL = '5';

    /**
     * Po avizaci
     *
     * @var string
     */
    public const TOP_TRANS_NOTICE = '6';

    /**
     * Balík na adresu – zmluvní zákazníci
     *
     * @var string
     */
    public const SP_BZA = 'BZA';

    /**
     * Balík na poštu – zmluvní zákazníci
     *
     * @var string
     */
    public const SP_BZP = 'BZP';

    /**
     * Balík do BalíkoBOXu
     *
     * @var string
     */
    public const SP_BZB = 'BZB';

    /**
     * Expres kuriér na adresu
     *
     * @var string
     */
    public const SP_EXA = 'EXA';

    /**
     * Expres kuriér na poštu
     *
     * @var string
     */
    public const SP_EXP = 'EXP';

    /**
     * Expres kuriér do BalíkoBOXu
     *
     * @var string
     */
    public const SP_EXB = 'EXB';

    /**
     * Balík na adresu
     *
     * @var string
     */
    public const SP_BNA = 'BNA';

    /**
     * Balík na poštu
     *
     * @var string
     */
    public const SP_BNP = 'BNP';

    /**
     * Balík do BalíkoBOXu
     *
     * @var string
     */
    public const SP_BNB = 'BNB';

    /**
     * Doporučený list
     *
     * @var string
     */
    public const SP_RRA = 'RRA';

    /**
     * Expres (vnitrostátní zásilky)
     *
     * @var string
     */
    public const SPS_EXPRESS = '1';

    /**
     * Expres do 12:00 (vnitrostátní zásilky)
     *
     * @var string
     */
    public const SPS_EXPRESS_12 = '2';

    /**
     * Expres do 09:00 (vnitrostátní zásilky)
     *
     * @var string
     */
    public const SPS_EXPRESS_9 = '3';

    /**
     * Export (mezinárodní zásilky)
     *
     * @var string
     */
    public const SPS_INTERNATIONAL = '4';

    /**
     * Uloženka
     *
     * @var string
     */
    public const ULOZENKA_ULOZENKA = '1';

    /**
     * Slovenská pošta
     *
     * @var string
     */
    public const ULOZENKA_SP = '2';

    /**
     * DPD Classic na Slovensko
     *
     * @var string
     */
    public const ULOZENKA_DPD_CLASSIC_SK = '3';

    /**
     * DPD Private pro ČR a SK
     *
     * @var string
     */
    public const ULOZENKA_DPD_PRIVATE = '4';

    /**
     * DPD ParcelShop
     *
     * @var string
     */
    public const ULOZENKA_DPD_PARCEL = '5';

    /**
     * Balík do ruky – Česká pošta,
     *
     * @var string
     */
    public const ULOZENKA_CP_DR = '6';

    /**
     * Balík na poštu – Česká pošta
     *
     * @var string
     */
    public const ULOZENKA_CP_NP = '7';

    /**
     * Partner
     *
     * @var string
     */
    public const ULOZENKA_PARTNER = '11';

    /**
     * Doručení na adresu D+1
     *
     * @var string
     */
    public const ULOZENKA_D1 = '17';

    /**
     * Expres Kurýr SK
     *
     * @var string
     */
    public const ULOZENKA_EXPRESS_COURRIER = '19';

    /**
     * Expres na poštu SK
     *
     * @var string
     */
    public const ULOZENKA_EXPRESS_SK = '20';

    /**
     * BalíkoBOX SK
     *
     * @var string
     */
    public const ULOZENKA_BALIKOBOX_SK = '21';

    /**
     * Depo SK
     *
     * @var string
     */
    public const ULOZENKA_DEPO_SK = '22';

    /**
     * Zasilkovna
     *
     * @var string|null
     */
    public const ZASILKOVNA = null;

    /**
     * DHL
     *
     * @var string
     */
    public const PBH_DHL = '1';

    /**
     * GLS
     *
     * @var string
     */
    public const PBH_GLS = '2';

    /**
     * UPS
     *
     * @var string
     */
    public const PBH_UPS = '3';

    /**
     * Slovenská pošta
     *
     * @var string
     */
    public const PBH_SP = '4';

    /**
     * Transoflex
     *
     * @var string
     */
    public const PBH_TRANSOFLEX = '5';

    /**
     * Maďarská pošta
     *
     * @var string
     */
    public const PBH_MP = '6';

    /**
     * Cargus
     *
     * @var string
     */
    public const PBH_CARGUS = '7';

    /**
     * Rakouská pošta
     *
     * @var string
     */
    public const PBH_RP = '8';

    /**
     * Česká pošta – Balík do ruky
     *
     * @var string
     */
    public const PBH_CP_DR = '9';

    /**
     * Česká pošta – Balík na poštu
     *
     * @var string
     */
    public const PBH_CP_NP = '10';

    /**
     * PPL
     *
     * @var string
     */
    public const PBH_PPL = '11';

    /**
     * DPD
     *
     * @var string
     */
    public const PBH_DPD = '12';

    /**
     * Polská pošta
     *
     * @var string
     */
    public const PBH_PP = '13';

    /**
     * polský Inpost Kurier
     *
     * @var string
     */
    public const PBH_INPOST_KURIER = '14';

    /**
     * FAN Courier
     *
     * @var string
     */
    public const PBH_FAN_KURIER = '15';

    /**
     * Hermes
     *
     * @var string
     */
    public const PBH_HERMES = '16';

    /**
     * Speedy
     *
     * @var string
     */
    public const PBH_SPEEDY = '17';

    /**
     * Colissimo
     *
     * @var string
     */
    public const PBH_COLISSIMO = '18';

    /**
     * Meest
     *
     * @var string
     */
    public const PBH_MEEST = '19';

    /**
     * Nova Poshta
     *
     * @var string
     */
    public const PBH_NOBA_POSHTA = '20';

    /**
     * Worlwide zásilky
     *
     * @var string
     */
    public const DHL_WORLDWIDE = '1';

    /**
     * Express Worldwide dokumenty
     *
     * @var string
     */
    public const DHL_EXPRESS_DOCUMENTS = '2';

    /**
     * Express Worldwide 9:00
     *
     * @var string
     */
    public const DHL_EXPRESS_WORLDWIDE_9 = '3';

    /**
     * Express Worldwide 12:00
     *
     * @var string
     */
    public const DHL_EXPRESS_WORLDWIDE_12 = '4';

    /**
     * Economy Select
     *
     * @var string
     */
    public const DHL_ECONOMY = '5';

    /**
     * Domestic Express 12:00
     *
     * @var string
     */
    public const DHL_DOMESTIC_12 = '6';

    /**
     * Domestic Express
     *
     * @var string
     */
    public const DHL_DOMESTIC_EXPRESS = '7';

    /**
     * Parcel
     *
     * @var string
     */
    public const DHLSK_PARCEL = '1';

    /**
     * Parcel International
     *
     * @var string
     */
    public const DHLSK_PARCEL_INTERNATIONAL = '2';

    /**
     * Parcel Business
     *
     * @var string
     */
    public const DHLSK_PARCEL_BUSSINESS = '3';

    /**
     * Express
     *
     * @var string
     */
    public const UPS_EXPRESS = '1';

    /**
     * Express Saver
     *
     * @var string
     */
    public const UPS_EXPRESS_SAVER = '2';

    /**
     * Standard
     *
     * @var string
     */
    public const UPS_STANDARD = '3';

    /**
     * Expedited
     *
     * @var string
     */
    public const UPS_EXPEDITED = '4';

    /**
     * Express
     *
     * @var string
     */
    public const TNT_EXPRESS = '1';

    /**
     * Express 9:00
     *
     * @var string
     */
    public const TNT_EXPRESS_9 = '2';

    /**
     * Express 12:00
     *
     * @var string
     */
    public const TNT_EXPRESS_12 = '3';

    /**
     * Economy Express
     *
     * @var string
     */
    public const TNT_ECONOMY_EXPRESS = '4';

    /**
     * Night Express 8:00
     *
     * @var string
     */
    public const TNT_NIGHT_EXPRESS_8 = '5';

    /**
     * Economy Express 12:00
     *
     * @var string
     */
    public const TNT_ECONOMY_EXPRESS_12 = '6';

    /**
     * Express 10:00
     *
     * @var string
     */
    public const TNT_EXPRESS_10 = '7';

    /**
     * Express (Documents)
     *
     * @var string
     */
    public const TNT_EXPRESS_DOCUMENTS = '8';

    /**
     * Express 9:00 (Documents)
     *
     * @var string
     */
    public const TNT_EXPRESS_DOCUMENTS_9 = '9';

    /**
     * Express 10:00 (Documents)
     *
     * @var string
     */
    public const TNT_EXPRESS_DOCUMENTS_10 = '10';

    /**
     * Express 12:00 (Documents)
     *
     * @var string
     */
    public const TNT_EXPRESS_DOCUMENTS_12 = '11';

    /**
     * Night Express 12:00
     *
     * @var string
     */
    public const TNT_NIGHT_EXPRESS_12 = '12';

    /**
     * Night Express 06:00
     *
     * @var string
     */
    public const TNT_NIGHT_EXPRESS_6 = '13';

    /**
     * Night Express 07:00
     *
     * @var string
     */
    public const TNT_NIGHT_EXPRESS_7 = '14';

    /**
     * Night Express 14:00
     *
     * @var string
     */
    public const TNT_NIGHT_EXPRESS_14 = '15';

    /**
     * Special economy express
     *
     * @var string
     */
    public const TNT_SPECIAL_ECONOMY_EXPRESS = '16';

    /**
     * Priority Goods 9:00
     *
     * @var string
     */
    public const GW_PRIORITY_9 = 'P9';

    /**
     * Priority Goods 12:00
     *
     * @var string
     */
    public const GW_PRIORITY_12 = 'P12';

    /**
     * Priority Goods 16:00
     *
     * @var string
     */
    public const GW_PRIORITY_16 = 'P16';

    /**
     * Direct Goods
     *
     * @var string
     */
    public const GW_DIRECT_GOODS = 'WDG';

    /**
     * Pick Up
     *
     * @var string
     */
    public const GW_PICKUP = 'BES';

    /**
     * Pickup by Consignee
     *
     * @var string
     */
    public const GW_PICKUP_BY_CONSIGNEE = 'SA';

    /**
     * @return array
     */
    public static function cp(): array
    {
        return [
            self::CP_DR,
            self::CP_RR,
            self::CP_SR,
            self::CP_NP,
            self::CP_VL,
            self::CP_DV,
            self::CP_BA,
            self::CP_BB,
            self::CP_BN,
            self::CP_NB,
            self::CP_DT,
            self::CP_DS,
            self::CP_EE,
            self::CP_BE,
            self::CP_RZP,
            self::CP_VZP,
            self::CP_EM,
            self::CP_CSP,
            self::CP_CSE,
            self::CP_CVP,
            self::CP_CVE,
            self::CP_CE,
        ];
    }

    /**
     * @return array
     */
    public static function dpd(): array
    {
        return [
            self::DPD_CLASSIC,
            self::DPD_PRIVATE,
            self::DPD_PICKUP,
            self::DPD_EXPRESS_10,
            self::DPD_EXPRESS_12,
            self::DPD_EXPRESS_18,
            self::DPD_PRIVATE_EVENING,
            self::DPD_PRIVATE_SATURDAY,
        ];
    }

    /**
     * @return array
     */
    public static function dhl(): array
    {
        return [
            self::DHL_WORLDWIDE,
            self::DHL_EXPRESS_DOCUMENTS,
            self::DHL_EXPRESS_WORLDWIDE_9,
            self::DHL_EXPRESS_WORLDWIDE_12,
            self::DHL_ECONOMY,
            self::DHL_DOMESTIC_12,
            self::DHL_DOMESTIC_EXPRESS,
        ];
    }

    /**
     * @return array
     */
    public static function dhlsk(): array
    {
        return [
            self::DHLSK_PARCEL,
            self::DHLSK_PARCEL_INTERNATIONAL,
            self::DHLSK_PARCEL_BUSSINESS,
        ];
    }

    /**
     * @return array
     */
    public static function geis(): array
    {
        return [
            self::GEIS_PARCEL_PRIVATE,
            self::GEIS_PARCEL_BUSINESS,
            self::GEIS_PARCEL_BUSINESS_INTERNATIONAL,
            self::GEIS_CARGO_BUSINESS_NATIONAL,
            self::GEIS_CARGO_BUSINESS_INTERNATIONAL,
            self::GEIS_PARCEL_GEIS_POINT,
            self::GEIS_PARCEL_GARANTED,
            self::GEIS_PARCEL_12,
            self::GEIS_PARCEL_PRIVATE_INTERNATIONAL,
            self::GEIS_CARGO_PRIVATE_NATIONAL,
            self::GEIS_CARGO_PRIVATE_INTERNATIONAL,
        ];
    }

    /**
     * @return array
     */
    public static function gls(): array
    {
        return [
            self::GLS_BUSINESS,
            self::GLS_SHOP,
            self::GLS_EXPRESS,
        ];
    }

    /**
     * @return array
     */
    public static function intime(): array
    {
        return [
            self::INTIME_SMALL_CZ,
            self::INTIME_MEDIUM_CZ,
            self::INTIME_LARGE_CZ,
            // self::INTIME_POSTOMAT_CZ,
            // self::INTIME_POSTOMAT_SK,
            self::INTIME_LARGE_SK,
            self::INTIME_EXTRA_CZ,
            self::INTIME_PARCEL_EU,
            self::INTIME_PARCEL_EU_PLUS,
        ];
    }

    /**
     * @return array
     */
    public static function pbh(): array
    {
        return [
            self::PBH_DHL,
            // self::PBH_GLS,
            self::PBH_UPS,
            self::PBH_SP,
            self::PBH_TRANSOFLEX,
            self::PBH_MP,
            self::PBH_CARGUS,
            self::PBH_RP,
            self::PBH_CP_DR,
            self::PBH_CP_NP,
            self::PBH_PPL,
            self::PBH_DPD,
            self::PBH_PP,
            self::PBH_INPOST_KURIER,
            self::PBH_FAN_KURIER,
            self::PBH_HERMES,
            self::PBH_SPEEDY,
            self::PBH_COLISSIMO,
            self::PBH_MEEST,
            self::PBH_NOBA_POSHTA,
        ];
    }

    /**
     * @return array
     */
    public static function ppl(): array
    {
        return [
            self::PPL_CONNECT,
            self::PPL_AFTERNOON,
            self::PPL_PRIVATE,
            self::PPL_BUSINESS,
            self::PPL_PRIVATE_EVENING,
            self::PPL_BUSINESS_PALETTE,
            self::PPL_PRIVATE_PALETTE,
        ];
    }

    /**
     * @return array
     */
    public static function sp(): array
    {
        return [
            self::SP_BZA,
            self::SP_BZP,
            self::SP_BZB,
            self::SP_EXA,
            self::SP_EXP,
            self::SP_EXB,
            self::SP_BNA,
            self::SP_BNP,
            self::SP_BNB,
            self::SP_RRA,
        ];
    }

    /**
     * @return array
     */
    public static function sps(): array
    {
        return [
            self::SPS_EXPRESS,
            self::SPS_EXPRESS_12,
            self::SPS_EXPRESS_9,
            self::SPS_INTERNATIONAL,
        ];
    }

    /**
     * @return array
     */
    public static function topTrans(): array
    {
        return [
            self::TOP_TRANS_STANDARD,
            self::TOP_TRANS_TOPTIME,
            self::TOP_TRANS_PRIVATE,
            self::TOP_TRANS_WEEKEND,
            self::TOP_TRANS_PERSONAL,
            self::TOP_TRANS_NOTICE,
        ];
    }

    /**
     * @return array
     */
    public static function ulozenka(): array
    {
        return [
            self::ULOZENKA_ULOZENKA,
            self::ULOZENKA_SP,
            self::ULOZENKA_DPD_CLASSIC_SK,
            self::ULOZENKA_DPD_PRIVATE,
            self::ULOZENKA_DPD_PARCEL,
            self::ULOZENKA_CP_DR,
            self::ULOZENKA_CP_NP,
            self::ULOZENKA_PARTNER,
            self::ULOZENKA_D1,
            self::ULOZENKA_EXPRESS_COURRIER,
            self::ULOZENKA_EXPRESS_SK,
            self::ULOZENKA_BALIKOBOX_SK,
            self::ULOZENKA_DEPO_SK,
        ];
    }

    /**
     * @return array
     */
    public static function ups(): array
    {
        return [
            self::UPS_EXPRESS,
            self::UPS_EXPRESS_SAVER,
            self::UPS_STANDARD,
            self::UPS_EXPEDITED,
        ];
    }

    /**
     * @return array
     */
    public static function zasilkovna(): array
    {
        return [
            self::ZASILKOVNA,
        ];
    }

    /**
     * @return array
     */
    public static function tnt(): array
    {
        return [
            self::TNT_EXPRESS,
            self::TNT_EXPRESS_9,
            self::TNT_EXPRESS_12,
            self::TNT_ECONOMY_EXPRESS,
            self::TNT_NIGHT_EXPRESS_8,
            self::TNT_ECONOMY_EXPRESS_12,
            self::TNT_EXPRESS_10,
            self::TNT_EXPRESS_DOCUMENTS,
            self::TNT_EXPRESS_DOCUMENTS_9,
            self::TNT_EXPRESS_DOCUMENTS_10,
            self::TNT_EXPRESS_DOCUMENTS_12,
            self::TNT_NIGHT_EXPRESS_12,
            self::TNT_NIGHT_EXPRESS_6,
            self::TNT_NIGHT_EXPRESS_7,
            self::TNT_NIGHT_EXPRESS_14,
            self::TNT_SPECIAL_ECONOMY_EXPRESS,
        ];
    }

    /**
     * @return array
     */
    public static function gw(): array
    {
        return [
            self::GW_PRIORITY_9,
            self::GW_PRIORITY_12,
            self::GW_PRIORITY_16,
            self::GW_DIRECT_GOODS,
            self::GW_PICKUP,
            self::GW_PICKUP_BY_CONSIGNEE,
        ];
    }

    /**
     * All supported shipper services
     *
     * @return array
     */
    public static function all(): array
    {
        return [
            Shipper::CP         => self::cp(),
            Shipper::DPD        => self::dpd(),
            Shipper::DHL        => self::dhl(),
            Shipper::DHLSK      => self::dhlsk(),
            Shipper::GEIS       => self::geis(),
            Shipper::GLS        => self::gls(),
            Shipper::INTIME     => self::intime(),
            Shipper::PBH        => self::pbh(),
            Shipper::PPL        => self::ppl(),
            Shipper::SP         => self::sp(),
            Shipper::SPS        => self::sps(),
            Shipper::TOP_TRANS  => self::topTrans(),
            Shipper::ULOZENKA   => self::ulozenka(),
            Shipper::UPS        => self::ups(),
            Shipper::ZASILKOVNA => self::zasilkovna(),
            Shipper::TNT        => self::tnt(),
            Shipper::GW         => self::gw(),
        ];
    }
}
