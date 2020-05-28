<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BankAccountTypeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: BankAccountTypeType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BankAccountTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Checking'
     * @return string 'Checking'
     */
    const VALUE_CHECKING = 'Checking';
    /**
     * Constant for value 'Savings'
     * @return string 'Savings'
     */
    const VALUE_SAVINGS = 'Savings';
    /**
     * Return allowed values
     * @uses self::VALUE_CHECKING
     * @uses self::VALUE_SAVINGS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHECKING,
            self::VALUE_SAVINGS,
        );
    }
}
