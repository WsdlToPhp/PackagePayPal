<?php

namespace PayPal\EnumType;

/**
 * This class stands for AddressStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: AddressStatusCodeType This is the PayPal address status
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AddressStatusCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Confirmed'
     * @return string 'Confirmed'
     */
    const VALUE_CONFIRMED = 'Confirmed';
    /**
     * Constant for value 'Unconfirmed'
     * @return string 'Unconfirmed'
     */
    const VALUE_UNCONFIRMED = 'Unconfirmed';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CONFIRMED
     * @uses self::VALUE_UNCONFIRMED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_CONFIRMED,
            self::VALUE_UNCONFIRMED,
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
