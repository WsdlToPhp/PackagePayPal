<?php

namespace PayPal\EnumType;

/**
 * This class stands for UnitCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: UnitCodeType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UnitCodeType
{
    /**
     * Constant for value 'kg'
     * Meta information extracted from the WSDL
     * - documentation: Kilogram.
     * @return string 'kg'
     */
    const VALUE_KG = 'kg';
    /**
     * Constant for value 'lbs'
     * Meta information extracted from the WSDL
     * - documentation: Pounds.
     * @return string 'lbs'
     */
    const VALUE_LBS = 'lbs';
    /**
     * Constant for value 'oz'
     * Meta information extracted from the WSDL
     * - documentation: Ounces
     * @return string 'oz'
     */
    const VALUE_OZ = 'oz';
    /**
     * Constant for value 'cm'
     * Meta information extracted from the WSDL
     * - documentation: Centimeter.
     * @return string 'cm'
     */
    const VALUE_CM = 'cm';
    /**
     * Constant for value 'inches'
     * Meta information extracted from the WSDL
     * - documentation: Inches.
     * @return string 'inches'
     */
    const VALUE_INCHES = 'inches';
    /**
     * Constant for value 'ft'
     * Meta information extracted from the WSDL
     * - documentation: Feet.
     * @return string 'ft'
     */
    const VALUE_FT = 'ft';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
     * @uses self::VALUE_KG
     * @uses self::VALUE_LBS
     * @uses self::VALUE_OZ
     * @uses self::VALUE_CM
     * @uses self::VALUE_INCHES
     * @uses self::VALUE_FT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_KG,
            self::VALUE_LBS,
            self::VALUE_OZ,
            self::VALUE_CM,
            self::VALUE_INCHES,
            self::VALUE_FT,
            self::VALUE_CUSTOM_CODE,
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
