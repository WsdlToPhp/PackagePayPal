<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EbayCheckoutType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EbayCheckoutType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'none'
     * @return string 'none'
     */
    const VALUE_NONE = 'none';
    /**
     * Constant for value 'Auction'
     * @return string 'Auction'
     */
    const VALUE_AUCTION = 'Auction';
    /**
     * Constant for value 'BuyItNow'
     * @return string 'BuyItNow'
     */
    const VALUE_BUY_IT_NOW = 'BuyItNow';
    /**
     * Constant for value 'FixedPriceItem'
     * @return string 'FixedPriceItem'
     */
    const VALUE_FIXED_PRICE_ITEM = 'FixedPriceItem';
    /**
     * Constant for value 'Autopay'
     * @return string 'Autopay'
     */
    const VALUE_AUTOPAY = 'Autopay';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_AUCTION
     * @uses self::VALUE_BUY_IT_NOW
     * @uses self::VALUE_FIXED_PRICE_ITEM
     * @uses self::VALUE_AUTOPAY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_AUCTION,
            self::VALUE_BUY_IT_NOW,
            self::VALUE_FIXED_PRICE_ITEM,
            self::VALUE_AUTOPAY,
        );
    }
}
