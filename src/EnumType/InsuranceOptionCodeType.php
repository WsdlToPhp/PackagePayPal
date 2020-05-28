<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for InsuranceOptionCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: InsuranceOptionCodeType These are the possible codes to describe insurance option as part of shipping service.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class InsuranceOptionCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Optional'
     * Meta information extracted from the WSDL
     * - documentation: Insurance optional.
     * @return string 'Optional'
     */
    const VALUE_OPTIONAL = 'Optional';
    /**
     * Constant for value 'Required'
     * Meta information extracted from the WSDL
     * - documentation: Insurance required.
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
    /**
     * Constant for value 'NotOffered'
     * Meta information extracted from the WSDL
     * - documentation: Insurance not offered.
     * @return string 'NotOffered'
     */
    const VALUE_NOT_OFFERED = 'NotOffered';
    /**
     * Constant for value 'IncludedInShippingHandling'
     * Meta information extracted from the WSDL
     * - documentation: Insurance included in Shipping and Handling costs.
     * @return string 'IncludedInShippingHandling'
     */
    const VALUE_INCLUDED_IN_SHIPPING_HANDLING = 'IncludedInShippingHandling';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_OPTIONAL
     * @uses self::VALUE_REQUIRED
     * @uses self::VALUE_NOT_OFFERED
     * @uses self::VALUE_INCLUDED_IN_SHIPPING_HANDLING
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OPTIONAL,
            self::VALUE_REQUIRED,
            self::VALUE_NOT_OFFERED,
            self::VALUE_INCLUDED_IN_SHIPPING_HANDLING,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
