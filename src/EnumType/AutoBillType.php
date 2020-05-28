<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AutoBillType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AutoBillType extends AbstractStructEnumBase
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
}
