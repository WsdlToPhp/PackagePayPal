<?php

namespace PayPal\EnumType;

/**
 * This class stands for SubscribeTextType EnumType
 * Meta information extracted from the WSDL
 * - documentation: values for subscribe button text
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SubscribeTextType
{
    /**
     * Constant for value 'BUYNOW'
     * Meta information extracted from the WSDL
     * - documentation: button wording is BUYNOW
     * @return string 'BUYNOW'
     */
    const VALUE_BUYNOW = 'BUYNOW';
    /**
     * Constant for value 'SUBSCRIBE'
     * Meta information extracted from the WSDL
     * - documentation: button wording is SUBSCRIBE
     * @return string 'SUBSCRIBE'
     */
    const VALUE_SUBSCRIBE = 'SUBSCRIBE';
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
     * @uses self::VALUE_SUBSCRIBE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUYNOW,
            self::VALUE_SUBSCRIBE,
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
