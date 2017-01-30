<?php

namespace PayPal\EnumType;

/**
 * This class stands for ReceiverInfoCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: ReceiverInfoCodeType Payee identifier type for MassPay API
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReceiverInfoCodeType
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
