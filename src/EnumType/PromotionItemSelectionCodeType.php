<?php

namespace PayPal\EnumType;

/**
 * This class stands for PromotionItemSelectionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Cross Promotion Method.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PromotionItemSelectionCodeType
{
    /**
     * Constant for value 'Manual'
     * Meta information extracted from the WSDL
     * - documentation: Manual Selection
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
    /**
     * Constant for value 'Automatic'
     * Meta information extracted from the WSDL
     * - documentation: Automatic Selection
     * @return string 'Automatic'
     */
    const VALUE_AUTOMATIC = 'Automatic';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved. Do not use.
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
     * @uses self::VALUE_MANUAL
     * @uses self::VALUE_AUTOMATIC
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MANUAL,
            self::VALUE_AUTOMATIC,
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
