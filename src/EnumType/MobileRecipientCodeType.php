<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MobileRecipientCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: MobileRecipientCodeType These are the accepted types of recipients for mobile-originated transactions
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MobileRecipientCodeType extends AbstractStructEnumBase
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
}
