<?php

namespace PayPal\EnumType;

/**
 * This class stands for InsuranceOptionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: InsuranceOptionCodeType These are the possible codes to describe insurance option as part of shipping service.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class InsuranceOptionCodeType
{
    /**
     * Constant for value 'Optional'
     * @return string 'Optional'
     */
    const VALUE_OPTIONAL = 'Optional';
    /**
     * Constant for value 'Required'
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
    /**
     * Constant for value 'NotOffered'
     * @return string 'NotOffered'
     */
    const VALUE_NOT_OFFERED = 'NotOffered';
    /**
     * Constant for value 'IncludedInShippingHandling'
     * @return string 'IncludedInShippingHandling'
     */
    const VALUE_INCLUDED_IN_SHIPPING_HANDLING = 'IncludedInShippingHandling';
    /**
     * Constant for value 'CustomCode'
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
