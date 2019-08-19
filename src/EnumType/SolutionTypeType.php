<?php

namespace PayPal\EnumType;

/**
 * This class stands for SolutionTypeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: SolutionTypeType This is the PayPal payment Solution details type (used by Express Checkout)
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SolutionTypeType
{
    /**
     * Constant for value 'Mark'
     * @return string 'Mark'
     */
    const VALUE_MARK = 'Mark';
    /**
     * Constant for value 'Sole'
     * @return string 'Sole'
     */
    const VALUE_SOLE = 'Sole';
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
     * @uses self::VALUE_MARK
     * @uses self::VALUE_SOLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MARK,
            self::VALUE_SOLE,
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
