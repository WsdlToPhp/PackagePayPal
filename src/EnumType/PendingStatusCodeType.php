<?php

namespace PayPal\EnumType;

/**
 * This class stands for PendingStatusCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: PendingStatusCodeType The pending status for a PayPal Payment transaction which matches the output from IPN
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PendingStatusCodeType
{
    /**
     * Constant for value 'none'
     * @return string 'none'
     */
    const VALUE_NONE = 'none';
    /**
     * Constant for value 'echeck'
     * @return string 'echeck'
     */
    const VALUE_ECHECK = 'echeck';
    /**
     * Constant for value 'intl'
     * @return string 'intl'
     */
    const VALUE_INTL = 'intl';
    /**
     * Constant for value 'verify'
     * @return string 'verify'
     */
    const VALUE_VERIFY = 'verify';
    /**
     * Constant for value 'address'
     * @return string 'address'
     */
    const VALUE_ADDRESS = 'address';
    /**
     * Constant for value 'unilateral'
     * @return string 'unilateral'
     */
    const VALUE_UNILATERAL = 'unilateral';
    /**
     * Constant for value 'other'
     * @return string 'other'
     */
    const VALUE_OTHER = 'other';
    /**
     * Constant for value 'upgrade'
     * @return string 'upgrade'
     */
    const VALUE_UPGRADE = 'upgrade';
    /**
     * Constant for value 'multi-currency'
     * @return string 'multi-currency'
     */
    const VALUE_MULTI_CURRENCY = 'multi-currency';
    /**
     * Constant for value 'authorization'
     * @return string 'authorization'
     */
    const VALUE_AUTHORIZATION = 'authorization';
    /**
     * Constant for value 'order'
     * @return string 'order'
     */
    const VALUE_ORDER = 'order';
    /**
     * Constant for value 'payment-review'
     * @return string 'payment-review'
     */
    const VALUE_PAYMENT_REVIEW = 'payment-review';
    /**
     * Constant for value 'regulatory-review'
     * @return string 'regulatory-review'
     */
    const VALUE_REGULATORY_REVIEW = 'regulatory-review';
    /**
     * Constant for value 'delayed-disbursement'
     * @return string 'delayed-disbursement'
     */
    const VALUE_DELAYED_DISBURSEMENT = 'delayed-disbursement';
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
     * @uses self::VALUE_ECHECK
     * @uses self::VALUE_INTL
     * @uses self::VALUE_VERIFY
     * @uses self::VALUE_ADDRESS
     * @uses self::VALUE_UNILATERAL
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_UPGRADE
     * @uses self::VALUE_MULTI_CURRENCY
     * @uses self::VALUE_AUTHORIZATION
     * @uses self::VALUE_ORDER
     * @uses self::VALUE_PAYMENT_REVIEW
     * @uses self::VALUE_REGULATORY_REVIEW
     * @uses self::VALUE_DELAYED_DISBURSEMENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ECHECK,
            self::VALUE_INTL,
            self::VALUE_VERIFY,
            self::VALUE_ADDRESS,
            self::VALUE_UNILATERAL,
            self::VALUE_OTHER,
            self::VALUE_UPGRADE,
            self::VALUE_MULTI_CURRENCY,
            self::VALUE_AUTHORIZATION,
            self::VALUE_ORDER,
            self::VALUE_PAYMENT_REVIEW,
            self::VALUE_REGULATORY_REVIEW,
            self::VALUE_DELAYED_DISBURSEMENT,
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
