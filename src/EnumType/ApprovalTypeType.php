<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ApprovalTypeType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ApprovalTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BillingAgreement'
     * @return string 'BillingAgreement'
     */
    const VALUE_BILLING_AGREEMENT = 'BillingAgreement';
    /**
     * Constant for value 'Profile'
     * @return string 'Profile'
     */
    const VALUE_PROFILE = 'Profile';
    /**
     * Return allowed values
     * @uses self::VALUE_BILLING_AGREEMENT
     * @uses self::VALUE_PROFILE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BILLING_AGREEMENT,
            self::VALUE_PROFILE,
        );
    }
}
