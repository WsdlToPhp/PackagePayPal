<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for APIType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Supported API Types for DoCancel operation
 * - type: ns:APIType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class APIType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CHECKOUT_AUTHORIZATION'
     * Meta information extracted from the WSDL
     * - documentation: POS CHECKOUT AUTHORIZATION
     * @return string 'CHECKOUT_AUTHORIZATION'
     */
    const VALUE_CHECKOUT_AUTHORIZATION = 'CHECKOUT_AUTHORIZATION';
    /**
     * Constant for value 'CHECKOUT_SALE'
     * Meta information extracted from the WSDL
     * - documentation: POS CHECKOUT SALE
     * @return string 'CHECKOUT_SALE'
     */
    const VALUE_CHECKOUT_SALE = 'CHECKOUT_SALE';
    /**
     * Constant for value 'REFUND_TRANSACTION'
     * Meta information extracted from the WSDL
     * - documentation: REFUND TRANSACTION
     * @return string 'REFUND_TRANSACTION'
     */
    const VALUE_REFUND_TRANSACTION = 'REFUND_TRANSACTION';
    /**
     * Return allowed values
     * @uses self::VALUE_CHECKOUT_AUTHORIZATION
     * @uses self::VALUE_CHECKOUT_SALE
     * @uses self::VALUE_REFUND_TRANSACTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHECKOUT_AUTHORIZATION,
            self::VALUE_CHECKOUT_SALE,
            self::VALUE_REFUND_TRANSACTION,
        );
    }
}
