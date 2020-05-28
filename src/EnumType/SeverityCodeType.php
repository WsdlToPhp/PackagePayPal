<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SeverityCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: SeverityCodeType This code identifies the Severity code types in terms of whether there is an API-level error or warning that needs to be communicated to the client.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SeverityCodeType extends AbstractStructEnumBase
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
}
