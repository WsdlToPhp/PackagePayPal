<?php

namespace PayPal\EnumType;

/**
 * This class stands for MobileRecipientCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: MobileRecipientCodeType These are the accepted types of recipients for mobile-originated transactions
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MobileRecipientCodeType
{
    /**
     * Constant for value 'PhoneNumber'
     * @return string 'PhoneNumber'
     */
    const VALUE_PHONE_NUMBER = 'PhoneNumber';
    /**
     * Constant for value 'EmailAddress'
     * @return string 'EmailAddress'
     */
    const VALUE_EMAIL_ADDRESS = 'EmailAddress';
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
     * @uses self::VALUE_PHONE_NUMBER
     * @uses self::VALUE_EMAIL_ADDRESS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PHONE_NUMBER,
            self::VALUE_EMAIL_ADDRESS,
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
