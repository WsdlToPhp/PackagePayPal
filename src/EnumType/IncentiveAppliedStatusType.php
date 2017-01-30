<?php

namespace PayPal\EnumType;

/**
 * This class stands for IncentiveAppliedStatusType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This defines if the incentive is applied successfully or not.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveAppliedStatusType
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
