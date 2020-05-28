<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShippingRatesTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: ShippingRatesTypeCodeType - Type declaration to be used by other schema. The includes the codes for shipping types supported by sellers to transport items sold to buyers.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ShippingRatesTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Flat'
     * Meta information extracted from the WSDL
     * - documentation: Flat shipping rate.
     * @return string 'Flat'
     */
    const VALUE_FLAT = 'Flat';
    /**
     * Constant for value 'Calculated'
     * Meta information extracted from the WSDL
     * - documentation: Calculated shipping rate.
     * @return string 'Calculated'
     */
    const VALUE_CALCULATED = 'Calculated';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_FLAT
     * @uses self::VALUE_CALCULATED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FLAT,
            self::VALUE_CALCULATED,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
