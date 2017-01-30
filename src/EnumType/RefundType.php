<?php

namespace PayPal\EnumType;

/**
 * This class stands for RefundType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: RefundType - Type declaration to be used by other schema. This code identifies the types of refund transactions supported.
 * - type: ns:RefundType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RefundType
{
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'Full'
     * @return string 'Full'
     */
    const VALUE_FULL = 'Full';
    /**
     * Constant for value 'Partial'
     * @return string 'Partial'
     */
    const VALUE_PARTIAL = 'Partial';
    /**
     * Constant for value 'ExternalDispute'
     * @return string 'ExternalDispute'
     */
    const VALUE_EXTERNAL_DISPUTE = 'ExternalDispute';
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
