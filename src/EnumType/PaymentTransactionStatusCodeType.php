<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentTransactionStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: PaymentTransactionStatusCodeType The status of the PayPal payment.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentTransactionStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Processing'
     * @return string 'Processing'
     */
    const VALUE_PROCESSING = 'Processing';
    /**
     * Constant for value 'Success'
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'Denied'
     * @return string 'Denied'
     */
    const VALUE_DENIED = 'Denied';
    /**
     * Constant for value 'Reversed'
     * @return string 'Reversed'
     */
    const VALUE_REVERSED = 'Reversed';
    /**
     * Return allowed values
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_PROCESSING
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_DENIED
     * @uses self::VALUE_REVERSED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PENDING,
            self::VALUE_PROCESSING,
            self::VALUE_SUCCESS,
            self::VALUE_DENIED,
            self::VALUE_REVERSED,
        );
    }
}
