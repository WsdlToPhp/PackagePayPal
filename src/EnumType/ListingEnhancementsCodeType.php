<?php

namespace PayPal\EnumType;

/**
 * This class stands for ListingEnhancementsCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: ListingEnhancementsCodeType Specifies the codes for various properties of an item.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ListingEnhancementsCodeType
{
    /**
     * Constant for value 'Border'
     * @return string 'Border'
     */
    const VALUE_BORDER = 'Border';
    /**
     * Constant for value 'BoldTitle'
     * @return string 'BoldTitle'
     */
    const VALUE_BOLD_TITLE = 'BoldTitle';
    /**
     * Constant for value 'Featured'
     * @return string 'Featured'
     */
    const VALUE_FEATURED = 'Featured';
    /**
     * Constant for value 'Highlight'
     * @return string 'Highlight'
     */
    const VALUE_HIGHLIGHT = 'Highlight';
    /**
     * Constant for value 'HomePageFeatured'
     * @return string 'HomePageFeatured'
     */
    const VALUE_HOME_PAGE_FEATURED = 'HomePageFeatured';
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
     * @uses self::VALUE_BORDER
     * @uses self::VALUE_BOLD_TITLE
     * @uses self::VALUE_FEATURED
     * @uses self::VALUE_HIGHLIGHT
     * @uses self::VALUE_HOME_PAGE_FEATURED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BORDER,
            self::VALUE_BOLD_TITLE,
            self::VALUE_FEATURED,
            self::VALUE_HIGHLIGHT,
            self::VALUE_HOME_PAGE_FEATURED,
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
