<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ButtonImageType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Types of button images
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ButtonImageType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'REG'
     * Meta information extracted from the WSDL
     * - documentation: button image type is REG
     * @return string 'REG'
     */
    const VALUE_REG = 'REG';
    /**
     * Constant for value 'SML'
     * Meta information extracted from the WSDL
     * - documentation: button image type is SML
     * @return string 'SML'
     */
    const VALUE_SML = 'SML';
    /**
     * Constant for value 'CC'
     * Meta information extracted from the WSDL
     * - documentation: button image type is CC
     * @return string 'CC'
     */
    const VALUE_CC = 'CC';
    /**
     * Return allowed values
     * @uses self::VALUE_REG
     * @uses self::VALUE_SML
     * @uses self::VALUE_CC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_REG,
            self::VALUE_SML,
            self::VALUE_CC,
        );
    }
}
