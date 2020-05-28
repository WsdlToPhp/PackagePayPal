<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for IncentiveSiteAppliedOnType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This defines if the incentive is applied on Ebay or PayPal.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveSiteAppliedOnType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'INCENTIVE-SITE-APPLIED-ON-UNKNOWN'
     * @return string 'INCENTIVE-SITE-APPLIED-ON-UNKNOWN'
     */
    const VALUE_INCENTIVE_SITE_APPLIED_ON_UNKNOWN = 'INCENTIVE-SITE-APPLIED-ON-UNKNOWN';
    /**
     * Constant for value 'INCENTIVE-SITE-APPLIED-ON-MERCHANT'
     * @return string 'INCENTIVE-SITE-APPLIED-ON-MERCHANT'
     */
    const VALUE_INCENTIVE_SITE_APPLIED_ON_MERCHANT = 'INCENTIVE-SITE-APPLIED-ON-MERCHANT';
    /**
     * Constant for value 'INCENTIVE-SITE-APPLIED-ON-PAYPAL'
     * @return string 'INCENTIVE-SITE-APPLIED-ON-PAYPAL'
     */
    const VALUE_INCENTIVE_SITE_APPLIED_ON_PAYPAL = 'INCENTIVE-SITE-APPLIED-ON-PAYPAL';
    /**
     * Return allowed values
     * @uses self::VALUE_INCENTIVE_SITE_APPLIED_ON_UNKNOWN
     * @uses self::VALUE_INCENTIVE_SITE_APPLIED_ON_MERCHANT
     * @uses self::VALUE_INCENTIVE_SITE_APPLIED_ON_PAYPAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INCENTIVE_SITE_APPLIED_ON_UNKNOWN,
            self::VALUE_INCENTIVE_SITE_APPLIED_ON_MERCHANT,
            self::VALUE_INCENTIVE_SITE_APPLIED_ON_PAYPAL,
        );
    }
}
