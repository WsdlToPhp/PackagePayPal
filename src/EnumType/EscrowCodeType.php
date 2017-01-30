<?php

namespace PayPal\EnumType;

/**
 * This class stands for EscrowCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: EscrowCodeType These are the possible codes to describe Escrow options.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EscrowCodeType
{
    /**
     * Constant for value 'ByBuyer'
     * @return string 'ByBuyer'
     */
    const VALUE_BY_BUYER = 'ByBuyer';
    /**
     * Constant for value 'BySeller'
     * @return string 'BySeller'
     */
    const VALUE_BY_SELLER = 'BySeller';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
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
     * @uses self::VALUE_BY_BUYER
     * @uses self::VALUE_BY_SELLER
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BY_BUYER,
            self::VALUE_BY_SELLER,
            self::VALUE_NONE,
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
