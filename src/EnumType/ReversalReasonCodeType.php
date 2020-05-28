<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ReversalReasonCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: ReversalReasonCodeType Reason for a reversal on a PayPal transaction which matches the output from IPN
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReversalReasonCodeType extends AbstractStructEnumBase
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
}
