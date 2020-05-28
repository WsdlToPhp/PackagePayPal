<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StatusChangeActionType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class StatusChangeActionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Cancel'
     * @return string 'Cancel'
     */
    const VALUE_CANCEL = 'Cancel';
    /**
     * Constant for value 'Suspend'
     * @return string 'Suspend'
     */
    const VALUE_SUSPEND = 'Suspend';
    /**
     * Constant for value 'Reactivate'
     * @return string 'Reactivate'
     */
    const VALUE_REACTIVATE = 'Reactivate';
    /**
     * Return allowed values
     * @uses self::VALUE_CANCEL
     * @uses self::VALUE_SUSPEND
     * @uses self::VALUE_REACTIVATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CANCEL,
            self::VALUE_SUSPEND,
            self::VALUE_REACTIVATE,
        );
    }
}
