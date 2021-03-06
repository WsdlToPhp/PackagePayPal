<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListingDesignerType StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the Layout and the Theme template associated with the item. in case of revision - all data can be min occur = 0
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ListingDesignerType extends AbstractStructBase
{
    /**
     * The LayoutID
     * Meta information extracted from the WSDL
     * - documentation: Identifies the Layout template associated with the item.
     * - minOccurs: 0
     * @var int
     */
    public $LayoutID;
    /**
     * The OptimalPictureSize
     * Meta information extracted from the WSDL
     * - documentation: A value of true for OptimalPictureSize indicates that the picture URL will be enlarged to fit description of the item.
     * - minOccurs: 0
     * @var bool
     */
    public $OptimalPictureSize;
    /**
     * The ThemeID
     * Meta information extracted from the WSDL
     * - documentation: Identifies the Theme template associated with the item.
     * - minOccurs: 0
     * @var int
     */
    public $ThemeID;
    /**
     * Constructor method for ListingDesignerType
     * @uses ListingDesignerType::setLayoutID()
     * @uses ListingDesignerType::setOptimalPictureSize()
     * @uses ListingDesignerType::setThemeID()
     * @param int $layoutID
     * @param bool $optimalPictureSize
     * @param int $themeID
     */
    public function __construct($layoutID = null, $optimalPictureSize = null, $themeID = null)
    {
        $this
            ->setLayoutID($layoutID)
            ->setOptimalPictureSize($optimalPictureSize)
            ->setThemeID($themeID);
    }
    /**
     * Get LayoutID value
     * @return int|null
     */
    public function getLayoutID()
    {
        return $this->LayoutID;
    }
    /**
     * Set LayoutID value
     * @param int $layoutID
     * @return \PayPal\StructType\ListingDesignerType
     */
    public function setLayoutID($layoutID = null)
    {
        // validation for constraint: int
        if (!is_null($layoutID) && !(is_int($layoutID) || ctype_digit($layoutID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($layoutID, true), gettype($layoutID)), __LINE__);
        }
        $this->LayoutID = $layoutID;
        return $this;
    }
    /**
     * Get OptimalPictureSize value
     * @return bool|null
     */
    public function getOptimalPictureSize()
    {
        return $this->OptimalPictureSize;
    }
    /**
     * Set OptimalPictureSize value
     * @param bool $optimalPictureSize
     * @return \PayPal\StructType\ListingDesignerType
     */
    public function setOptimalPictureSize($optimalPictureSize = null)
    {
        // validation for constraint: boolean
        if (!is_null($optimalPictureSize) && !is_bool($optimalPictureSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($optimalPictureSize, true), gettype($optimalPictureSize)), __LINE__);
        }
        $this->OptimalPictureSize = $optimalPictureSize;
        return $this;
    }
    /**
     * Get ThemeID value
     * @return int|null
     */
    public function getThemeID()
    {
        return $this->ThemeID;
    }
    /**
     * Set ThemeID value
     * @param int $themeID
     * @return \PayPal\StructType\ListingDesignerType
     */
    public function setThemeID($themeID = null)
    {
        // validation for constraint: int
        if (!is_null($themeID) && !(is_int($themeID) || ctype_digit($themeID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($themeID, true), gettype($themeID)), __LINE__);
        }
        $this->ThemeID = $themeID;
        return $this;
    }
}
