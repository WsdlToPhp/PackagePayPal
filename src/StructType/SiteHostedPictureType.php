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
     * Meta informations extracted from the WSDL
     * - documentation: URLs for item picture that are stored/hosted at eBay site.
     * - maxOccurs: 6
     * - minOccurs: 0
     * @var string[]
     */
    public $PictureURL;
    /**
     * The PhotoDisplay
     * Meta informations extracted from the WSDL
     * - documentation: Type of display for photos used for PhotoHosting slide show. Here are display options: None = No special Picture Services features. SlideShow = Slideshow of multiple pictures. SuperSize = Super-size format picture. PicturePack =
     * Picture Pack. Default is 'None'.
     * - minOccurs: 0
     * @var string
     */
    public $PhotoDisplay;
    /**
     * The GalleryType
     * Meta informations extracted from the WSDL
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
     * Set PictureURL value
     * @throws \InvalidArgumentException
     * @param string[] $pictureURL
     * @return \PayPal\StructType\SiteHostedPictureType
     */
    public function setPictureURL(array $pictureURL = array())
    {
        foreach ($pictureURL as $siteHostedPictureTypePictureURLItem) {
            // validation for constraint: itemType
            if (!is_string($siteHostedPictureTypePictureURLItem)) {
                throw new \InvalidArgumentException(sprintf('The PictureURL property can only contain items of anyURI, "%s" given', is_object($siteHostedPictureTypePictureURLItem) ? get_class($siteHostedPictureTypePictureURLItem) : gettype($siteHostedPictureTypePictureURLItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The PictureURL property can only contain items of anyURI, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $photoDisplay, implode(', ', \PayPal\EnumType\PhotoDisplayCodeType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $galleryType, implode(', ', \PayPal\EnumType\GalleryTypeCodeType::getValidValues())), __LINE__);
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
