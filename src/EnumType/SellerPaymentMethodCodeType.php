<?php

namespace PayPal\EnumType;

/**
 * This class stands for SellerPaymentMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: SellerPaymentMethodCodeType These are payment methods that sellers can use to pay eBay.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SellerPaymentMethodCodeType
{
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: No payment method specified - some other payment method.
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'Amex'
     * Meta information extracted from the WSDL
     * - documentation: Amex
     * @return string 'Amex'
     */
    const VALUE_AMEX = 'Amex';
    /**
     * Constant for value 'Visa'
     * Meta information extracted from the WSDL
     * - documentation: Visa
     * @return string 'Visa'
     */
    const VALUE_VISA = 'Visa';
    /**
     * Constant for value 'Mastercard'
     * Meta information extracted from the WSDL
     * - documentation: Mastercard
     * @return string 'Mastercard'
     */
    const VALUE_MASTERCARD = 'Mastercard';
    /**
     * Constant for value 'Discover'
     * Meta information extracted from the WSDL
     * - documentation: Discover
     * @return string 'Discover'
     */
    const VALUE_DISCOVER = 'Discover';
    /**
     * Constant for value 'JCB'
     * Meta information extracted from the WSDL
     * - documentation: JCB
     * @return string 'JCB'
     */
    const VALUE_JCB = 'JCB';
    /**
     * Constant for value 'Diners'
     * Meta information extracted from the WSDL
     * - documentation: Diners
     * @return string 'Diners'
     */
    const VALUE_DINERS = 'Diners';
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
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_AMEX
     * @uses self::VALUE_VISA
     * @uses self::VALUE_MASTERCARD
     * @uses self::VALUE_DISCOVER
     * @uses self::VALUE_JCB
     * @uses self::VALUE_DINERS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OTHER,
            self::VALUE_AMEX,
            self::VALUE_VISA,
            self::VALUE_MASTERCARD,
            self::VALUE_DISCOVER,
            self::VALUE_JCB,
            self::VALUE_DINERS,
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
