<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TotalType EnumType
 * Meta information extracted from the WSDL
 * - documentation: TotalType - Type declaration for the label to be displayed in MiniCart for UX.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TotalType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Total'
     * @return string 'Total'
     */
    const VALUE_TOTAL = 'Total';
    /**
     * Constant for value 'EstimatedTotal'
     * @return string 'EstimatedTotal'
     */
    const VALUE_ESTIMATED_TOTAL = 'EstimatedTotal';
    /**
     * Return allowed values
     * @uses self::VALUE_TOTAL
     * @uses self::VALUE_ESTIMATED_TOTAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TOTAL,
            self::VALUE_ESTIMATED_TOTAL,
        );
    }
}
