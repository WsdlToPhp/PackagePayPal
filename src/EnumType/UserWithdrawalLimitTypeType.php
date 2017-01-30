<?php

namespace PayPal\EnumType;

/**
 * This class stands for UserWithdrawalLimitTypeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: User Withdrawal Limit Type Type
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UserWithdrawalLimitTypeType
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Limited'
     * @return string 'Limited'
     */
    const VALUE_LIMITED = 'Limited';
    /**
     * Constant for value 'Unlimited'
     * @return string 'Unlimited'
     */
    const VALUE_UNLIMITED = 'Unlimited';
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
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_LIMITED
     * @uses self::VALUE_UNLIMITED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_LIMITED,
            self::VALUE_UNLIMITED,
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
