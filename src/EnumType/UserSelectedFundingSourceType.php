<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UserSelectedFundingSourceType EnumType
 * Meta information extracted from the WSDL
 * - documentation: UserSelectedFundingSourceType User Selected Funding Source (used by Express Checkout)
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UserSelectedFundingSourceType extends AbstractStructEnumBase
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
}
