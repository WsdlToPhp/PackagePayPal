<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for HitCounterCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: HitCounterCodeType This code identifies the HitCounter codes used to specify whether a hit counter is used for the item's listing page and, if so, what type.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class HitCounterCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoHitCounter'
     * Meta information extracted from the WSDL
     * - documentation: No hit counter
     * @return string 'NoHitCounter'
     */
    const VALUE_NO_HIT_COUNTER = 'NoHitCounter';
    /**
     * Constant for value 'HonestyStyle'
     * Meta information extracted from the WSDL
     * - documentation: Honesty Style Hit Counter
     * @return string 'HonestyStyle'
     */
    const VALUE_HONESTY_STYLE = 'HonestyStyle';
    /**
     * Constant for value 'GreenLED'
     * Meta information extracted from the WSDL
     * - documentation: Green LED counter.
     * @return string 'GreenLED'
     */
    const VALUE_GREEN_LED = 'GreenLED';
    /**
     * Constant for value 'Hidden'
     * Meta information extracted from the WSDL
     * - documentation: Hidden counter.
     * @return string 'Hidden'
     */
    const VALUE_HIDDEN = 'Hidden';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_HIT_COUNTER
     * @uses self::VALUE_HONESTY_STYLE
     * @uses self::VALUE_GREEN_LED
     * @uses self::VALUE_HIDDEN
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_HIT_COUNTER,
            self::VALUE_HONESTY_STYLE,
            self::VALUE_GREEN_LED,
            self::VALUE_HIDDEN,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
