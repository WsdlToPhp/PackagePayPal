<?php

namespace PayPal\EnumType;

/**
 * This class stands for AddressOwnerCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: AddressOwnerCodeType This code identifies the AddressOwner code types which indicates who owns the user'a address.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AddressOwnerCodeType
{
    /**
     * Constant for value 'PayPal'
     * Meta information extracted from the WSDL
     * - documentation: PayPal owns address.
     * @return string 'PayPal'
     */
    const VALUE_PAY_PAL = 'PayPal';
    /**
     * Constant for value 'eBay'
     * Meta information extracted from the WSDL
     * - documentation: eBay owns address.
     * @return string 'eBay'
     */
    const VALUE_E_BAY = 'eBay';
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
     * @uses self::VALUE_PAY_PAL
     * @uses self::VALUE_E_BAY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PAY_PAL,
            self::VALUE_E_BAY,
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
