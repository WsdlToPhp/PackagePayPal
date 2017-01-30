<?php

namespace PayPal\EnumType;

/**
 * This class stands for LandingPageType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: LandingPageType This is the PayPal payment Landing Page details type (used by Express Checkout)
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class LandingPageType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Login'
     * @return string 'Login'
     */
    const VALUE_LOGIN = 'Login';
    /**
     * Constant for value 'Billing'
     * @return string 'Billing'
     */
    const VALUE_BILLING = 'Billing';
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
     * @uses self::VALUE_LOGIN
     * @uses self::VALUE_BILLING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_LOGIN,
            self::VALUE_BILLING,
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
