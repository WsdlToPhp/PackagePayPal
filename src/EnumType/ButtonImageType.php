<?php

namespace PayPal\EnumType;

/**
 * This class stands for ButtonImageType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Types of button images
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ButtonImageType
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
