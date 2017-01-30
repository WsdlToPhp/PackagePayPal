<?php

namespace PayPal\EnumType;

/**
 * This class stands for ShippingOptionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: ShippingOptionCodeType These are the possible codes to describe shipping options in terms of where the seller is willing to ship the item.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ShippingOptionCodeType
{
    /**
     * Constant for value 'SiteOnly'
     * @return string 'SiteOnly'
     */
    const VALUE_SITE_ONLY = 'SiteOnly';
    /**
     * Constant for value 'WorldWide'
     * @return string 'WorldWide'
     */
    const VALUE_WORLD_WIDE = 'WorldWide';
    /**
     * Constant for value 'SitePlusRegions'
     * @return string 'SitePlusRegions'
     */
    const VALUE_SITE_PLUS_REGIONS = 'SitePlusRegions';
    /**
     * Constant for value 'WillNotShip'
     * @return string 'WillNotShip'
     */
    const VALUE_WILL_NOT_SHIP = 'WillNotShip';
    /**
     * Constant for value 'CustomCode'
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
     * @uses self::VALUE_SITE_ONLY
     * @uses self::VALUE_WORLD_WIDE
     * @uses self::VALUE_SITE_PLUS_REGIONS
     * @uses self::VALUE_WILL_NOT_SHIP
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SITE_ONLY,
            self::VALUE_WORLD_WIDE,
            self::VALUE_SITE_PLUS_REGIONS,
            self::VALUE_WILL_NOT_SHIP,
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
