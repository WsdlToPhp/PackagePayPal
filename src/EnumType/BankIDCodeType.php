<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BankIDCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: BankID The various banks supported for China postbacks.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BankIDCodeType extends AbstractStructEnumBase
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
}
