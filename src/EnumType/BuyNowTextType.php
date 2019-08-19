<?php

namespace PayPal\EnumType;

/**
 * This class stands for BuyNowTextType EnumType
 * Meta information extracted from the WSDL
 * - documentation: values for buynow button text
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BuyNowTextType
{
    /**
     * Constant for value 'BUYNOW'
     * Meta information extracted from the WSDL
     * - documentation: button wording is BUYNOW
     * @return string 'BUYNOW'
     */
    const VALUE_BUYNOW = 'BUYNOW';
    /**
     * Constant for value 'PAYNOW'
     * Meta information extracted from the WSDL
     * - documentation: button wording is PAYNOW
     * @return string 'PAYNOW'
     */
    const VALUE_PAYNOW = 'PAYNOW';
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
     * @uses self::VALUE_BUYNOW
     * @uses self::VALUE_PAYNOW
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUYNOW,
            self::VALUE_PAYNOW,
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
