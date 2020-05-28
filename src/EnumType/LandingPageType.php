<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LandingPageType EnumType
 * Meta information extracted from the WSDL
 * - documentation: LandingPageType This is the PayPal payment Landing Page details type (used by Express Checkout)
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class LandingPageType extends AbstractStructEnumBase
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
}
