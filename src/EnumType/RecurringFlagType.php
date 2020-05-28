<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RecurringFlagType EnumType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RecurringFlagType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Y'
     * @return string 'Y'
     */
    const VALUE_Y = 'Y';
    /**
     * Constant for value 'y'
     * @return string 'y'
     */
    const VALUE_Y_1 = 'y';
    /**
     * Return allowed values
     * @uses self::VALUE_Y
     * @uses self::VALUE_Y_1
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_Y,
            self::VALUE_Y_1,
        );
    }
}
