<?php

namespace PayPal\EnumType;

/**
 * This class stands for TransactionEntityType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: TransactionEntityType This is the PayPal DoAuthorization TransactionEntityType code
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TransactionEntityType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Auth'
     * @return string 'Auth'
     */
    const VALUE_AUTH = 'Auth';
    /**
     * Constant for value 'Reauth'
     * @return string 'Reauth'
     */
    const VALUE_REAUTH = 'Reauth';
    /**
     * Constant for value 'Order'
     * @return string 'Order'
     */
    const VALUE_ORDER = 'Order';
    /**
     * Constant for value 'Payment'
     * @return string 'Payment'
     */
    const VALUE_PAYMENT = 'Payment';
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
     * @uses self::VALUE_AUTH
     * @uses self::VALUE_REAUTH
     * @uses self::VALUE_ORDER
     * @uses self::VALUE_PAYMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_AUTH,
            self::VALUE_REAUTH,
            self::VALUE_ORDER,
            self::VALUE_PAYMENT,
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
