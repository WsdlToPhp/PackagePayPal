<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RecurringPaymentsProfileStatusType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RecurringPaymentsProfileStatusType extends AbstractStructEnumBase
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
}
