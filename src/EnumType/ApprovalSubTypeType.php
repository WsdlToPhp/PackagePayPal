<?php

namespace PayPal\EnumType;

/**
 * This class stands for ApprovalSubTypeType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ApprovalSubTypeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MerchantInitiatedBilling'
     * @return string 'MerchantInitiatedBilling'
     */
    const VALUE_MERCHANT_INITIATED_BILLING = 'MerchantInitiatedBilling';
    /**
     * Constant for value 'MerchantInitiatedBillingSingleAgreement'
     * @return string 'MerchantInitiatedBillingSingleAgreement'
     */
    const VALUE_MERCHANT_INITIATED_BILLING_SINGLE_AGREEMENT = 'MerchantInitiatedBillingSingleAgreement';
    /**
     * Constant for value 'ChannelInitiatedBilling'
     * @return string 'ChannelInitiatedBilling'
     */
    const VALUE_CHANNEL_INITIATED_BILLING = 'ChannelInitiatedBilling';
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
     * @uses self::VALUE_MERCHANT_INITIATED_BILLING
     * @uses self::VALUE_MERCHANT_INITIATED_BILLING_SINGLE_AGREEMENT
     * @uses self::VALUE_CHANNEL_INITIATED_BILLING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MERCHANT_INITIATED_BILLING,
            self::VALUE_MERCHANT_INITIATED_BILLING_SINGLE_AGREEMENT,
            self::VALUE_CHANNEL_INITIATED_BILLING,
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
