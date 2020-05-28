<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ButtonSubTypeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Types of button sub types
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ButtonSubTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PRODUCTS'
     * Meta information extracted from the WSDL
     * - documentation: button subtype is PRODUCTS
     * @return string 'PRODUCTS'
     */
    const VALUE_PRODUCTS = 'PRODUCTS';
    /**
     * Constant for value 'SERVICES'
     * Meta information extracted from the WSDL
     * - documentation: button subtype is SERVICES
     * @return string 'SERVICES'
     */
    const VALUE_SERVICES = 'SERVICES';
    /**
     * Return allowed values
     * @uses self::VALUE_PRODUCTS
     * @uses self::VALUE_SERVICES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PRODUCTS,
            self::VALUE_SERVICES,
        );
    }
}
