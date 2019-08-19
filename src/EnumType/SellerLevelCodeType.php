<?php

namespace PayPal\EnumType;

/**
 * This class stands for SellerLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: SellerLevelCodeType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SellerLevelCodeType
{
    /**
     * Constant for value 'Bronze'
     * Meta information extracted from the WSDL
     * - documentation: Bronze
     * @return string 'Bronze'
     */
    const VALUE_BRONZE = 'Bronze';
    /**
     * Constant for value 'Silver'
     * Meta information extracted from the WSDL
     * - documentation: Silver
     * @return string 'Silver'
     */
    const VALUE_SILVER = 'Silver';
    /**
     * Constant for value 'Gold'
     * Meta information extracted from the WSDL
     * - documentation: Gold
     * @return string 'Gold'
     */
    const VALUE_GOLD = 'Gold';
    /**
     * Constant for value 'Platinum'
     * Meta information extracted from the WSDL
     * - documentation: Platinum
     * @return string 'Platinum'
     */
    const VALUE_PLATINUM = 'Platinum';
    /**
     * Constant for value 'Titanium'
     * Meta information extracted from the WSDL
     * - documentation: Titanium
     * @return string 'Titanium'
     */
    const VALUE_TITANIUM = 'Titanium';
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: None
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
     * @uses self::VALUE_BRONZE
     * @uses self::VALUE_SILVER
     * @uses self::VALUE_GOLD
     * @uses self::VALUE_PLATINUM
     * @uses self::VALUE_TITANIUM
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BRONZE,
            self::VALUE_SILVER,
            self::VALUE_GOLD,
            self::VALUE_PLATINUM,
            self::VALUE_TITANIUM,
            self::VALUE_NONE,
            self::VALUE_CUSTOM_CODE,
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
