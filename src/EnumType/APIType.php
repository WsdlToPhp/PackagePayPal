<?php

namespace PayPal\EnumType;

/**
 * This class stands for APIType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Supported API Types for DoCancel operation
 * - type: ns:APIType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class APIType
{
    /**
     * Constant for value 'CHECKOUT_AUTHORIZATION'
     * @return string 'CHECKOUT_AUTHORIZATION'
     */
    const VALUE_CHECKOUT_AUTHORIZATION = 'CHECKOUT_AUTHORIZATION';
    /**
     * Constant for value 'CHECKOUT_SALE'
     * @return string 'CHECKOUT_SALE'
     */
    const VALUE_CHECKOUT_SALE = 'CHECKOUT_SALE';
    /**
     * Constant for value 'REFUND_TRANSACTION'
     * @return string 'REFUND_TRANSACTION'
     */
    const VALUE_REFUND_TRANSACTION = 'REFUND_TRANSACTION';
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
     * @uses self::VALUE_CHECKOUT_AUTHORIZATION
     * @uses self::VALUE_CHECKOUT_SALE
     * @uses self::VALUE_REFUND_TRANSACTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHECKOUT_AUTHORIZATION,
            self::VALUE_CHECKOUT_SALE,
            self::VALUE_REFUND_TRANSACTION,
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
