<?php

namespace PayPal\EnumType;

/**
 * This class stands for ReversalReasonCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: ReversalReasonCodeType Reason for a reversal on a PayPal transaction which matches the output from IPN
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReversalReasonCodeType
{
    /**
     * Constant for value 'none'
     * @return string 'none'
     */
    const VALUE_NONE = 'none';
    /**
     * Constant for value 'chargeback'
     * @return string 'chargeback'
     */
    const VALUE_CHARGEBACK = 'chargeback';
    /**
     * Constant for value 'guarantee'
     * @return string 'guarantee'
     */
    const VALUE_GUARANTEE = 'guarantee';
    /**
     * Constant for value 'buyer-complaint'
     * @return string 'buyer-complaint'
     */
    const VALUE_BUYER_COMPLAINT = 'buyer-complaint';
    /**
     * Constant for value 'refund'
     * @return string 'refund'
     */
    const VALUE_REFUND = 'refund';
    /**
     * Constant for value 'other'
     * @return string 'other'
     */
    const VALUE_OTHER = 'other';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CHARGEBACK
     * @uses self::VALUE_GUARANTEE
     * @uses self::VALUE_BUYER_COMPLAINT
     * @uses self::VALUE_REFUND
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_CHARGEBACK,
            self::VALUE_GUARANTEE,
            self::VALUE_BUYER_COMPLAINT,
            self::VALUE_REFUND,
            self::VALUE_OTHER,
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
