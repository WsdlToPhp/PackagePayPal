<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UserWithdrawalLimitTypeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: User Withdrawal Limit Type Type
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UserWithdrawalLimitTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Limited'
     * @return string 'Limited'
     */
    const VALUE_LIMITED = 'Limited';
    /**
     * Constant for value 'Unlimited'
     * @return string 'Unlimited'
     */
    const VALUE_UNLIMITED = 'Unlimited';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_LIMITED
     * @uses self::VALUE_UNLIMITED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_LIMITED,
            self::VALUE_UNLIMITED,
        );
    }
}
