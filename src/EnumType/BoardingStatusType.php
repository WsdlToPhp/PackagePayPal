<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BoardingStatusType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Boarding Status
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BoardingStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Completed'
     * @return string 'Completed'
     */
    const VALUE_COMPLETED = 'Completed';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_PENDING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_COMPLETED,
            self::VALUE_CANCELLED,
            self::VALUE_PENDING,
        );
    }
}
