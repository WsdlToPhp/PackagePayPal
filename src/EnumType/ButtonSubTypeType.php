<?php

namespace PayPal\EnumType;

/**
 * This class stands for ButtonSubTypeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Types of button sub types
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ButtonSubTypeType
{
    /**
     * Constant for value 'PRODUCTS'
     * @return string 'PRODUCTS'
     */
    const VALUE_PRODUCTS = 'PRODUCTS';
    /**
     * Constant for value 'SERVICES'
     * @return string 'SERVICES'
     */
    const VALUE_SERVICES = 'SERVICES';
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
