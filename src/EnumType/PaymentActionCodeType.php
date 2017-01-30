<?php

namespace PayPal\EnumType;

/**
 * This class stands for PaymentActionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: PaymentDetailsCodeType This is the PayPal payment details type (used by DCC and Express Checkout)
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentActionCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Authorization'
     * @return string 'Authorization'
     */
    const VALUE_AUTHORIZATION = 'Authorization';
    /**
     * Constant for value 'Sale'
     * @return string 'Sale'
     */
    const VALUE_SALE = 'Sale';
    /**
     * Constant for value 'Order'
     * @return string 'Order'
     */
    const VALUE_ORDER = 'Order';
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
     * @uses self::VALUE_AUTHORIZATION
     * @uses self::VALUE_SALE
     * @uses self::VALUE_ORDER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_AUTHORIZATION,
            self::VALUE_SALE,
            self::VALUE_ORDER,
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
