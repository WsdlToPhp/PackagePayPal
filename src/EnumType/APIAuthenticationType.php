<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for APIAuthenticationType EnumType
 * Meta information extracted from the WSDL
 * - documentation: API Authentication Type
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class APIAuthenticationType extends AbstractStructEnumBase
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
}
