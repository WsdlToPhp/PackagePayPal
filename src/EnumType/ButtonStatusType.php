<?php

namespace PayPal\EnumType;

/**
 * This class stands for ButtonStatusType EnumType
 * Meta information extracted from the WSDL
 * - documentation: values for subscribe button text
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ButtonStatusType
{
    /**
     * Constant for value 'DELETE'
     * Meta information extracted from the WSDL
     * - documentation: Changes Button Status to DELETE
     * @return string 'DELETE'
     */
    const VALUE_DELETE = 'DELETE';
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
     * @uses self::VALUE_DELETE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DELETE,
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
