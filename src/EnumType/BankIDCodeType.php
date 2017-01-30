<?php

namespace PayPal\EnumType;

/**
 * This class stands for BankIDCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: BankID The various banks supported for China postbacks.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BankIDCodeType
{
    /**
     * Constant for value 'CMB'
     * @return string 'CMB'
     */
    const VALUE_CMB = 'CMB';
    /**
     * Constant for value 'ICBC'
     * @return string 'ICBC'
     */
    const VALUE_ICBC = 'ICBC';
    /**
     * Constant for value 'CCB'
     * @return string 'CCB'
     */
    const VALUE_CCB = 'CCB';
    /**
     * Constant for value 'ChinaPay'
     * @return string 'ChinaPay'
     */
    const VALUE_CHINA_PAY = 'ChinaPay';
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
     * @uses self::VALUE_CMB
     * @uses self::VALUE_ICBC
     * @uses self::VALUE_CCB
     * @uses self::VALUE_CHINA_PAY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CMB,
            self::VALUE_ICBC,
            self::VALUE_CCB,
            self::VALUE_CHINA_PAY,
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
