<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RefundType EnumType
 * Meta information extracted from the WSDL
 * - documentation: RefundType - Type declaration to be used by other schema. This code identifies the types of refund transactions supported.
 * - type: ns:RefundType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RefundType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'Full'
     * Meta information extracted from the WSDL
     * - documentation: Full Refund
     * @return string 'Full'
     */
    const VALUE_FULL = 'Full';
    /**
     * Constant for value 'Partial'
     * Meta information extracted from the WSDL
     * - documentation: Partial Refund
     * @return string 'Partial'
     */
    const VALUE_PARTIAL = 'Partial';
    /**
     * Constant for value 'ExternalDispute'
     * Meta information extracted from the WSDL
     * - documentation: External Dispute
     * @return string 'ExternalDispute'
     */
    const VALUE_EXTERNAL_DISPUTE = 'ExternalDispute';
    /**
     * Return allowed values
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_FULL
     * @uses self::VALUE_PARTIAL
     * @uses self::VALUE_EXTERNAL_DISPUTE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OTHER,
            self::VALUE_FULL,
            self::VALUE_PARTIAL,
            self::VALUE_EXTERNAL_DISPUTE,
        );
    }
}
