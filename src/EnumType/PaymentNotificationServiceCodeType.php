<?php

namespace PayPal\EnumType;

/**
 * This class stands for PaymentNotificationServiceCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: PaymentNotificationService For SetPaymentStatus API, this value should always be eBayCN.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentNotificationServiceCodeType
{
    /**
     * Constant for value 'eBayCN'
     * @return string 'eBayCN'
     */
    const VALUE_E_BAY_CN = 'eBayCN';
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
     * @uses self::VALUE_E_BAY_CN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_E_BAY_CN,
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
