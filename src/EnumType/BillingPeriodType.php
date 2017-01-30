<?php

namespace PayPal\EnumType;

/**
 * This class stands for BillingPeriodType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillingPeriodType
{
    /**
     * Constant for value 'NoBillingPeriodType'
     * @return string 'NoBillingPeriodType'
     */
    const VALUE_NO_BILLING_PERIOD_TYPE = 'NoBillingPeriodType';
    /**
     * Constant for value 'Day'
     * @return string 'Day'
     */
    const VALUE_DAY = 'Day';
    /**
     * Constant for value 'Week'
     * @return string 'Week'
     */
    const VALUE_WEEK = 'Week';
    /**
     * Constant for value 'SemiMonth'
     * @return string 'SemiMonth'
     */
    const VALUE_SEMI_MONTH = 'SemiMonth';
    /**
     * Constant for value 'Month'
     * @return string 'Month'
     */
    const VALUE_MONTH = 'Month';
    /**
     * Constant for value 'Year'
     * @return string 'Year'
     */
    const VALUE_YEAR = 'Year';
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
     * @uses self::VALUE_NO_BILLING_PERIOD_TYPE
     * @uses self::VALUE_DAY
     * @uses self::VALUE_WEEK
     * @uses self::VALUE_SEMI_MONTH
     * @uses self::VALUE_MONTH
     * @uses self::VALUE_YEAR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_BILLING_PERIOD_TYPE,
            self::VALUE_DAY,
            self::VALUE_WEEK,
            self::VALUE_SEMI_MONTH,
            self::VALUE_MONTH,
            self::VALUE_YEAR,
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
