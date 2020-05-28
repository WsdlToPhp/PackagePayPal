<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CompleteCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: CompleteCodeType This is the PayPal DoCapture CompleteType code
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CompleteCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotComplete'
     * @return string 'NotComplete'
     */
    const VALUE_NOT_COMPLETE = 'NotComplete';
    /**
     * Constant for value 'Complete'
     * @return string 'Complete'
     */
    const VALUE_COMPLETE = 'Complete';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_COMPLETE
     * @uses self::VALUE_COMPLETE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_COMPLETE,
            self::VALUE_COMPLETE,
        );
    }
}
