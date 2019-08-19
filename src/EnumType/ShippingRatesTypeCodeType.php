<?php

namespace PayPal\EnumType;

/**
 * This class stands for ShippingRatesTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: ShippingRatesTypeCodeType - Type declaration to be used by other schema. The includes the codes for shipping types supported by sellers to transport items sold to buyers.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ShippingRatesTypeCodeType
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
