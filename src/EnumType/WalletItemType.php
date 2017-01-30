<?php

namespace PayPal\EnumType;

/**
 * This class stands for WalletItemType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class WalletItemType
{
    /**
     * Constant for value 'MERCHANT_COUPON'
     * @return string 'MERCHANT_COUPON'
     */
    const VALUE_MERCHANT_COUPON = 'MERCHANT_COUPON';
    /**
     * Constant for value 'LOYALTY_CARD'
     * @return string 'LOYALTY_CARD'
     */
    const VALUE_LOYALTY_CARD = 'LOYALTY_CARD';
    /**
     * Constant for value 'MANUFACTURER_COUPON'
     * @return string 'MANUFACTURER_COUPON'
     */
    const VALUE_MANUFACTURER_COUPON = 'MANUFACTURER_COUPON';
    /**
     * Constant for value 'MERCHANT_CLOSED_LOOP_OFFER'
     * @return string 'MERCHANT_CLOSED_LOOP_OFFER'
     */
    const VALUE_MERCHANT_CLOSED_LOOP_OFFER = 'MERCHANT_CLOSED_LOOP_OFFER';
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
     * @uses self::VALUE_MERCHANT_COUPON
     * @uses self::VALUE_LOYALTY_CARD
     * @uses self::VALUE_MANUFACTURER_COUPON
     * @uses self::VALUE_MERCHANT_CLOSED_LOOP_OFFER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MERCHANT_COUPON,
            self::VALUE_LOYALTY_CARD,
            self::VALUE_MANUFACTURER_COUPON,
            self::VALUE_MERCHANT_CLOSED_LOOP_OFFER,
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
