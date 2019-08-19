<?php

namespace PayPal\EnumType;

/**
 * This class stands for AckCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: AckCodeType This code identifies the acknowledgement code types that could be used to communicate the status of processing a (request) message to an application. This code would be used as part of a response message that contains an
 * application level acknowledgement element.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AckCodeType
{
    /**
     * Constant for value 'Success'
     * Meta information extracted from the WSDL
     * - documentation: Request processing succeeded.
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'Failure'
     * Meta information extracted from the WSDL
     * - documentation: Request processing failed.
     * @return string 'Failure'
     */
    const VALUE_FAILURE = 'Failure';
    /**
     * Constant for value 'Warning'
     * Meta information extracted from the WSDL
     * - documentation: Request processing completed with warning information being included in the response message.
     * @return string 'Warning'
     */
    const VALUE_WARNING = 'Warning';
    /**
     * Constant for value 'SuccessWithWarning'
     * Meta information extracted from the WSDL
     * - documentation: Request processing completed successful with some with some warning information that could be useful for the requesting application to process and/or record.
     * @return string 'SuccessWithWarning'
     */
    const VALUE_SUCCESS_WITH_WARNING = 'SuccessWithWarning';
    /**
     * Constant for value 'FailureWithWarning'
     * Meta information extracted from the WSDL
     * - documentation: Request processing failed with some error and warnining information that requesting application should process to determine cause(s) of failure.
     * @return string 'FailureWithWarning'
     */
    const VALUE_FAILURE_WITH_WARNING = 'FailureWithWarning';
    /**
     * Constant for value 'PartialSuccess'
     * Meta information extracted from the WSDL
     * - documentation: Request processing completed with Partial Success.
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
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_FAILURE
     * @uses self::VALUE_WARNING
     * @uses self::VALUE_SUCCESS_WITH_WARNING
     * @uses self::VALUE_FAILURE_WITH_WARNING
     * @uses self::VALUE_PARTIAL_SUCCESS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUCCESS,
            self::VALUE_FAILURE,
            self::VALUE_WARNING,
            self::VALUE_SUCCESS_WITH_WARNING,
            self::VALUE_FAILURE_WITH_WARNING,
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
