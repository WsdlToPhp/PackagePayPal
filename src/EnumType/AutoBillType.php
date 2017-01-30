<?php

namespace PayPal\EnumType;

/**
 * This class stands for AutoBillType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AutoBillType
{
    /**
     * Constant for value 'NoAutoBill'
     * @return string 'NoAutoBill'
     */
    const VALUE_NO_AUTO_BILL = 'NoAutoBill';
    /**
     * Constant for value 'AddToNextBilling'
     * @return string 'AddToNextBilling'
     */
    const VALUE_ADD_TO_NEXT_BILLING = 'AddToNextBilling';
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
     * @uses self::VALUE_NO_AUTO_BILL
     * @uses self::VALUE_ADD_TO_NEXT_BILLING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_AUTO_BILL,
            self::VALUE_ADD_TO_NEXT_BILLING,
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
