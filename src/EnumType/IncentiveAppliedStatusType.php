<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for IncentiveAppliedStatusType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This defines if the incentive is applied successfully or not.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveAppliedStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'INCENTIVE-APPLIED-STATUS-SUCCESS'
     * @return string 'INCENTIVE-APPLIED-STATUS-SUCCESS'
     */
    const VALUE_INCENTIVE_APPLIED_STATUS_SUCCESS = 'INCENTIVE-APPLIED-STATUS-SUCCESS';
    /**
     * Constant for value 'INCENTIVE-APPLIED-STATUS-ERROR'
     * @return string 'INCENTIVE-APPLIED-STATUS-ERROR'
     */
    const VALUE_INCENTIVE_APPLIED_STATUS_ERROR = 'INCENTIVE-APPLIED-STATUS-ERROR';
    /**
     * Return allowed values
     * @uses self::VALUE_INCENTIVE_APPLIED_STATUS_SUCCESS
     * @uses self::VALUE_INCENTIVE_APPLIED_STATUS_ERROR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INCENTIVE_APPLIED_STATUS_SUCCESS,
            self::VALUE_INCENTIVE_APPLIED_STATUS_ERROR,
        );
    }
}
