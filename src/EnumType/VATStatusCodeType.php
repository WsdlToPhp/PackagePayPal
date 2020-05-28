<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for VATStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: VATStatusCodeType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class VATStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoVATTax'
     * Meta information extracted from the WSDL
     * - documentation: No VAT Tax
     * @return string 'NoVATTax'
     */
    const VALUE_NO_VATTAX = 'NoVATTax';
    /**
     * Constant for value 'VATTax'
     * Meta information extracted from the WSDL
     * - documentation: VAT Tax
     * @return string 'VATTax'
     */
    const VALUE_VATTAX = 'VATTax';
    /**
     * Constant for value 'VATExempt'
     * Meta information extracted from the WSDL
     * - documentation: VAT Exempt
     * @return string 'VATExempt'
     */
    const VALUE_VATEXEMPT = 'VATExempt';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_VATTAX
     * @uses self::VALUE_VATTAX
     * @uses self::VALUE_VATEXEMPT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_VATTAX,
            self::VALUE_VATTAX,
            self::VALUE_VATEXEMPT,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
