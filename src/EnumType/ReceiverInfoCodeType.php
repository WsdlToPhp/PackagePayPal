<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ReceiverInfoCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: ReceiverInfoCodeType Payee identifier type for MassPay API
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReceiverInfoCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EmailAddress'
     * @return string 'EmailAddress'
     */
    const VALUE_EMAIL_ADDRESS = 'EmailAddress';
    /**
     * Constant for value 'UserID'
     * @return string 'UserID'
     */
    const VALUE_USER_ID = 'UserID';
    /**
     * Constant for value 'PhoneNumber'
     * @return string 'PhoneNumber'
     */
    const VALUE_PHONE_NUMBER = 'PhoneNumber';
    /**
     * Return allowed values
     * @uses self::VALUE_EMAIL_ADDRESS
     * @uses self::VALUE_USER_ID
     * @uses self::VALUE_PHONE_NUMBER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EMAIL_ADDRESS,
            self::VALUE_USER_ID,
            self::VALUE_PHONE_NUMBER,
        );
    }
}
