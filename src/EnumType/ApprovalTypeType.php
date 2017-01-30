<?php

namespace PayPal\EnumType;

/**
 * This class stands for ApprovalTypeType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ApprovalTypeType
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
