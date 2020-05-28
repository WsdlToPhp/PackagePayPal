<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GiftServicesCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: GiftServicesCodeType - Type declaration to be used by other schema's. Specifies the codes for the various Gift Services offered by sellers. If any of the Gift Services are offered by the seller, the generic gift icon should be used
 * to display the item: http://pics.ebay.com/aw/pics/gift/gift.gif
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GiftServicesCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'GiftExpressShipping'
     * Meta information extracted from the WSDL
     * - documentation: indicates that the seller is offering to ship the item via an express shipping method as described in the item description.
     * @return string 'GiftExpressShipping'
     */
    const VALUE_GIFT_EXPRESS_SHIPPING = 'GiftExpressShipping';
    /**
     * Constant for value 'GiftShipToRecipient'
     * Meta information extracted from the WSDL
     * - documentation: indicates that the seller is offering to ship to the gift recipient, not the buyer, when payment clears.
     * @return string 'GiftShipToRecipient'
     */
    const VALUE_GIFT_SHIP_TO_RECIPIENT = 'GiftShipToRecipient';
    /**
     * Constant for value 'GiftWrap'
     * Meta information extracted from the WSDL
     * - documentation: indicates that the seller is offering to wrap the item (and optionally include a card) as described in the item description.
     * @return string 'GiftWrap'
     */
    const VALUE_GIFT_WRAP = 'GiftWrap';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
}
