<?php

namespace PayPal\EnumType;

/**
 * This class stands for OptionTypeListType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OptionTypeListType
{
    /**
     * Constant for value 'NoOptionType'
     * @return string 'NoOptionType'
     */
    const VALUE_NO_OPTION_TYPE = 'NoOptionType';
    /**
     * Constant for value 'FULL'
     * @return string 'FULL'
     */
    const VALUE_FULL = 'FULL';
    /**
     * Constant for value 'EMI'
     * @return string 'EMI'
     */
    const VALUE_EMI = 'EMI';
    /**
     * Constant for value 'VARIABLE'
     * @return string 'VARIABLE'
     */
    const VALUE_VARIABLE = 'VARIABLE';
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
     * @uses self::VALUE_NO_OPTION_TYPE
     * @uses self::VALUE_FULL
     * @uses self::VALUE_EMI
     * @uses self::VALUE_VARIABLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_OPTION_TYPE,
            self::VALUE_FULL,
            self::VALUE_EMI,
            self::VALUE_VARIABLE,
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
