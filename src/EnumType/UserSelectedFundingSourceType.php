<?php

namespace PayPal\EnumType;

/**
 * This class stands for UserSelectedFundingSourceType EnumType
 * Meta information extracted from the WSDL
 * - documentation: UserSelectedFundingSourceType User Selected Funding Source (used by Express Checkout)
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UserSelectedFundingSourceType
{
    /**
     * Constant for value 'ELV'
     * @return string 'ELV'
     */
    const VALUE_ELV = 'ELV';
    /**
     * Constant for value 'CreditCard'
     * @return string 'CreditCard'
     */
    const VALUE_CREDIT_CARD = 'CreditCard';
    /**
     * Constant for value 'ChinaUnionPay'
     * @return string 'ChinaUnionPay'
     */
    const VALUE_CHINA_UNION_PAY = 'ChinaUnionPay';
    /**
     * Constant for value 'BML'
     * @return string 'BML'
     */
    const VALUE_BML = 'BML';
    /**
     * Constant for value 'Finance'
     * @return string 'Finance'
     */
    const VALUE_FINANCE = 'Finance';
    /**
     * Constant for value 'QIWI'
     * @return string 'QIWI'
     */
    const VALUE_QIWI = 'QIWI';
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
     * @uses self::VALUE_ELV
     * @uses self::VALUE_CREDIT_CARD
     * @uses self::VALUE_CHINA_UNION_PAY
     * @uses self::VALUE_BML
     * @uses self::VALUE_FINANCE
     * @uses self::VALUE_QIWI
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ELV,
            self::VALUE_CREDIT_CARD,
            self::VALUE_CHINA_UNION_PAY,
            self::VALUE_BML,
            self::VALUE_FINANCE,
            self::VALUE_QIWI,
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
