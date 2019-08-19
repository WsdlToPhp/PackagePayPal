<?php

namespace PayPal\EnumType;

/**
 * This class stands for ButtonCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Types of button coding
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ButtonCodeType
{
    /**
     * Constant for value 'HOSTED'
     * Meta information extracted from the WSDL
     * - documentation: Creates Hosted Button
     * @return string 'HOSTED'
     */
    const VALUE_HOSTED = 'HOSTED';
    /**
     * Constant for value 'ENCRYPTED'
     * Meta information extracted from the WSDL
     * - documentation: Creates Encrypted Button
     * @return string 'ENCRYPTED'
     */
    const VALUE_ENCRYPTED = 'ENCRYPTED';
    /**
     * Constant for value 'CLEARTEXT'
     * Meta information extracted from the WSDL
     * - documentation: Creates Cleartext Button
     * @return string 'CLEARTEXT'
     */
    const VALUE_CLEARTEXT = 'CLEARTEXT';
    /**
     * Constant for value 'TOKEN'
     * Meta information extracted from the WSDL
     * - documentation: Creates Token or temporary Button
     * @return string 'TOKEN'
     */
    const VALUE_TOKEN = 'TOKEN';
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
     * @uses self::VALUE_HOSTED
     * @uses self::VALUE_ENCRYPTED
     * @uses self::VALUE_CLEARTEXT
     * @uses self::VALUE_TOKEN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HOSTED,
            self::VALUE_ENCRYPTED,
            self::VALUE_CLEARTEXT,
            self::VALUE_TOKEN,
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
