<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ItemCategoryType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ItemCategoryType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Physical'
     * Meta information extracted from the WSDL
     * - documentation: Physical
     * @return string 'Physical'
     */
    const VALUE_PHYSICAL = 'Physical';
    /**
     * Constant for value 'Digital'
     * Meta information extracted from the WSDL
     * - documentation: Digital
     * @return string 'Digital'
     */
    const VALUE_DIGITAL = 'Digital';
    /**
     * Return allowed values
     * @uses self::VALUE_PHYSICAL
     * @uses self::VALUE_DIGITAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PHYSICAL,
            self::VALUE_DIGITAL,
        );
    }
}
