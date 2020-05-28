<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RedeemedOfferType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RedeemedOfferType extends AbstractStructEnumBase
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
     * Constant for value 'RESERVED'
     * @return string 'RESERVED'
     */
    const VALUE_RESERVED = 'RESERVED';
    /**
     * Return allowed values
     * @uses self::VALUE_MERCHANT_COUPON
     * @uses self::VALUE_LOYALTY_CARD
     * @uses self::VALUE_MANUFACTURER_COUPON
     * @uses self::VALUE_RESERVED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MERCHANT_COUPON,
            self::VALUE_LOYALTY_CARD,
            self::VALUE_MANUFACTURER_COUPON,
            self::VALUE_RESERVED,
        );
    }
}
