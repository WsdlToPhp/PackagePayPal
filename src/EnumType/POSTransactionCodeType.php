<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for POSTransactionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: POSTransactionCodeType POS Transaction Code Type. F for Forced Post Transaction and S for Single Call Checkout
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class POSTransactionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'F'
     * @return string 'F'
     */
    const VALUE_F = 'F';
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Return allowed values
     * @uses self::VALUE_F
     * @uses self::VALUE_S
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_F,
            self::VALUE_S,
        );
    }
}
