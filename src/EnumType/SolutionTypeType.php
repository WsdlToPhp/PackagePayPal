<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SolutionTypeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: SolutionTypeType This is the PayPal payment Solution details type (used by Express Checkout)
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SolutionTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Mark'
     * @return string 'Mark'
     */
    const VALUE_MARK = 'Mark';
    /**
     * Constant for value 'Sole'
     * @return string 'Sole'
     */
    const VALUE_SOLE = 'Sole';
    /**
     * Return allowed values
     * @uses self::VALUE_MARK
     * @uses self::VALUE_SOLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MARK,
            self::VALUE_SOLE,
        );
    }
}
