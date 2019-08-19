<?php

namespace PayPal\EnumType;

/**
 * This class stands for PayPalUserStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: PayPalUserStatusCodeType PayPal status of a user Address
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PayPalUserStatusCodeType
{
    /**
     * Constant for value 'verified'
     * @return string 'verified'
     */
    const VALUE_VERIFIED = 'verified';
    /**
     * Constant for value 'unverified'
     * @return string 'unverified'
     */
    const VALUE_UNVERIFIED = 'unverified';
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
     * @uses self::VALUE_VERIFIED
     * @uses self::VALUE_UNVERIFIED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VERIFIED,
            self::VALUE_UNVERIFIED,
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
