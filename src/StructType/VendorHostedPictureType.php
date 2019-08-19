<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorHostedPictureType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class VendorHostedPictureType extends AbstractStructBase
{
    /**
     * The PictureURL
     * Meta information extracted from the WSDL
     * - documentation: URLs for item picture that are stored/hosted at eBay site.
     * - minOccurs: 0
     * @var string
     */
    public $PictureURL;
    /**
     * The GalleryURL
     * Meta information extracted from the WSDL
     * - documentation: URL for a picture for the gallery. If the GalleryFeatured argument is true, a value must be supplied for either the GalleryURL or the PictureURL argument. In either case: (a) If a URL is provided for only PictureURL, it is used as
     * the Gallery thumbnail. (b) If a URL is provided for both GalleryURL and PictureURL, then the picture indicated in GalleryURL is used as the thumbnail. The image used for the Gallery thumbnail (specified in the GalleryURL or PictureURL argument) must
     * be in one of the graphics formats JPEG, BMP, TIF, or GIF.
     * - minOccurs: 0
     * @var string
     */
    public $GalleryURL;
    /**
     * The GalleryType
     * Meta information extracted from the WSDL
     * - documentation: This will be either "Featured" or "Gallery".
     * - minOccurs: 0
     * @var string
     */
    public $GalleryType;
    /**
     * Constructor method for VendorHostedPictureType
     * @uses VendorHostedPictureType::setPictureURL()
     * @uses VendorHostedPictureType::setGalleryURL()
     * @uses VendorHostedPictureType::setGalleryType()
     * @param string $pictureURL
     * @param string $galleryURL
     * @param string $galleryType
     */
    public function __construct($pictureURL = null, $galleryURL = null, $galleryType = null)
    {
        $this
            ->setPictureURL($pictureURL)
            ->setGalleryURL($galleryURL)
            ->setGalleryType($galleryType);
    }
    /**
     * Get PictureURL value
     * @return string|null
     */
    public function getPictureURL()
    {
        return $this->PictureURL;
    }
    /**
     * Set PictureURL value
     * @param string $pictureURL
     * @return \PayPal\StructType\VendorHostedPictureType
     */
    public function setPictureURL($pictureURL = null)
    {
        // validation for constraint: string
        if (!is_null($pictureURL) && !is_string($pictureURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pictureURL, true), gettype($pictureURL)), __LINE__);
        }
        $this->PictureURL = $pictureURL;
        return $this;
    }
    /**
     * Get GalleryURL value
     * @return string|null
     */
    public function getGalleryURL()
    {
        return $this->GalleryURL;
    }
    /**
     * Set GalleryURL value
     * @param string $galleryURL
     * @return \PayPal\StructType\VendorHostedPictureType
     */
    public function setGalleryURL($galleryURL = null)
    {
        // validation for constraint: string
        if (!is_null($galleryURL) && !is_string($galleryURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($galleryURL, true), gettype($galleryURL)), __LINE__);
        }
        $this->GalleryURL = $galleryURL;
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
     * @return \PayPal\StructType\VendorHostedPictureType
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
     * @return \PayPal\StructType\VendorHostedPictureType
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
