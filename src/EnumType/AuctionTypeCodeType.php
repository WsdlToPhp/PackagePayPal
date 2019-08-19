<?php

namespace PayPal\EnumType;

/**
 * This class stands for AuctionTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: AuctionTypeCodeType - Type declaration to be used by other schema's. This includes codes indicating the type of auction for the listed item.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AuctionTypeCodeType
{
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: Unknown auction type
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
     * Constant for value 'Ad type'
     * Meta information extracted from the WSDL
     * - documentation: Ad type auction
     * @return string 'Ad type'
     */
    const VALUE_AD_TYPE = 'Ad type';
    /**
     * Constant for value 'Stores Fixed-price'
     * Meta information extracted from the WSDL
     * - documentation: Stores Fixed-price auction (US only)
     * @return string 'Stores Fixed-price'
     */
    const VALUE_STORES_FIXED_PRICE = 'Stores Fixed-price';
    /**
     * Constant for value 'Personal Offer'
     * Meta information extracted from the WSDL
     * - documentation: Personal Offer auction
     * @return string 'Personal Offer'
     */
    const VALUE_PERSONAL_OFFER = 'Personal Offer';
    /**
     * Constant for value 'Fixed Price Item'
     * Meta information extracted from the WSDL
     * - documentation: Fixed Price item ("BIN only").
     * @return string 'Fixed Price Item'
     */
    const VALUE_FIXED_PRICE_ITEM = 'Fixed Price Item';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
