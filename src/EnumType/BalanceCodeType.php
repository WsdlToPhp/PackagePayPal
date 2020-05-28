<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BalanceCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: BalanceCodeType This code identifies the types of balances in an account, e.g., a PayPal account.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BalanceCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: Custom Code
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OTHER,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
