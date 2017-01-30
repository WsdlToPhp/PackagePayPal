<?php

namespace PayPal\EnumType;

/**
 * This class stands for PhotoDisplayCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: PhotoDisplayCodeType These are types of display for photos used for PhotoHosting slide show.
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PhotoDisplayCodeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'SlideShow'
     * @return string 'SlideShow'
     */
    const VALUE_SLIDE_SHOW = 'SlideShow';
    /**
     * Constant for value 'SuperSize'
     * @return string 'SuperSize'
     */
    const VALUE_SUPER_SIZE = 'SuperSize';
    /**
     * Constant for value 'PicturePack'
     * @return string 'PicturePack'
     */
    const VALUE_PICTURE_PACK = 'PicturePack';
    /**
     * Constant for value 'CustomCode'
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
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
