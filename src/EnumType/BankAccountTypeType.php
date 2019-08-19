<?php

namespace PayPal\EnumType;

/**
 * This class stands for BankAccountTypeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: BankAccountTypeType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BankAccountTypeType
{
    /**
     * Constant for value 'Checking'
     * @return string 'Checking'
     */
    const VALUE_CHECKING = 'Checking';
    /**
     * Constant for value 'Savings'
     * @return string 'Savings'
     */
    const VALUE_SAVINGS = 'Savings';
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
     * @uses self::VALUE_CHECKING
     * @uses self::VALUE_SAVINGS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHECKING,
            self::VALUE_SAVINGS,
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
