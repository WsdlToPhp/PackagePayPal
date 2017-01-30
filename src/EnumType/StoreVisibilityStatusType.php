<?php

namespace PayPal\EnumType;

/**
 * This class stands for StoreVisibilityStatusType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This is to validate input if store should be visible/invisible in the store locator. If Merchant wants a store to be ENABLED, input should be "E". If Merchant wants a store to be DISABLED, input should be "D". If Merchant is not
 * giving any input, it will be taken as "DISABLED"
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class StoreVisibilityStatusType
{
    /**
     * Constant for value 'DISABLE'
     * @return string 'DISABLE'
     */
    const VALUE_DISABLE = 'DISABLE';
    /**
     * Constant for value 'ENABLE'
     * @return string 'ENABLE'
     */
    const VALUE_ENABLE = 'ENABLE';
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
     * @uses self::VALUE_DISABLE
     * @uses self::VALUE_ENABLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISABLE,
            self::VALUE_ENABLE,
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
