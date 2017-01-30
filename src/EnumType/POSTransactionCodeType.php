<?php

namespace PayPal\EnumType;

/**
 * This class stands for POSTransactionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: POSTransactionCodeType POS Transaction Code Type. F for Forced Post Transaction and S for Single Call Checkout
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class POSTransactionCodeType
{
    /**
     * Constant for value 'F'
     * @return string 'F'
     */
    const VALUE_F = 'F';
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
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
     * @uses self::VALUE_F
     * @uses self::VALUE_S
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_F,
            self::VALUE_S,
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
