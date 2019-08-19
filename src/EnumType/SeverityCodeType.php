<?php

namespace PayPal\EnumType;

/**
 * This class stands for SeverityCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: SeverityCodeType This code identifies the Severity code types in terms of whether there is an API-level error or warning that needs to be communicated to the client.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SeverityCodeType
{
    /**
     * Constant for value 'Warning'
     * Meta information extracted from the WSDL
     * - documentation: Warning or informational error.
     * @return string 'Warning'
     */
    const VALUE_WARNING = 'Warning';
    /**
     * Constant for value 'Error'
     * Meta information extracted from the WSDL
     * - documentation: Application-level error.
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
    /**
     * Constant for value 'PartialSuccess'
     * Meta information extracted from the WSDL
     * - documentation: Partial Success.
     * @return string 'PartialSuccess'
     */
    const VALUE_PARTIAL_SUCCESS = 'PartialSuccess';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
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
     * @uses self::VALUE_WARNING
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_PARTIAL_SUCCESS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WARNING,
            self::VALUE_ERROR,
            self::VALUE_PARTIAL_SUCCESS,
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
