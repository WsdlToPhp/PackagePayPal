<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ListingTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: ListingTypeCodeType - Type declaration to be used by other schema. This includes codes indicating the type of auction for the listed item.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ListingTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: Unknown Listing Type
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Chinese'
     * Meta information extracted from the WSDL
     * - documentation: Chinese auction
     * @return string 'Chinese'
     */
    const VALUE_CHINESE = 'Chinese';
    /**
     * Constant for value 'Dutch'
     * Meta information extracted from the WSDL
     * - documentation: Dutch auction
     * @return string 'Dutch'
     */
    const VALUE_DUTCH = 'Dutch';
    /**
     * Constant for value 'Live'
     * Meta information extracted from the WSDL
     * - documentation: Live Auctions-type auction
     * @return string 'Live'
     */
    const VALUE_LIVE = 'Live';
    /**
     * Constant for value 'AdType'
     * Meta information extracted from the WSDL
     * - documentation: Ad type auction
     * @return string 'AdType'
     */
    const VALUE_AD_TYPE = 'AdType';
    /**
     * Constant for value 'StoresFixedPrice'
     * Meta information extracted from the WSDL
     * - documentation: Stores Fixed-price auction (US only)
     * @return string 'StoresFixedPrice'
     */
    const VALUE_STORES_FIXED_PRICE = 'StoresFixedPrice';
    /**
     * Constant for value 'PersonalOffer'
     * Meta information extracted from the WSDL
     * - documentation: Personal Offer auction
     * @return string 'PersonalOffer'
     */
    const VALUE_PERSONAL_OFFER = 'PersonalOffer';
    /**
     * Constant for value 'FixedPriceItem'
     * Meta information extracted from the WSDL
     * - documentation: Fixed Price item ("BIN only").
     * @return string 'FixedPriceItem'
     */
    const VALUE_FIXED_PRICE_ITEM = 'FixedPriceItem';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_CHINESE
     * @uses self::VALUE_DUTCH
     * @uses self::VALUE_LIVE
     * @uses self::VALUE_AD_TYPE
     * @uses self::VALUE_STORES_FIXED_PRICE
     * @uses self::VALUE_PERSONAL_OFFER
     * @uses self::VALUE_FIXED_PRICE_ITEM
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_CHINESE,
            self::VALUE_DUTCH,
            self::VALUE_LIVE,
            self::VALUE_AD_TYPE,
            self::VALUE_STORES_FIXED_PRICE,
            self::VALUE_PERSONAL_OFFER,
            self::VALUE_FIXED_PRICE_ITEM,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
