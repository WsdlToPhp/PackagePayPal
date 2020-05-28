<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SalesVenueType EnumType
 * Meta information extracted from the WSDL
 * - documentation: SalesVenueType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SalesVenueType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Venue-Unspecified'
     * @return string 'Venue-Unspecified'
     */
    const VALUE_VENUE_UNSPECIFIED = 'Venue-Unspecified';
    /**
     * Constant for value 'eBay'
     * @return string 'eBay'
     */
    const VALUE_E_BAY = 'eBay';
    /**
     * Constant for value 'AnotherMarketPlace'
     * @return string 'AnotherMarketPlace'
     */
    const VALUE_ANOTHER_MARKET_PLACE = 'AnotherMarketPlace';
    /**
     * Constant for value 'OwnWebsite'
     * @return string 'OwnWebsite'
     */
    const VALUE_OWN_WEBSITE = 'OwnWebsite';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Return allowed values
     * @uses self::VALUE_VENUE_UNSPECIFIED
     * @uses self::VALUE_E_BAY
     * @uses self::VALUE_ANOTHER_MARKET_PLACE
     * @uses self::VALUE_OWN_WEBSITE
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VENUE_UNSPECIFIED,
            self::VALUE_E_BAY,
            self::VALUE_ANOTHER_MARKET_PLACE,
            self::VALUE_OWN_WEBSITE,
            self::VALUE_OTHER,
        );
    }
}
