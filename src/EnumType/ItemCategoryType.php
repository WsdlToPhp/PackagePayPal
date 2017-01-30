<?php

namespace PayPal\EnumType;

/**
 * This class stands for ItemCategoryType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ItemCategoryType
{
    /**
     * Constant for value 'Physical'
     * @return string 'Physical'
     */
    const VALUE_PHYSICAL = 'Physical';
    /**
     * Constant for value 'Digital'
     * @return string 'Digital'
     */
    const VALUE_DIGITAL = 'Digital';
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
     * @uses self::VALUE_PHYSICAL
     * @uses self::VALUE_DIGITAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PHYSICAL,
            self::VALUE_DIGITAL,
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
