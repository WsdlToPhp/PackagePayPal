<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ListingEnhancementsCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: ListingEnhancementsCodeType Specifies the codes for various properties of an item.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ListingEnhancementsCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Border'
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether an item will be displayed with a border that will go around the item (e.g., for category-based search result page or store search that brings up multiple items) to differentiate it from the rest of list.
     * @return string 'Border'
     */
    const VALUE_BORDER = 'Border';
    /**
     * Constant for value 'BoldTitle'
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the bolding option was used.
     * @return string 'BoldTitle'
     */
    const VALUE_BOLD_TITLE = 'BoldTitle';
    /**
     * Constant for value 'Featured'
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether it is a featured item.
     * @return string 'Featured'
     */
    const VALUE_FEATURED = 'Featured';
    /**
     * Constant for value 'Highlight'
     * Meta information extracted from the WSDL
     * - documentation: Indicates item's listing is highlighted.
     * @return string 'Highlight'
     */
    const VALUE_HIGHLIGHT = 'Highlight';
    /**
     * Constant for value 'HomePageFeatured'
     * Meta information extracted from the WSDL
     * - documentation: Indicates item's listing is home page featured.
     * @return string 'HomePageFeatured'
     */
    const VALUE_HOME_PAGE_FEATURED = 'HomePageFeatured';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
}
