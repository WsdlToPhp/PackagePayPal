<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PromotionMethodCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Cross Promotion Method.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PromotionMethodCodeType extends AbstractStructEnumBase
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
}
