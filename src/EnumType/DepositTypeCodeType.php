<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DepositTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: DepositTypeCodeType - Type declaration to be used by other schema's. This code identifies the DepositType codes used to specify deposit types for Motors items. If the ietm listed is not a Motors item, then always return DepositType
 * value to be "None".
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DepositTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: None
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'OtherMethod'
     * Meta information extracted from the WSDL
     * - documentation: Other Method
     * @return string 'OtherMethod'
     */
    const VALUE_OTHER_METHOD = 'OtherMethod';
    /**
     * Constant for value 'FastDeposit'
     * Meta information extracted from the WSDL
     * - documentation: Fast Deposit.
     * @return string 'FastDeposit'
     */
    const VALUE_FAST_DEPOSIT = 'FastDeposit';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_OTHER_METHOD
     * @uses self::VALUE_FAST_DEPOSIT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_OTHER_METHOD,
            self::VALUE_FAST_DEPOSIT,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
