<?php

namespace PayPal\EnumType;

/**
 * This class stands for RecurringPaymentsProfileStatusType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RecurringPaymentsProfileStatusType
{
    /**
     * Constant for value 'ActiveProfile'
     * @return string 'ActiveProfile'
     */
    const VALUE_ACTIVE_PROFILE = 'ActiveProfile';
    /**
     * Constant for value 'PendingProfile'
     * @return string 'PendingProfile'
     */
    const VALUE_PENDING_PROFILE = 'PendingProfile';
    /**
     * Constant for value 'CancelledProfile'
     * @return string 'CancelledProfile'
     */
    const VALUE_CANCELLED_PROFILE = 'CancelledProfile';
    /**
     * Constant for value 'ExpiredProfile'
     * @return string 'ExpiredProfile'
     */
    const VALUE_EXPIRED_PROFILE = 'ExpiredProfile';
    /**
     * Constant for value 'SuspendedProfile'
     * @return string 'SuspendedProfile'
     */
    const VALUE_SUSPENDED_PROFILE = 'SuspendedProfile';
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
     * @uses self::VALUE_ACTIVE_PROFILE
     * @uses self::VALUE_PENDING_PROFILE
     * @uses self::VALUE_CANCELLED_PROFILE
     * @uses self::VALUE_EXPIRED_PROFILE
     * @uses self::VALUE_SUSPENDED_PROFILE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVE_PROFILE,
            self::VALUE_PENDING_PROFILE,
            self::VALUE_CANCELLED_PROFILE,
            self::VALUE_EXPIRED_PROFILE,
            self::VALUE_SUSPENDED_PROFILE,
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
