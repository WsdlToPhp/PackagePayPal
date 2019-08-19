<?php

namespace PayPal\EnumType;

/**
 * This class stands for CompleteCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: CompleteCodeType This is the PayPal DoCapture CompleteType code
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CompleteCodeType
{
    /**
     * Constant for value 'NotComplete'
     * @return string 'NotComplete'
     */
    const VALUE_NOT_COMPLETE = 'NotComplete';
    /**
     * Constant for value 'Complete'
     * @return string 'Complete'
     */
    const VALUE_COMPLETE = 'Complete';
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
     * @uses self::VALUE_NOT_COMPLETE
     * @uses self::VALUE_COMPLETE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_COMPLETE,
            self::VALUE_COMPLETE,
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
