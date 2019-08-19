<?php

namespace PayPal\EnumType;

/**
 * This class stands for PromotionItemPriceTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Cross Promotion Method.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PromotionItemPriceTypeCodeType
{
    /**
     * Constant for value 'AuctionPrice'
     * Meta information extracted from the WSDL
     * - documentation: Auction Item
     * @return string 'AuctionPrice'
     */
    const VALUE_AUCTION_PRICE = 'AuctionPrice';
    /**
     * Constant for value 'BuyItNowPrice'
     * Meta information extracted from the WSDL
     * - documentation: Buy It Now
     * @return string 'BuyItNowPrice'
     */
    const VALUE_BUY_IT_NOW_PRICE = 'BuyItNowPrice';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved. Do not use.
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
     * @uses self::VALUE_AUCTION_PRICE
     * @uses self::VALUE_BUY_IT_NOW_PRICE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AUCTION_PRICE,
            self::VALUE_BUY_IT_NOW_PRICE,
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
