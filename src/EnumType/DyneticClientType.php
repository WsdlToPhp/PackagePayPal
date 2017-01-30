<?php

namespace PayPal\EnumType;

/**
 * This class stands for DyneticClientType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DyneticClientType
{
    /**
     * Constant for value 'none'
     * @return string 'none'
     */
    const VALUE_NONE = 'none';
    /**
     * Constant for value 'WAP'
     * @return string 'WAP'
     */
    const VALUE_WAP = 'WAP';
    /**
     * Constant for value 'J2MEClient'
     * @return string 'J2MEClient'
     */
    const VALUE_J_2_MECLIENT = 'J2MEClient';
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
     * @uses self::VALUE_WAP
     * @uses self::VALUE_J_2_MECLIENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_WAP,
            self::VALUE_J_2_MECLIENT,
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
