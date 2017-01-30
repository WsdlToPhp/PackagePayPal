<?php

namespace PayPal\EnumType;

/**
 * This class stands for APIAuthenticationType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: API Authentication Type
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class APIAuthenticationType
{
    /**
     * Constant for value 'Auth-None'
     * @return string 'Auth-None'
     */
    const VALUE_AUTH_NONE = 'Auth-None';
    /**
     * Constant for value 'Cert'
     * @return string 'Cert'
     */
    const VALUE_CERT = 'Cert';
    /**
     * Constant for value 'Sign'
     * @return string 'Sign'
     */
    const VALUE_SIGN = 'Sign';
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
     * @uses self::VALUE_AUTH_NONE
     * @uses self::VALUE_CERT
     * @uses self::VALUE_SIGN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AUTH_NONE,
            self::VALUE_CERT,
            self::VALUE_SIGN,
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
