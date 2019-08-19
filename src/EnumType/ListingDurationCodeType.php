<?php

namespace PayPal\EnumType;

/**
 * This class stands for ListingDurationCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: ListingDurationCodeType These are the possible codes to describe the number of days the auction will be active. Must be one of the values 3, 5, 7, or 10 for auction and basic Fixed-Price (Type 9) listings. Must be 30, 60, 90, 120, or
 * GTC for Stores Fixed-Price (Type 7) listings. Specify GTC for the Good 'Til Cancel feature (eBay Stores items only).
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ListingDurationCodeType
{
    /**
     * Constant for value 'Days_1'
     * Meta information extracted from the WSDL
     * - documentation: 1 Day
     * @return string 'Days_1'
     */
    const VALUE_DAYS_1 = 'Days_1';
    /**
     * Constant for value 'Days_3'
     * Meta information extracted from the WSDL
     * - documentation: 3 Days
     * @return string 'Days_3'
     */
    const VALUE_DAYS_3 = 'Days_3';
    /**
     * Constant for value 'Days_5'
     * Meta information extracted from the WSDL
     * - documentation: 5 Days
     * @return string 'Days_5'
     */
    const VALUE_DAYS_5 = 'Days_5';
    /**
     * Constant for value 'Days_7'
     * Meta information extracted from the WSDL
     * - documentation: 7 Days
     * @return string 'Days_7'
     */
    const VALUE_DAYS_7 = 'Days_7';
    /**
     * Constant for value 'Days_10'
     * Meta information extracted from the WSDL
     * - documentation: 10 Days
     * @return string 'Days_10'
     */
    const VALUE_DAYS_10 = 'Days_10';
    /**
     * Constant for value 'Days_30'
     * Meta information extracted from the WSDL
     * - documentation: 30 Days
     * @return string 'Days_30'
     */
    const VALUE_DAYS_30 = 'Days_30';
    /**
     * Constant for value 'Days_60'
     * Meta information extracted from the WSDL
     * - documentation: 60 Days
     * @return string 'Days_60'
     */
    const VALUE_DAYS_60 = 'Days_60';
    /**
     * Constant for value 'Days_90'
     * Meta information extracted from the WSDL
     * - documentation: 90 Days
     * @return string 'Days_90'
     */
    const VALUE_DAYS_90 = 'Days_90';
    /**
     * Constant for value 'Days_120'
     * Meta information extracted from the WSDL
     * - documentation: 120 Days
     * @return string 'Days_120'
     */
    const VALUE_DAYS_120 = 'Days_120';
    /**
     * Constant for value 'GTC'
     * Meta information extracted from the WSDL
     * - documentation: GTC
     * @return string 'GTC'
     */
    const VALUE_GTC = 'GTC';
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
     * @uses self::VALUE_DAYS_1
     * @uses self::VALUE_DAYS_3
     * @uses self::VALUE_DAYS_5
     * @uses self::VALUE_DAYS_7
     * @uses self::VALUE_DAYS_10
     * @uses self::VALUE_DAYS_30
     * @uses self::VALUE_DAYS_60
     * @uses self::VALUE_DAYS_90
     * @uses self::VALUE_DAYS_120
     * @uses self::VALUE_GTC
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DAYS_1,
            self::VALUE_DAYS_3,
            self::VALUE_DAYS_5,
            self::VALUE_DAYS_7,
            self::VALUE_DAYS_10,
            self::VALUE_DAYS_30,
            self::VALUE_DAYS_60,
            self::VALUE_DAYS_90,
            self::VALUE_DAYS_120,
            self::VALUE_GTC,
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
