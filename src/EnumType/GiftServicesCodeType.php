<?php

namespace PayPal\EnumType;

/**
 * This class stands for GiftServicesCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: GiftServicesCodeType - Type declaration to be used by other schema's. Specifies the codes for the various Gift Services offered by sellers. If any of the Gift Services are offered by the seller, the generic gift icon should be used
 * to display the item: http://pics.ebay.com/aw/pics/gift/gift.gif
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GiftServicesCodeType
{
    /**
     * Constant for value 'GiftExpressShipping'
     * @return string 'GiftExpressShipping'
     */
    const VALUE_GIFT_EXPRESS_SHIPPING = 'GiftExpressShipping';
    /**
     * Constant for value 'GiftShipToRecipient'
     * @return string 'GiftShipToRecipient'
     */
    const VALUE_GIFT_SHIP_TO_RECIPIENT = 'GiftShipToRecipient';
    /**
     * Constant for value 'GiftWrap'
     * @return string 'GiftWrap'
     */
    const VALUE_GIFT_WRAP = 'GiftWrap';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
     * @uses self::VALUE_GIFT_EXPRESS_SHIPPING
     * @uses self::VALUE_GIFT_SHIP_TO_RECIPIENT
     * @uses self::VALUE_GIFT_WRAP
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GIFT_EXPRESS_SHIPPING,
            self::VALUE_GIFT_SHIP_TO_RECIPIENT,
            self::VALUE_GIFT_WRAP,
            self::VALUE_CUSTOM_CODE,
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
