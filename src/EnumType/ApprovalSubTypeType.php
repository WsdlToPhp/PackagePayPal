<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ApprovalSubTypeType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ApprovalSubTypeType extends AbstractStructEnumBase
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
}
