<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GeneralPaymentMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: GeneralPaymentMethodCodeType - Type declaration to be used by other schema. This code identifies the general types of payment means, e.g., used by payment service provider applications.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GeneralPaymentMethodCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Other'
     * Meta information extracted from the WSDL
     * - documentation: Custom Code
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'Echeck'
     * Meta information extracted from the WSDL
     * - documentation: Electronic check.
     * @return string 'Echeck'
     */
    const VALUE_ECHECK = 'Echeck';
    /**
     * Constant for value 'ACH'
     * Meta information extracted from the WSDL
     * - documentation: ACH.
     * @return string 'ACH'
     */
    const VALUE_ACH = 'ACH';
    /**
     * Constant for value 'Creditcard'
     * Meta information extracted from the WSDL
     * - documentation: Credit-card.
     * @return string 'Creditcard'
     */
    const VALUE_CREDITCARD = 'Creditcard';
    /**
     * Constant for value 'PayPalBalance'
     * Meta information extracted from the WSDL
     * - documentation: Pay balance.
     * @return string 'PayPalBalance'
     */
    const VALUE_PAY_PAL_BALANCE = 'PayPalBalance';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_ECHECK
     * @uses self::VALUE_ACH
     * @uses self::VALUE_CREDITCARD
     * @uses self::VALUE_PAY_PAL_BALANCE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OTHER,
            self::VALUE_ECHECK,
            self::VALUE_ACH,
            self::VALUE_CREDITCARD,
            self::VALUE_PAY_PAL_BALANCE,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
