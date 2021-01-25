<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ChargePatternType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ChargePatternType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'IMMEDIATE'
     * @return string 'IMMEDIATE'
     */
    const VALUE_IMMEDIATE = 'IMMEDIATE';
    /**
     * Constant for value 'RECURRINGPREPAID'
     * @return string 'RECURRINGPREPAID'
     */
    const VALUE_RECURRINGPREPAID = 'RECURRINGPREPAID';
    /**
     * Constant for value 'RECURRINGPOSTPAID'
     * @return string 'RECURRINGPOSTPAID'
     */
    const VALUE_RECURRINGPOSTPAID = 'RECURRINGPOSTPAID';
    /**
     * Constant for value 'THRESHOLDPREPAID'
     * @return string 'THRESHOLDPREPAID'
     */
    const VALUE_THRESHOLDPREPAID = 'THRESHOLDPREPAID';
    /**
     * Constant for value 'THRESHOLDPOSTPAID'
     * @return string 'THRESHOLDPOSTPAID'
     */
    const VALUE_THRESHOLDPOSTPAID = 'THRESHOLDPOSTPAID';
    /**
     * Constant for value 'DEFERRED'
     * @return string 'DEFERRED'
     */
    const VALUE_DEFERRED = 'DEFERRED';
    /**
     * Return allowed values
     * @uses self::VALUE_IMMEDIATE
     * @uses self::VALUE_RECURRINGPREPAID
     * @uses self::VALUE_RECURRINGPOSTPAID
     * @uses self::VALUE_THRESHOLDPREPAID
     * @uses self::VALUE_THRESHOLDPOSTPAID
     * @uses self::VALUE_DEFERRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IMMEDIATE,
            self::VALUE_RECURRINGPREPAID,
            self::VALUE_RECURRINGPOSTPAID,
            self::VALUE_THRESHOLDPREPAID,
            self::VALUE_THRESHOLDPOSTPAID,
            self::VALUE_DEFERRED,
        );
    }
}
