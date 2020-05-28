<?php

namespace PayPal\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PhotoDisplayCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: PhotoDisplayCodeType These are types of display for photos used for PhotoHosting slide show.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PhotoDisplayCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * Meta information extracted from the WSDL
     * - documentation: No special Picture Services features.
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'SlideShow'
     * Meta information extracted from the WSDL
     * - documentation: Slideshow of multiple pictures.
     * @return string 'SlideShow'
     */
    const VALUE_SLIDE_SHOW = 'SlideShow';
    /**
     * Constant for value 'SuperSize'
     * Meta information extracted from the WSDL
     * - documentation: Super-size format picture.
     * @return string 'SuperSize'
     */
    const VALUE_SUPER_SIZE = 'SuperSize';
    /**
     * Constant for value 'PicturePack'
     * Meta information extracted from the WSDL
     * - documentation: Picture Pack.
     * @return string 'PicturePack'
     */
    const VALUE_PICTURE_PACK = 'PicturePack';
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
     * @uses self::VALUE_SLIDE_SHOW
     * @uses self::VALUE_SUPER_SIZE
     * @uses self::VALUE_PICTURE_PACK
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SLIDE_SHOW,
            self::VALUE_SUPER_SIZE,
            self::VALUE_PICTURE_PACK,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
