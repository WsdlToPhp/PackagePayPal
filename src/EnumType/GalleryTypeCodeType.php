<?php

namespace PayPal\EnumType;

/**
 * This class stands for GalleryTypeCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: GalleryTypeCodeType Specifies the codes for various properties of an item.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GalleryTypeCodeType
{
    /**
     * Constant for value 'Featured'
     * @return string 'Featured'
     */
    const VALUE_FEATURED = 'Featured';
    /**
     * Constant for value 'Gallery'
     * @return string 'Gallery'
     */
    const VALUE_GALLERY = 'Gallery';
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
     * @uses self::VALUE_FEATURED
     * @uses self::VALUE_GALLERY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FEATURED,
            self::VALUE_GALLERY,
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
