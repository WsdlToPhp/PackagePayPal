<?php

namespace PayPal\EnumType;

/**
 * This class stands for FailedPaymentActionType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FailedPaymentActionType
{
    /**
     * Constant for value 'CancelOnFailure'
     * @return string 'CancelOnFailure'
     */
    const VALUE_CANCEL_ON_FAILURE = 'CancelOnFailure';
    /**
     * Constant for value 'ContinueOnFailure'
     * @return string 'ContinueOnFailure'
     */
    const VALUE_CONTINUE_ON_FAILURE = 'ContinueOnFailure';
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
     * @uses self::VALUE_CANCEL_ON_FAILURE
     * @uses self::VALUE_CONTINUE_ON_FAILURE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CANCEL_ON_FAILURE,
            self::VALUE_CONTINUE_ON_FAILURE,
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
