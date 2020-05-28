<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PurchasePurposeTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: PurchasePurposeTypeCodeType - Type declaration to be used by other schema. This code identifies the purpose of purchases, e.g., by a PayPal application.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PurchasePurposeTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: Custom Code
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'BuyNowItem'
     * @return string 'BuyNowItem'
     */
    const VALUE_BUY_NOW_ITEM = 'BuyNowItem';
    /**
     * Constant for value 'ShoppingCart'
     * @return string 'ShoppingCart'
     */
    const VALUE_SHOPPING_CART = 'ShoppingCart';
    /**
     * Constant for value 'AuctionItem'
     * @return string 'AuctionItem'
     */
    const VALUE_AUCTION_ITEM = 'AuctionItem';
    /**
     * Constant for value 'GiftCertificates'
     * @return string 'GiftCertificates'
     */
    const VALUE_GIFT_CERTIFICATES = 'GiftCertificates';
    /**
     * Constant for value 'Subscription'
     * @return string 'Subscription'
     */
    const VALUE_SUBSCRIPTION = 'Subscription';
    /**
     * Constant for value 'Donation'
     * @return string 'Donation'
     */
    const VALUE_DONATION = 'Donation';
    /**
     * Constant for value 'eBayBilling'
     * @return string 'eBayBilling'
     */
    const VALUE_E_BAY_BILLING = 'eBayBilling';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_BUY_NOW_ITEM
     * @uses self::VALUE_SHOPPING_CART
     * @uses self::VALUE_AUCTION_ITEM
     * @uses self::VALUE_GIFT_CERTIFICATES
     * @uses self::VALUE_SUBSCRIPTION
     * @uses self::VALUE_DONATION
     * @uses self::VALUE_E_BAY_BILLING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OTHER,
            self::VALUE_BUY_NOW_ITEM,
            self::VALUE_SHOPPING_CART,
            self::VALUE_AUCTION_ITEM,
            self::VALUE_GIFT_CERTIFICATES,
            self::VALUE_SUBSCRIPTION,
            self::VALUE_DONATION,
            self::VALUE_E_BAY_BILLING,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
