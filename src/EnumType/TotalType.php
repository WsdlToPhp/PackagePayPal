<?php

namespace PayPal\EnumType;

/**
 * This class stands for TotalType EnumType
 * Meta information extracted from the WSDL
 * - documentation: TotalType - Type declaration for the label to be displayed in MiniCart for UX.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TotalType
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
