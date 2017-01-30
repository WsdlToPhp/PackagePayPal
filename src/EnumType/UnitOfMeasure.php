<?php

namespace PayPal\EnumType;

/**
 * This class stands for UnitOfMeasure EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Based on NRF-ARTS Specification for Units of Measure
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UnitOfMeasure
{
    /**
     * Constant for value 'EA'
     * @return string 'EA'
     */
    const VALUE_EA = 'EA';
    /**
     * Constant for value 'Hours'
     * @return string 'Hours'
     */
    const VALUE_HOURS = 'Hours';
    /**
     * Constant for value 'Days'
     * @return string 'Days'
     */
    const VALUE_DAYS = 'Days';
    /**
     * Constant for value 'Seconds'
     * @return string 'Seconds'
     */
    const VALUE_SECONDS = 'Seconds';
    /**
     * Constant for value 'CrateOf12'
     * @return string 'CrateOf12'
     */
    const VALUE_CRATE_OF_12 = 'CrateOf12';
    /**
     * Constant for value '6Pack'
     * @return string '6Pack'
     */
    const VALUE_6_PACK = '6Pack';
    /**
     * Constant for value 'GLI'
     * @return string 'GLI'
     */
    const VALUE_GLI = 'GLI';
    /**
     * Constant for value 'GLL'
     * @return string 'GLL'
     */
    const VALUE_GLL = 'GLL';
    /**
     * Constant for value 'LTR'
     * @return string 'LTR'
     */
    const VALUE_LTR = 'LTR';
    /**
     * Constant for value 'INH'
     * @return string 'INH'
     */
    const VALUE_INH = 'INH';
    /**
     * Constant for value 'FOT'
     * @return string 'FOT'
     */
    const VALUE_FOT = 'FOT';
    /**
     * Constant for value 'MMT'
     * @return string 'MMT'
     */
    const VALUE_MMT = 'MMT';
    /**
     * Constant for value 'CMQ'
     * @return string 'CMQ'
     */
    const VALUE_CMQ = 'CMQ';
    /**
     * Constant for value 'MTR'
     * @return string 'MTR'
     */
    const VALUE_MTR = 'MTR';
    /**
     * Constant for value 'MTK'
     * @return string 'MTK'
     */
    const VALUE_MTK = 'MTK';
    /**
     * Constant for value 'MTQ'
     * @return string 'MTQ'
     */
    const VALUE_MTQ = 'MTQ';
    /**
     * Constant for value 'GRM'
     * @return string 'GRM'
     */
    const VALUE_GRM = 'GRM';
    /**
     * Constant for value 'KGM'
     * @return string 'KGM'
     */
    const VALUE_KGM = 'KGM';
    /**
     * Constant for value 'KG'
     * @return string 'KG'
     */
    const VALUE_KG = 'KG';
    /**
     * Constant for value 'LBR'
     * @return string 'LBR'
     */
    const VALUE_LBR = 'LBR';
    /**
     * Constant for value 'ANN'
     * @return string 'ANN'
     */
    const VALUE_ANN = 'ANN';
    /**
     * Constant for value 'CEL'
     * @return string 'CEL'
     */
    const VALUE_CEL = 'CEL';
    /**
     * Constant for value 'FAH'
     * @return string 'FAH'
     */
    const VALUE_FAH = 'FAH';
    /**
     * Constant for value 'RESERVED'
     * @return string 'RESERVED'
     */
    const VALUE_RESERVED = 'RESERVED';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_EA
     * @uses self::VALUE_HOURS
     * @uses self::VALUE_DAYS
     * @uses self::VALUE_SECONDS
     * @uses self::VALUE_CRATE_OF_12
     * @uses self::VALUE_6_PACK
     * @uses self::VALUE_GLI
     * @uses self::VALUE_GLL
     * @uses self::VALUE_LTR
     * @uses self::VALUE_INH
     * @uses self::VALUE_FOT
     * @uses self::VALUE_MMT
     * @uses self::VALUE_CMQ
     * @uses self::VALUE_MTR
     * @uses self::VALUE_MTK
     * @uses self::VALUE_MTQ
     * @uses self::VALUE_GRM
     * @uses self::VALUE_KGM
     * @uses self::VALUE_KG
     * @uses self::VALUE_LBR
     * @uses self::VALUE_ANN
     * @uses self::VALUE_CEL
     * @uses self::VALUE_FAH
     * @uses self::VALUE_RESERVED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EA,
            self::VALUE_HOURS,
            self::VALUE_DAYS,
            self::VALUE_SECONDS,
            self::VALUE_CRATE_OF_12,
            self::VALUE_6_PACK,
            self::VALUE_GLI,
            self::VALUE_GLL,
            self::VALUE_LTR,
            self::VALUE_INH,
            self::VALUE_FOT,
            self::VALUE_MMT,
            self::VALUE_CMQ,
            self::VALUE_MTR,
            self::VALUE_MTK,
            self::VALUE_MTQ,
            self::VALUE_GRM,
            self::VALUE_KGM,
            self::VALUE_KG,
            self::VALUE_LBR,
            self::VALUE_ANN,
            self::VALUE_CEL,
            self::VALUE_FAH,
            self::VALUE_RESERVED,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
