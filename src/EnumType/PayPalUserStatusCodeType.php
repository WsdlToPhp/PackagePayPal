<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PayPalUserStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: PayPalUserStatusCodeType PayPal status of a user Address
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PayPalUserStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'verified'
     * @return string 'verified'
     */
    const VALUE_VERIFIED = 'verified';
    /**
     * Constant for value 'unverified'
     * @return string 'unverified'
     */
    const VALUE_UNVERIFIED = 'unverified';
    /**
     * Return allowed values
     * @uses self::VALUE_VERIFIED
     * @uses self::VALUE_UNVERIFIED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_VERIFIED,
            self::VALUE_UNVERIFIED,
        );
    }
}
