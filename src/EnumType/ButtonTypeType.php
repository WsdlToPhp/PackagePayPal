<?php

namespace PayPal\EnumType;

/**
 * This class stands for ButtonTypeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Types of buttons
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ButtonTypeType
{
    /**
     * Constant for value 'BUYNOW'
     * @return string 'BUYNOW'
     */
    const VALUE_BUYNOW = 'BUYNOW';
    /**
     * Constant for value 'CART'
     * @return string 'CART'
     */
    const VALUE_CART = 'CART';
    /**
     * Constant for value 'GIFTCERTIFICATE'
     * @return string 'GIFTCERTIFICATE'
     */
    const VALUE_GIFTCERTIFICATE = 'GIFTCERTIFICATE';
    /**
     * Constant for value 'SUBSCRIBE'
     * @return string 'SUBSCRIBE'
     */
    const VALUE_SUBSCRIBE = 'SUBSCRIBE';
    /**
     * Constant for value 'DONATE'
     * @return string 'DONATE'
     */
    const VALUE_DONATE = 'DONATE';
    /**
     * Constant for value 'UNSUBSCRIBE'
     * @return string 'UNSUBSCRIBE'
     */
    const VALUE_UNSUBSCRIBE = 'UNSUBSCRIBE';
    /**
     * Constant for value 'VIEWCART'
     * @return string 'VIEWCART'
     */
    const VALUE_VIEWCART = 'VIEWCART';
    /**
     * Constant for value 'PAYMENTPLAN'
     * @return string 'PAYMENTPLAN'
     */
    const VALUE_PAYMENTPLAN = 'PAYMENTPLAN';
    /**
     * Constant for value 'AUTOBILLING'
     * @return string 'AUTOBILLING'
     */
    const VALUE_AUTOBILLING = 'AUTOBILLING';
    /**
     * Constant for value 'PAYMENT'
     * @return string 'PAYMENT'
     */
    const VALUE_PAYMENT = 'PAYMENT';
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
     * @uses self::VALUE_CART
     * @uses self::VALUE_GIFTCERTIFICATE
     * @uses self::VALUE_SUBSCRIBE
     * @uses self::VALUE_DONATE
     * @uses self::VALUE_UNSUBSCRIBE
     * @uses self::VALUE_VIEWCART
     * @uses self::VALUE_PAYMENTPLAN
     * @uses self::VALUE_AUTOBILLING
     * @uses self::VALUE_PAYMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUYNOW,
            self::VALUE_CART,
            self::VALUE_GIFTCERTIFICATE,
            self::VALUE_SUBSCRIBE,
            self::VALUE_DONATE,
            self::VALUE_UNSUBSCRIBE,
            self::VALUE_VIEWCART,
            self::VALUE_PAYMENTPLAN,
            self::VALUE_AUTOBILLING,
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
