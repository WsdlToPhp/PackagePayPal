<?php

namespace PayPal\EnumType;

/**
 * This class stands for FMFPendingTransactionActionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This is various actions that a merchant can take on a FMF Pending Transaction.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FMFPendingTransactionActionType
{
    /**
     * Constant for value 'Accept'
     * @return string 'Accept'
     */
    const VALUE_ACCEPT = 'Accept';
    /**
     * Constant for value 'Deny'
     * @return string 'Deny'
     */
    const VALUE_DENY = 'Deny';
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
     * @uses self::VALUE_ACCEPT
     * @uses self::VALUE_DENY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACCEPT,
            self::VALUE_DENY,
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
