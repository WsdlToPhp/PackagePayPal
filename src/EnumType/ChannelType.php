<?php

namespace PayPal\EnumType;

/**
 * This class stands for ChannelType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: ChannelType - Type declaration to be used by other schemas. This is the PayPal Channel type (used by Express Checkout)
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ChannelType
{
    /**
     * Constant for value 'Merchant'
     * @return string 'Merchant'
     */
    const VALUE_MERCHANT = 'Merchant';
    /**
     * Constant for value 'eBayItem'
     * @return string 'eBayItem'
     */
    const VALUE_E_BAY_ITEM = 'eBayItem';
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
     * @uses self::VALUE_MERCHANT
     * @uses self::VALUE_E_BAY_ITEM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MERCHANT,
            self::VALUE_E_BAY_ITEM,
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
