<?php

namespace PayPal\EnumType;

/**
 * This class stands for StatusChangeActionType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class StatusChangeActionType
{
    /**
     * Constant for value 'Cancel'
     * @return string 'Cancel'
     */
    const VALUE_CANCEL = 'Cancel';
    /**
     * Constant for value 'Suspend'
     * @return string 'Suspend'
     */
    const VALUE_SUSPEND = 'Suspend';
    /**
     * Constant for value 'Reactivate'
     * @return string 'Reactivate'
     */
    const VALUE_REACTIVATE = 'Reactivate';
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
     * @uses self::VALUE_CANCEL
     * @uses self::VALUE_SUSPEND
     * @uses self::VALUE_REACTIVATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CANCEL,
            self::VALUE_SUSPEND,
            self::VALUE_REACTIVATE,
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
