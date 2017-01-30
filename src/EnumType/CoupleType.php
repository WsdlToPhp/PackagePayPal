<?php

namespace PayPal\EnumType;

/**
 * This class stands for CoupleType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Defines couple relationship type between buckets
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CoupleType
{
    /**
     * Constant for value 'LifeTime'
     * @return string 'LifeTime'
     */
    const VALUE_LIFE_TIME = 'LifeTime';
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
     * @uses self::VALUE_LIFE_TIME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LIFE_TIME,
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
