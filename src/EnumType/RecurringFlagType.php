<?php

namespace PayPal\EnumType;

/**
 * This class stands for RecurringFlagType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RecurringFlagType
{
    /**
     * Constant for value 'Y'
     * @return string 'Y'
     */
    const VALUE_Y = 'Y';
    /**
     * Constant for value 'y'
     * @return string 'y'
     */
    const VALUE_Y_1 = 'y';
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
     * @uses self::VALUE_Y
     * @uses self::VALUE_Y_1
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_Y,
            self::VALUE_Y_1,
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
