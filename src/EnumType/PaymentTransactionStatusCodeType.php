<?php

namespace PayPal\EnumType;

/**
 * This class stands for PaymentTransactionStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: PaymentTransactionStatusCodeType The status of the PayPal payment.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentTransactionStatusCodeType
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
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
