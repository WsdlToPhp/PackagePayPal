<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BuyNowTextType EnumType
 * Meta information extracted from the WSDL
 * - documentation: values for buynow button text
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BuyNowTextType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BUYNOW'
     * Meta information extracted from the WSDL
     * - documentation: button wording is BUYNOW
     * @return string 'BUYNOW'
     */
    const VALUE_BUYNOW = 'BUYNOW';
    /**
     * Constant for value 'PAYNOW'
     * Meta information extracted from the WSDL
     * - documentation: button wording is PAYNOW
     * @return string 'PAYNOW'
     */
    const VALUE_PAYNOW = 'PAYNOW';
    /**
     * Return allowed values
     * @uses self::VALUE_BUYNOW
     * @uses self::VALUE_PAYNOW
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUYNOW,
            self::VALUE_PAYNOW,
        );
    }
}
