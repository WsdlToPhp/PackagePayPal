<?php

namespace PayPal\EnumType;

/**
 * This class stands for MerchandizingPrefCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: MerchandizingPrefCodeType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MerchandizingPrefCodeType
{
    /**
     * Constant for value 'OptIn'
     * Meta information extracted from the WSDL
     * - documentation: OptIn
     * @return string 'OptIn'
     */
    const VALUE_OPT_IN = 'OptIn';
    /**
     * Constant for value 'OptOut'
     * Meta information extracted from the WSDL
     * - documentation: OptOut
     * @return string 'OptOut'
     */
    const VALUE_OPT_OUT = 'OptOut';
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
     * @uses self::VALUE_OPT_IN
     * @uses self::VALUE_OPT_OUT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OPT_IN,
            self::VALUE_OPT_OUT,
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
