<?php

namespace PayPal\EnumType;

/**
 * This class stands for MatchStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: MatchStatusCodeType This is the PayPal (street/zip) match code
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MatchStatusCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Matched'
     * @return string 'Matched'
     */
    const VALUE_MATCHED = 'Matched';
    /**
     * Constant for value 'Unmatched'
     * @return string 'Unmatched'
     */
    const VALUE_UNMATCHED = 'Unmatched';
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
     * @uses self::VALUE_MATCHED
     * @uses self::VALUE_UNMATCHED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MATCHED,
            self::VALUE_UNMATCHED,
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
