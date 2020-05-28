<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FeedbackRatingStarCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: FeedbackRatingStarCodeType
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FeedbackRatingStarCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: No graphic displayed
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Yellow'
     * Meta information extracted from the WSDL
     * - documentation: Yellow Star
     * @return string 'Yellow'
     */
    const VALUE_YELLOW = 'Yellow';
    /**
     * Constant for value 'Turquoise'
     * Meta information extracted from the WSDL
     * - documentation: Turquoise Star
     * @return string 'Turquoise'
     */
    const VALUE_TURQUOISE = 'Turquoise';
    /**
     * Constant for value 'Purple'
     * Meta information extracted from the WSDL
     * - documentation: Purple Star
     * @return string 'Purple'
     */
    const VALUE_PURPLE = 'Purple';
    /**
     * Constant for value 'Red'
     * Meta information extracted from the WSDL
     * - documentation: Red Star
     * @return string 'Red'
     */
    const VALUE_RED = 'Red';
    /**
     * Constant for value 'Green'
     * Meta information extracted from the WSDL
     * - documentation: Green Star
     * @return string 'Green'
     */
    const VALUE_GREEN = 'Green';
    /**
     * Constant for value 'YellowShooting'
     * Meta information extracted from the WSDL
     * - documentation: Yellow Shooting Star
     * @return string 'YellowShooting'
     */
    const VALUE_YELLOW_SHOOTING = 'YellowShooting';
    /**
     * Constant for value 'TurquoiseShooting'
     * Meta information extracted from the WSDL
     * - documentation: Turquoise Shooting Star
     * @return string 'TurquoiseShooting'
     */
    const VALUE_TURQUOISE_SHOOTING = 'TurquoiseShooting';
    /**
     * Constant for value 'PurpleShooting'
     * Meta information extracted from the WSDL
     * - documentation: Purple Shooting Star
     * @return string 'PurpleShooting'
     */
    const VALUE_PURPLE_SHOOTING = 'PurpleShooting';
    /**
     * Constant for value 'RedShooting'
     * Meta information extracted from the WSDL
     * - documentation: Red Shooting Star
     * @return string 'RedShooting'
     */
    const VALUE_RED_SHOOTING = 'RedShooting';
    /**
     * Constant for value 'Blue'
     * Meta information extracted from the WSDL
     * - documentation: Blue Star
     * @return string 'Blue'
     */
    const VALUE_BLUE = 'Blue';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_YELLOW
     * @uses self::VALUE_TURQUOISE
     * @uses self::VALUE_PURPLE
     * @uses self::VALUE_RED
     * @uses self::VALUE_GREEN
     * @uses self::VALUE_YELLOW_SHOOTING
     * @uses self::VALUE_TURQUOISE_SHOOTING
     * @uses self::VALUE_PURPLE_SHOOTING
     * @uses self::VALUE_RED_SHOOTING
     * @uses self::VALUE_BLUE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_YELLOW,
            self::VALUE_TURQUOISE,
            self::VALUE_PURPLE,
            self::VALUE_RED,
            self::VALUE_GREEN,
            self::VALUE_YELLOW_SHOOTING,
            self::VALUE_TURQUOISE_SHOOTING,
            self::VALUE_PURPLE_SHOOTING,
            self::VALUE_RED_SHOOTING,
            self::VALUE_BLUE,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
