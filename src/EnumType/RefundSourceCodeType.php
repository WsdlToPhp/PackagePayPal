<?php

namespace PayPal\EnumType;

/**
 * This class stands for RefundSourceCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: RefundSourceCodeType This is the type of PayPal funding source that can be used for auto refund. any - Means Merchant doesn't have any preference. PayPal can use any available funding source (Balance or eCheck) default - Means
 * merchant's preferred funding source as configured in his profile. (Balance or eCheck) instant - Only Balance echeck - Merchant prefers echeck. If PayPal balance can cover the refund amount, we will use PayPal balance. (balance or eCheck)
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RefundSourceCodeType
{
    /**
     * Constant for value 'any'
     * @return string 'any'
     */
    const VALUE_ANY = 'any';
    /**
     * Constant for value 'default'
     * @return string 'default'
     */
    const VALUE_DEFAULT = 'default';
    /**
     * Constant for value 'instant'
     * @return string 'instant'
     */
    const VALUE_INSTANT = 'instant';
    /**
     * Constant for value 'echeck'
     * @return string 'echeck'
     */
    const VALUE_ECHECK = 'echeck';
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
     * @uses self::VALUE_ANY
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_INSTANT
     * @uses self::VALUE_ECHECK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ANY,
            self::VALUE_DEFAULT,
            self::VALUE_INSTANT,
            self::VALUE_ECHECK,
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
