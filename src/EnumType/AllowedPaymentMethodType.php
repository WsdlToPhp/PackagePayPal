<?php

namespace PayPal\EnumType;

/**
 * This class stands for AllowedPaymentMethodType EnumType
 * Meta information extracted from the WSDL
 * - documentation: AllowedPaymentMethodType This is the payment Solution merchant needs to specify for Autopay (used by Express Checkout) Optional Default indicates that its merchant supports all funding source InstantPaymentOnly indicates that its
 * merchant only supports instant payment AnyFundingSource allow all funding methods to be chosen by the buyer irrespective of merchant's profile setting InstantFundingSource allow only instant funding methods, block echeck, meft, elevecheck. This will
 * override any merchant profile setting
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AllowedPaymentMethodType
{
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'InstantPaymentOnly'
     * @return string 'InstantPaymentOnly'
     */
    const VALUE_INSTANT_PAYMENT_ONLY = 'InstantPaymentOnly';
    /**
     * Constant for value 'AnyFundingSource'
     * @return string 'AnyFundingSource'
     */
    const VALUE_ANY_FUNDING_SOURCE = 'AnyFundingSource';
    /**
     * Constant for value 'InstantFundingSource'
     * @return string 'InstantFundingSource'
     */
    const VALUE_INSTANT_FUNDING_SOURCE = 'InstantFundingSource';
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
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_INSTANT_PAYMENT_ONLY
     * @uses self::VALUE_ANY_FUNDING_SOURCE
     * @uses self::VALUE_INSTANT_FUNDING_SOURCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DEFAULT,
            self::VALUE_INSTANT_PAYMENT_ONLY,
            self::VALUE_ANY_FUNDING_SOURCE,
            self::VALUE_INSTANT_FUNDING_SOURCE,
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
