<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SiteCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: SiteCodeType These are site codes that buyers and sellers can use to identify their sites.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SiteCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'US'
     * Meta information extracted from the WSDL
     * - documentation: USA
     * @return string 'US'
     */
    const VALUE_US = 'US';
    /**
     * Constant for value 'Canada'
     * Meta information extracted from the WSDL
     * - documentation: Canada
     * @return string 'Canada'
     */
    const VALUE_CANADA = 'Canada';
    /**
     * Constant for value 'UK'
     * Meta information extracted from the WSDL
     * - documentation: United Kingdom
     * @return string 'UK'
     */
    const VALUE_UK = 'UK';
    /**
     * Constant for value 'Australia'
     * Meta information extracted from the WSDL
     * - documentation: Australia
     * @return string 'Australia'
     */
    const VALUE_AUSTRALIA = 'Australia';
    /**
     * Constant for value 'Austria'
     * Meta information extracted from the WSDL
     * - documentation: Austria
     * @return string 'Austria'
     */
    const VALUE_AUSTRIA = 'Austria';
    /**
     * Constant for value 'Belgium_French'
     * Meta information extracted from the WSDL
     * - documentation: Belgium (French)
     * @return string 'Belgium_French'
     */
    const VALUE_BELGIUM_FRENCH = 'Belgium_French';
    /**
     * Constant for value 'France'
     * Meta information extracted from the WSDL
     * - documentation: France
     * @return string 'France'
     */
    const VALUE_FRANCE = 'France';
    /**
     * Constant for value 'Germany'
     * Meta information extracted from the WSDL
     * - documentation: Germany
     * @return string 'Germany'
     */
    const VALUE_GERMANY = 'Germany';
    /**
     * Constant for value 'Italy'
     * Meta information extracted from the WSDL
     * - documentation: Italy
     * @return string 'Italy'
     */
    const VALUE_ITALY = 'Italy';
    /**
     * Constant for value 'Belgium_Dutch'
     * Meta information extracted from the WSDL
     * - documentation: Belgium (Dutch)
     * @return string 'Belgium_Dutch'
     */
    const VALUE_BELGIUM_DUTCH = 'Belgium_Dutch';
    /**
     * Constant for value 'Netherlands'
     * Meta information extracted from the WSDL
     * - documentation: Netherlands
     * @return string 'Netherlands'
     */
    const VALUE_NETHERLANDS = 'Netherlands';
    /**
     * Constant for value 'Spain'
     * Meta information extracted from the WSDL
     * - documentation: Spain
     * @return string 'Spain'
     */
    const VALUE_SPAIN = 'Spain';
    /**
     * Constant for value 'Switzerland'
     * Meta information extracted from the WSDL
     * - documentation: Switzerland
     * @return string 'Switzerland'
     */
    const VALUE_SWITZERLAND = 'Switzerland';
    /**
     * Constant for value 'Taiwan'
     * Meta information extracted from the WSDL
     * - documentation: Taiwan
     * @return string 'Taiwan'
     */
    const VALUE_TAIWAN = 'Taiwan';
    /**
     * Constant for value 'eBayMotors'
     * Meta information extracted from the WSDL
     * - documentation: eBay Motors
     * @return string 'eBayMotors'
     */
    const VALUE_E_BAY_MOTORS = 'eBayMotors';
    /**
     * Constant for value 'HongKong'
     * Meta information extracted from the WSDL
     * - documentation: Hong Kong
     * @return string 'HongKong'
     */
    const VALUE_HONG_KONG = 'HongKong';
    /**
     * Constant for value 'Singapore'
     * Meta information extracted from the WSDL
     * - documentation: Singapore
     * @return string 'Singapore'
     */
    const VALUE_SINGAPORE = 'Singapore';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_US
     * @uses self::VALUE_CANADA
     * @uses self::VALUE_UK
     * @uses self::VALUE_AUSTRALIA
     * @uses self::VALUE_AUSTRIA
     * @uses self::VALUE_BELGIUM_FRENCH
     * @uses self::VALUE_FRANCE
     * @uses self::VALUE_GERMANY
     * @uses self::VALUE_ITALY
     * @uses self::VALUE_BELGIUM_DUTCH
     * @uses self::VALUE_NETHERLANDS
     * @uses self::VALUE_SPAIN
     * @uses self::VALUE_SWITZERLAND
     * @uses self::VALUE_TAIWAN
     * @uses self::VALUE_E_BAY_MOTORS
     * @uses self::VALUE_HONG_KONG
     * @uses self::VALUE_SINGAPORE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_US,
            self::VALUE_CANADA,
            self::VALUE_UK,
            self::VALUE_AUSTRALIA,
            self::VALUE_AUSTRIA,
            self::VALUE_BELGIUM_FRENCH,
            self::VALUE_FRANCE,
            self::VALUE_GERMANY,
            self::VALUE_ITALY,
            self::VALUE_BELGIUM_DUTCH,
            self::VALUE_NETHERLANDS,
            self::VALUE_SPAIN,
            self::VALUE_SWITZERLAND,
            self::VALUE_TAIWAN,
            self::VALUE_E_BAY_MOTORS,
            self::VALUE_HONG_KONG,
            self::VALUE_SINGAPORE,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
