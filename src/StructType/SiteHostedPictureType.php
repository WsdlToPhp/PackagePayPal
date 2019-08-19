<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteHostedPictureType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SiteHostedPictureType extends AbstractStructBase
{
    /**
     * The PictureURL
     * Meta information extracted from the WSDL
     * - documentation: URLs for item picture that are stored/hosted at eBay site.
     * - maxOccurs: 6
     * - minOccurs: 0
     * @var string[]
     */
    public $PictureURL;
    /**
     * The PhotoDisplay
     * Meta information extracted from the WSDL
     * - documentation: Type of display for photos used for PhotoHosting slide show. Here are display options: None = No special Picture Services features. SlideShow = Slideshow of multiple pictures. SuperSize = Super-size format picture. PicturePack =
     * Picture Pack. Default is 'None'.
     * - minOccurs: 0
     * @var string
     */
    public $PhotoDisplay;
    /**
     * The GalleryType
     * Meta information extracted from the WSDL
     * - documentation: This will be either "Featured" or "Gallery".
     * - minOccurs: 0
     * @var string
     */
    public $GalleryType;
    /**
     * Constructor method for SiteHostedPictureType
     * @uses SiteHostedPictureType::setPictureURL()
     * @uses SiteHostedPictureType::setPhotoDisplay()
     * @uses SiteHostedPictureType::setGalleryType()
     * @param string[] $pictureURL
     * @param string $photoDisplay
     * @param string $galleryType
     */
    public function __construct(array $pictureURL = array(), $photoDisplay = null, $galleryType = null)
    {
        $this
            ->setPictureURL($pictureURL)
            ->setPhotoDisplay($photoDisplay)
            ->setGalleryType($galleryType);
    }
    /**
     * Get PictureURL value
     * @return string[]|null
     */
    public function getPictureURL()
    {
        return $this->PictureURL;
    }
    /**
     * This method is responsible for validating the values passed to the setPictureURL method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPictureURL method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePictureURLForArrayConstraintsFromSetPictureURL(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $siteHostedPictureTypePictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($siteHostedPictureTypePictureURLItem)) {
                $invalidValues[] = is_object($siteHostedPictureTypePictureURLItem) ? get_class($siteHostedPictureTypePictureURLItem) : sprintf('%s(%s)', gettype($siteHostedPictureTypePictureURLItem), var_export($siteHostedPictureTypePictureURLItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PictureURL property can only contain items of type anyURI, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PictureURL value
     * @throws \InvalidArgumentException
     * @param string[] $pictureURL
     * @return \PayPal\StructType\SiteHostedPictureType
     */
    public function setPictureURL(array $pictureURL = array())
    {
        // validation for constraint: array
        if ('' !== ($pictureURLArrayErrorMessage = self::validatePictureURLForArrayConstraintsFromSetPictureURL($pictureURL))) {
            throw new \InvalidArgumentException($pictureURLArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($pictureURL) && count($pictureURL) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 6', count($pictureURL)), __LINE__);
        }
        $this->PictureURL = $pictureURL;
        return $this;
    }
    /**
     * Add item to PictureURL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\SiteHostedPictureType
     */
    public function addToPictureURL($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The PictureURL property can only contain items of type anyURI, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($this->PictureURL) && count($this->PictureURL) >= 6) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 6', count($this->PictureURL)), __LINE__);
        }
        $this->PictureURL[] = $item;
        return $this;
    }
    /**
     * Get PhotoDisplay value
     * @return string|null
     */
    public function getPhotoDisplay()
    {
        return $this->PhotoDisplay;
    }
    /**
     * Set PhotoDisplay value
     * @uses \PayPal\EnumType\PhotoDisplayCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PhotoDisplayCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $photoDisplay
     * @return \PayPal\StructType\SiteHostedPictureType
     */
    public function setPhotoDisplay($photoDisplay = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PhotoDisplayCodeType::valueIsValid($photoDisplay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PhotoDisplayCodeType', is_array($photoDisplay) ? implode(', ', $photoDisplay) : var_export($photoDisplay, true), implode(', ', \PayPal\EnumType\PhotoDisplayCodeType::getValidValues())), __LINE__);
        }
        $this->PhotoDisplay = $photoDisplay;
        return $this;
    }
    /**
     * Get GalleryType value
     * @return string|null
     */
    public function getGalleryType()
    {
        return $this->GalleryType;
    }
    /**
     * Set GalleryType value
     * @uses \PayPal\EnumType\GalleryTypeCodeType::valueIsValid()
     * @uses \PayPal\EnumType\GalleryTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $galleryType
     * @return \PayPal\StructType\SiteHostedPictureType
     */
    public function setGalleryType($galleryType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\GalleryTypeCodeType::valueIsValid($galleryType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\GalleryTypeCodeType', is_array($galleryType) ? implode(', ', $galleryType) : var_export($galleryType, true), implode(', ', \PayPal\EnumType\GalleryTypeCodeType::getValidValues())), __LINE__);
        }
        $this->GalleryType = $galleryType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SiteHostedPictureType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
