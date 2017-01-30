<?php

namespace PayPal\EnumType;

/**
 * This class stands for MerchantPullPaymentCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: MerchantPullPaymentCodeType Type of Payment to be initiated by the merchant
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MerchantPullPaymentCodeType
{
    /**
     * Constant for value 'Any'
     * @return string 'Any'
     */
    const VALUE_ANY = 'Any';
    /**
     * Constant for value 'InstantOnly'
     * @return string 'InstantOnly'
     */
    const VALUE_INSTANT_ONLY = 'InstantOnly';
    /**
     * Constant for value 'EcheckOnly'
     * @return string 'EcheckOnly'
     */
    const VALUE_ECHECK_ONLY = 'EcheckOnly';
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
     * @uses self::VALUE_ANY
     * @uses self::VALUE_INSTANT_ONLY
     * @uses self::VALUE_ECHECK_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ANY,
            self::VALUE_INSTANT_ONLY,
            self::VALUE_ECHECK_ONLY,
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
