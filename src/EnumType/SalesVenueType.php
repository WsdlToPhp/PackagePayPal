<?php

namespace PayPal\EnumType;

/**
 * This class stands for SalesVenueType EnumType
 * Meta information extracted from the WSDL
 * - documentation: SalesVenueType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SalesVenueType
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
