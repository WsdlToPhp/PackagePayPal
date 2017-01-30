<?php

namespace PayPal\EnumType;

/**
 * This class stands for ShippingPackageCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: ShippingPackageCodeType These are the possible codes to describe shipping package options.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ShippingPackageCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Letter'
     * @return string 'Letter'
     */
    const VALUE_LETTER = 'Letter';
    /**
     * Constant for value 'LargeEnvelope'
     * @return string 'LargeEnvelope'
     */
    const VALUE_LARGE_ENVELOPE = 'LargeEnvelope';
    /**
     * Constant for value 'USPSLargePack'
     * @return string 'USPSLargePack'
     */
    const VALUE_USPSLARGE_PACK = 'USPSLargePack';
    /**
     * Constant for value 'VeryLargePack'
     * @return string 'VeryLargePack'
     */
    const VALUE_VERY_LARGE_PACK = 'VeryLargePack';
    /**
     * Constant for value 'UPSLetter'
     * @return string 'UPSLetter'
     */
    const VALUE_UPSLETTER = 'UPSLetter';
    /**
     * Constant for value 'USPSFlatRateEnvelope'
     * @return string 'USPSFlatRateEnvelope'
     */
    const VALUE_USPSFLAT_RATE_ENVELOPE = 'USPSFlatRateEnvelope';
    /**
     * Constant for value 'PackageThickEnvelope'
     * @return string 'PackageThickEnvelope'
     */
    const VALUE_PACKAGE_THICK_ENVELOPE = 'PackageThickEnvelope';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_LETTER
     * @uses self::VALUE_LARGE_ENVELOPE
     * @uses self::VALUE_USPSLARGE_PACK
     * @uses self::VALUE_VERY_LARGE_PACK
     * @uses self::VALUE_UPSLETTER
     * @uses self::VALUE_USPSFLAT_RATE_ENVELOPE
     * @uses self::VALUE_PACKAGE_THICK_ENVELOPE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_LETTER,
            self::VALUE_LARGE_ENVELOPE,
            self::VALUE_USPSLARGE_PACK,
            self::VALUE_VERY_LARGE_PACK,
            self::VALUE_UPSLETTER,
            self::VALUE_USPSFLAT_RATE_ENVELOPE,
            self::VALUE_PACKAGE_THICK_ENVELOPE,
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
