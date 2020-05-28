<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShippingOptionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: ShippingOptionCodeType These are the possible codes to describe shipping options in terms of where the seller is willing to ship the item.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ShippingOptionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SiteOnly'
     * Meta information extracted from the WSDL
     * - documentation: Site only.
     * @return string 'SiteOnly'
     */
    const VALUE_SITE_ONLY = 'SiteOnly';
    /**
     * Constant for value 'WorldWide'
     * Meta information extracted from the WSDL
     * - documentation: WorldWide.
     * @return string 'WorldWide'
     */
    const VALUE_WORLD_WIDE = 'WorldWide';
    /**
     * Constant for value 'SitePlusRegions'
     * Meta information extracted from the WSDL
     * - documentation: SitePlusRegions.
     * @return string 'SitePlusRegions'
     */
    const VALUE_SITE_PLUS_REGIONS = 'SitePlusRegions';
    /**
     * Constant for value 'WillNotShip'
     * Meta information extracted from the WSDL
     * - documentation: WillNotShip.
     * @return string 'WillNotShip'
     */
    const VALUE_WILL_NOT_SHIP = 'WillNotShip';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
}
