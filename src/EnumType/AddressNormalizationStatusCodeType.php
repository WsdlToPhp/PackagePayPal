<?php

namespace PayPal\EnumType;

/**
 * This class stands for AddressNormalizationStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Normalization Status of the Address
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AddressNormalizationStatusCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Normalized'
     * @return string 'Normalized'
     */
    const VALUE_NORMALIZED = 'Normalized';
    /**
     * Constant for value 'Unnormalized'
     * @return string 'Unnormalized'
     */
    const VALUE_UNNORMALIZED = 'Unnormalized';
    /**
     * Constant for value 'UserPreferred'
     * @return string 'UserPreferred'
     */
    const VALUE_USER_PREFERRED = 'UserPreferred';
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
     * @uses self::VALUE_NORMALIZED
     * @uses self::VALUE_UNNORMALIZED
     * @uses self::VALUE_USER_PREFERRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_NORMALIZED,
            self::VALUE_UNNORMALIZED,
            self::VALUE_USER_PREFERRED,
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
