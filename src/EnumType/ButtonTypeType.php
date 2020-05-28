<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ButtonTypeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Types of buttons
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ButtonTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BUYNOW'
     * Meta information extracted from the WSDL
     * - documentation: button type is BUYNOW
     * @return string 'BUYNOW'
     */
    const VALUE_BUYNOW = 'BUYNOW';
    /**
     * Constant for value 'CART'
     * Meta information extracted from the WSDL
     * - documentation: button type is CART
     * @return string 'CART'
     */
    const VALUE_CART = 'CART';
    /**
     * Constant for value 'GIFTCERTIFICATE'
     * Meta information extracted from the WSDL
     * - documentation: button type is GIFTCERTIFICATE
     * @return string 'GIFTCERTIFICATE'
     */
    const VALUE_GIFTCERTIFICATE = 'GIFTCERTIFICATE';
    /**
     * Constant for value 'SUBSCRIBE'
     * Meta information extracted from the WSDL
     * - documentation: button type is SUBSCRIBE
     * @return string 'SUBSCRIBE'
     */
    const VALUE_SUBSCRIBE = 'SUBSCRIBE';
    /**
     * Constant for value 'DONATE'
     * Meta information extracted from the WSDL
     * - documentation: button type is DONATE
     * @return string 'DONATE'
     */
    const VALUE_DONATE = 'DONATE';
    /**
     * Constant for value 'UNSUBSCRIBE'
     * Meta information extracted from the WSDL
     * - documentation: button type is UNSUBSCRIBE
     * @return string 'UNSUBSCRIBE'
     */
    const VALUE_UNSUBSCRIBE = 'UNSUBSCRIBE';
    /**
     * Constant for value 'VIEWCART'
     * Meta information extracted from the WSDL
     * - documentation: button type is VIEWCART
     * @return string 'VIEWCART'
     */
    const VALUE_VIEWCART = 'VIEWCART';
    /**
     * Constant for value 'PAYMENTPLAN'
     * Meta information extracted from the WSDL
     * - documentation: button type is PAYMENTPLAN
     * @return string 'PAYMENTPLAN'
     */
    const VALUE_PAYMENTPLAN = 'PAYMENTPLAN';
    /**
     * Constant for value 'AUTOBILLING'
     * Meta information extracted from the WSDL
     * - documentation: button type is AUTOBILLING
     * @return string 'AUTOBILLING'
     */
    const VALUE_AUTOBILLING = 'AUTOBILLING';
    /**
     * Constant for value 'PAYMENT'
     * Meta information extracted from the WSDL
     * - documentation: button type is PAYMENT
     * @return string 'PAYMENT'
     */
    const VALUE_PAYMENT = 'PAYMENT';
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
}
