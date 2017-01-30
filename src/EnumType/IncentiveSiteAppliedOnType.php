<?php

namespace PayPal\EnumType;

/**
 * This class stands for IncentiveSiteAppliedOnType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This defines if the incentive is applied on Ebay or PayPal.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveSiteAppliedOnType
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
