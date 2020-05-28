<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: PaymentCodeType This is the type of PayPal payment which matches the output from IPN.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'none'
     * @return string 'none'
     */
    const VALUE_NONE = 'none';
    /**
     * Constant for value 'echeck'
     * @return string 'echeck'
     */
    const VALUE_ECHECK = 'echeck';
    /**
     * Constant for value 'instant'
     * @return string 'instant'
     */
    const VALUE_INSTANT = 'instant';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ECHECK
     * @uses self::VALUE_INSTANT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ECHECK,
            self::VALUE_INSTANT,
        );
    }
}
