<?php

namespace PayPal\EnumType;

/**
 * This class stands for PaymentCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: PaymentCodeType This is the type of PayPal payment which matches the output from IPN.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentCodeType
{
    /**
     * Constant for value 'none'
     * @return string 'none'
     */
    const VALUE_NONE = 'none';
    /**
     * Constant for value 'echeck'
     * @return string 'echeck'
     */
    const VALUE_ECHECK = 'echeck';
    /**
     * Constant for value 'instant'
     * @return string 'instant'
     */
    const VALUE_INSTANT = 'instant';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ECHECK
     * @uses self::VALUE_INSTANT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ECHECK,
            self::VALUE_INSTANT,
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
