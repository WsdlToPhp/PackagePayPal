<?php

namespace PayPal\EnumType;

/**
 * This class stands for PromotionMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Cross Promotion Method.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PromotionMethodCodeType
{
    /**
     * Constant for value 'CrossSell'
     * Meta information extracted from the WSDL
     * - documentation: Cross Sell
     * @return string 'CrossSell'
     */
    const VALUE_CROSS_SELL = 'CrossSell';
    /**
     * Constant for value 'UpSell'
     * Meta information extracted from the WSDL
     * - documentation: Up Sell
     * @return string 'UpSell'
     */
    const VALUE_UP_SELL = 'UpSell';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved. Do not use.
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
     * @uses self::VALUE_CROSS_SELL
     * @uses self::VALUE_UP_SELL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CROSS_SELL,
            self::VALUE_UP_SELL,
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
