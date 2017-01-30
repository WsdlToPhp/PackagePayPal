<?php

namespace PayPal\EnumType;

/**
 * This class stands for PaymentTransactionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: PaymentTransactionCodeType This is the type of a PayPal of which matches the output from IPN
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentTransactionCodeType
{
    /**
     * Constant for value 'none'
     * @return string 'none'
     */
    const VALUE_NONE = 'none';
    /**
     * Constant for value 'web-accept'
     * @return string 'web-accept'
     */
    const VALUE_WEB_ACCEPT = 'web-accept';
    /**
     * Constant for value 'cart'
     * @return string 'cart'
     */
    const VALUE_CART = 'cart';
    /**
     * Constant for value 'send-money'
     * @return string 'send-money'
     */
    const VALUE_SEND_MONEY = 'send-money';
    /**
     * Constant for value 'subscr-failed'
     * @return string 'subscr-failed'
     */
    const VALUE_SUBSCR_FAILED = 'subscr-failed';
    /**
     * Constant for value 'subscr-cancel'
     * @return string 'subscr-cancel'
     */
    const VALUE_SUBSCR_CANCEL = 'subscr-cancel';
    /**
     * Constant for value 'subscr-payment'
     * @return string 'subscr-payment'
     */
    const VALUE_SUBSCR_PAYMENT = 'subscr-payment';
    /**
     * Constant for value 'subscr-signup'
     * @return string 'subscr-signup'
     */
    const VALUE_SUBSCR_SIGNUP = 'subscr-signup';
    /**
     * Constant for value 'subscr-eot'
     * @return string 'subscr-eot'
     */
    const VALUE_SUBSCR_EOT = 'subscr-eot';
    /**
     * Constant for value 'subscr-modify'
     * @return string 'subscr-modify'
     */
    const VALUE_SUBSCR_MODIFY = 'subscr-modify';
    /**
     * Constant for value 'mercht-pmt'
     * @return string 'mercht-pmt'
     */
    const VALUE_MERCHT_PMT = 'mercht-pmt';
    /**
     * Constant for value 'mass-pay'
     * @return string 'mass-pay'
     */
    const VALUE_MASS_PAY = 'mass-pay';
    /**
     * Constant for value 'virtual-terminal'
     * @return string 'virtual-terminal'
     */
    const VALUE_VIRTUAL_TERMINAL = 'virtual-terminal';
    /**
     * Constant for value 'integral-evolution'
     * @return string 'integral-evolution'
     */
    const VALUE_INTEGRAL_EVOLUTION = 'integral-evolution';
    /**
     * Constant for value 'express-checkout'
     * @return string 'express-checkout'
     */
    const VALUE_EXPRESS_CHECKOUT = 'express-checkout';
    /**
     * Constant for value 'pro-hosted'
     * @return string 'pro-hosted'
     */
    const VALUE_PRO_HOSTED = 'pro-hosted';
    /**
     * Constant for value 'pro-api'
     * @return string 'pro-api'
     */
    const VALUE_PRO_API = 'pro-api';
    /**
     * Constant for value 'credit'
     * @return string 'credit'
     */
    const VALUE_CREDIT = 'credit';
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
     * @uses self::VALUE_WEB_ACCEPT
     * @uses self::VALUE_CART
     * @uses self::VALUE_SEND_MONEY
     * @uses self::VALUE_SUBSCR_FAILED
     * @uses self::VALUE_SUBSCR_CANCEL
     * @uses self::VALUE_SUBSCR_PAYMENT
     * @uses self::VALUE_SUBSCR_SIGNUP
     * @uses self::VALUE_SUBSCR_EOT
     * @uses self::VALUE_SUBSCR_MODIFY
     * @uses self::VALUE_MERCHT_PMT
     * @uses self::VALUE_MASS_PAY
     * @uses self::VALUE_VIRTUAL_TERMINAL
     * @uses self::VALUE_INTEGRAL_EVOLUTION
     * @uses self::VALUE_EXPRESS_CHECKOUT
     * @uses self::VALUE_PRO_HOSTED
     * @uses self::VALUE_PRO_API
     * @uses self::VALUE_CREDIT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_WEB_ACCEPT,
            self::VALUE_CART,
            self::VALUE_SEND_MONEY,
            self::VALUE_SUBSCR_FAILED,
            self::VALUE_SUBSCR_CANCEL,
            self::VALUE_SUBSCR_PAYMENT,
            self::VALUE_SUBSCR_SIGNUP,
            self::VALUE_SUBSCR_EOT,
            self::VALUE_SUBSCR_MODIFY,
            self::VALUE_MERCHT_PMT,
            self::VALUE_MASS_PAY,
            self::VALUE_VIRTUAL_TERMINAL,
            self::VALUE_INTEGRAL_EVOLUTION,
            self::VALUE_EXPRESS_CHECKOUT,
            self::VALUE_PRO_HOSTED,
            self::VALUE_PRO_API,
            self::VALUE_CREDIT,
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
