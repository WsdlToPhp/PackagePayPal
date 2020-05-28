<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FailedPaymentActionType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FailedPaymentActionType extends AbstractStructEnumBase
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
}
