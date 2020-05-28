<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OptionTypeListType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OptionTypeListType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoOptionType'
     * @return string 'NoOptionType'
     */
    const VALUE_NO_OPTION_TYPE = 'NoOptionType';
    /**
     * Constant for value 'FULL'
     * @return string 'FULL'
     */
    const VALUE_FULL = 'FULL';
    /**
     * Constant for value 'EMI'
     * @return string 'EMI'
     */
    const VALUE_EMI = 'EMI';
    /**
     * Constant for value 'VARIABLE'
     * @return string 'VARIABLE'
     */
    const VALUE_VARIABLE = 'VARIABLE';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_OPTION_TYPE
     * @uses self::VALUE_FULL
     * @uses self::VALUE_EMI
     * @uses self::VALUE_VARIABLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_OPTION_TYPE,
            self::VALUE_FULL,
            self::VALUE_EMI,
            self::VALUE_VARIABLE,
        );
    }
}
