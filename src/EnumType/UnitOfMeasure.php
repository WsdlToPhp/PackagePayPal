<?php

namespace PayPal\EnumType;

/**
 * This class stands for UnitOfMeasure EnumType
 * Meta information extracted from the WSDL
 * - documentation: Based on NRF-ARTS Specification for Units of Measure
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UnitOfMeasure
{
    /**
     * Constant for value 'EA'
     * Meta information extracted from the WSDL
     * - documentation: Each
     * @return string 'EA'
     */
    const VALUE_EA = 'EA';
    /**
     * Constant for value 'Hours'
     * Meta information extracted from the WSDL
     * - documentation: Hours
     * @return string 'Hours'
     */
    const VALUE_HOURS = 'Hours';
    /**
     * Constant for value 'Days'
     * Meta information extracted from the WSDL
     * - documentation: Days
     * @return string 'Days'
     */
    const VALUE_DAYS = 'Days';
    /**
     * Constant for value 'Seconds'
     * Meta information extracted from the WSDL
     * - documentation: Seconds
     * @return string 'Seconds'
     */
    const VALUE_SECONDS = 'Seconds';
    /**
     * Constant for value 'CrateOf12'
     * Meta information extracted from the WSDL
     * - documentation: Crate of 12 bottles of beer
     * @return string 'CrateOf12'
     */
    const VALUE_CRATE_OF_12 = 'CrateOf12';
    /**
     * Constant for value '6Pack'
     * Meta information extracted from the WSDL
     * - documentation: 6Pack
     * @return string '6Pack'
     */
    const VALUE_6_PACK = '6Pack';
    /**
     * Constant for value 'GLI'
     * Meta information extracted from the WSDL
     * - documentation: Gallon (UK)
     * @return string 'GLI'
     */
    const VALUE_GLI = 'GLI';
    /**
     * Constant for value 'GLL'
     * Meta information extracted from the WSDL
     * - documentation: Gallon (US)
     * @return string 'GLL'
     */
    const VALUE_GLL = 'GLL';
    /**
     * Constant for value 'LTR'
     * Meta information extracted from the WSDL
     * - documentation: Litre
     * @return string 'LTR'
     */
    const VALUE_LTR = 'LTR';
    /**
     * Constant for value 'INH'
     * Meta information extracted from the WSDL
     * - documentation: Inch
     * @return string 'INH'
     */
    const VALUE_INH = 'INH';
    /**
     * Constant for value 'FOT'
     * Meta information extracted from the WSDL
     * - documentation: Foot
     * @return string 'FOT'
     */
    const VALUE_FOT = 'FOT';
    /**
     * Constant for value 'MMT'
     * Meta information extracted from the WSDL
     * - documentation: Millimeter
     * @return string 'MMT'
     */
    const VALUE_MMT = 'MMT';
    /**
     * Constant for value 'CMQ'
     * Meta information extracted from the WSDL
     * - documentation: Centimeter
     * @return string 'CMQ'
     */
    const VALUE_CMQ = 'CMQ';
    /**
     * Constant for value 'MTR'
     * Meta information extracted from the WSDL
     * - documentation: Meter
     * @return string 'MTR'
     */
    const VALUE_MTR = 'MTR';
    /**
     * Constant for value 'MTK'
     * Meta information extracted from the WSDL
     * - documentation: Square Meter
     * @return string 'MTK'
     */
    const VALUE_MTK = 'MTK';
    /**
     * Constant for value 'MTQ'
     * Meta information extracted from the WSDL
     * - documentation: Cubic Meter
     * @return string 'MTQ'
     */
    const VALUE_MTQ = 'MTQ';
    /**
     * Constant for value 'GRM'
     * Meta information extracted from the WSDL
     * - documentation: Gram
     * @return string 'GRM'
     */
    const VALUE_GRM = 'GRM';
    /**
     * Constant for value 'KGM'
     * Meta information extracted from the WSDL
     * - documentation: Kilogram
     * @return string 'KGM'
     */
    const VALUE_KGM = 'KGM';
    /**
     * Constant for value 'KG'
     * Meta information extracted from the WSDL
     * - documentation: Kilogram
     * @return string 'KG'
     */
    const VALUE_KG = 'KG';
    /**
     * Constant for value 'LBR'
     * Meta information extracted from the WSDL
     * - documentation: Pound
     * @return string 'LBR'
     */
    const VALUE_LBR = 'LBR';
    /**
     * Constant for value 'ANN'
     * Meta information extracted from the WSDL
     * - documentation: Annual
     * @return string 'ANN'
     */
    const VALUE_ANN = 'ANN';
    /**
     * Constant for value 'CEL'
     * Meta information extracted from the WSDL
     * - documentation: Degree Celcius
     * @return string 'CEL'
     */
    const VALUE_CEL = 'CEL';
    /**
     * Constant for value 'FAH'
     * Meta information extracted from the WSDL
     * - documentation: Degree Fahrenheit
     * @return string 'FAH'
     */
    const VALUE_FAH = 'FAH';
    /**
     * Constant for value 'RESERVED'
     * Meta information extracted from the WSDL
     * - documentation: RESERVED
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
