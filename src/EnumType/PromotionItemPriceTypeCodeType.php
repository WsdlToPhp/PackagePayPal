<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PromotionItemPriceTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Cross Promotion Method.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PromotionItemPriceTypeCodeType extends AbstractStructEnumBase
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
}
