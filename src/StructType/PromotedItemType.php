<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotedItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: Merchandizing info for an Item. This contains a list of crosssell or upsell items.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PromotedItemType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Item ID for the base item. Based on this item other items are promoted. it is teh only tag that would show up in all calls that use promoted item type. some are not in soap yet, such as get and ser promotion rules | Represents the
     * unique identifier for an item. To be used to specify the elements that represents an ItemID.
     * - base: xs:string
     * @var string
     */
    public $ItemID;
    /**
     * The PictureURL
     * Meta information extracted from the WSDL
     * - documentation: URL for the picture of the promoted item.
     * - minOccurs: 0
     * @var string
     */
    public $PictureURL;
    /**
     * The position
     * Meta information extracted from the WSDL
     * - documentation: Where to display in the list of items.currentl y even forget and set does not have to be minoccur =0 but if we ever were to do revise promotion tems, it can be omitted
     * - minOccurs: 0
     * @var int
     */
    public $position;
    /**
     * The PromotionPrice
     * Meta information extracted from the WSDL
     * - documentation: Promotion Price. Price at which the buyer can buy the item now.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $PromotionPrice;
    /**
     * The PromotionPriceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PromotionPriceType;
    /**
     * The SelectionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SelectionType;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: Item Title for the promoted item.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The ListingType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ListingType;
    /**
     * Constructor method for PromotedItemType
     * @uses PromotedItemType::setItemID()
     * @uses PromotedItemType::setPictureURL()
     * @uses PromotedItemType::setPosition()
     * @uses PromotedItemType::setPromotionPrice()
     * @uses PromotedItemType::setPromotionPriceType()
     * @uses PromotedItemType::setSelectionType()
     * @uses PromotedItemType::setTitle()
     * @uses PromotedItemType::setListingType()
     * @param string $itemID
     * @param string $pictureURL
     * @param int $position
     * @param \PayPal\StructType\AmountType $promotionPrice
     * @param string $promotionPriceType
     * @param string $selectionType
     * @param string $title
     * @param string $listingType
     */
    public function __construct($itemID = null, $pictureURL = null, $position = null, \PayPal\StructType\AmountType $promotionPrice = null, $promotionPriceType = null, $selectionType = null, $title = null, $listingType = null)
    {
        $this
            ->setItemID($itemID)
            ->setPictureURL($pictureURL)
            ->setPosition($position)
            ->setPromotionPrice($promotionPrice)
            ->setPromotionPriceType($promotionPriceType)
            ->setSelectionType($selectionType)
            ->setTitle($title)
            ->setListingType($listingType);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \PayPal\StructType\PromotedItemType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
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
     * @return \PayPal\StructType\PromotedItemType
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
     * Get position value
     * @return int|null
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \PayPal\StructType\PromotedItemType
     */
    public function setPosition($position = null)
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        return $this;
    }
    /**
     * Get PromotionPrice value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getPromotionPrice()
    {
        return $this->PromotionPrice;
    }
    /**
     * Set PromotionPrice value
     * @param \PayPal\StructType\AmountType $promotionPrice
     * @return \PayPal\StructType\PromotedItemType
     */
    public function setPromotionPrice(\PayPal\StructType\AmountType $promotionPrice = null)
    {
        $this->PromotionPrice = $promotionPrice;
        return $this;
    }
    /**
     * Get PromotionPriceType value
     * @return string|null
     */
    public function getPromotionPriceType()
    {
        return $this->PromotionPriceType;
    }
    /**
     * Set PromotionPriceType value
     * @uses \PayPal\EnumType\PromotionItemPriceTypeCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PromotionItemPriceTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $promotionPriceType
     * @return \PayPal\StructType\PromotedItemType
     */
    public function setPromotionPriceType($promotionPriceType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PromotionItemPriceTypeCodeType::valueIsValid($promotionPriceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PromotionItemPriceTypeCodeType', is_array($promotionPriceType) ? implode(', ', $promotionPriceType) : var_export($promotionPriceType, true), implode(', ', \PayPal\EnumType\PromotionItemPriceTypeCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionPriceType = $promotionPriceType;
        return $this;
    }
    /**
     * Get SelectionType value
     * @return string|null
     */
    public function getSelectionType()
    {
        return $this->SelectionType;
    }
    /**
     * Set SelectionType value
     * @uses \PayPal\EnumType\PromotionItemSelectionCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PromotionItemSelectionCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $selectionType
     * @return \PayPal\StructType\PromotedItemType
     */
    public function setSelectionType($selectionType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PromotionItemSelectionCodeType::valueIsValid($selectionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PromotionItemSelectionCodeType', is_array($selectionType) ? implode(', ', $selectionType) : var_export($selectionType, true), implode(', ', \PayPal\EnumType\PromotionItemSelectionCodeType::getValidValues())), __LINE__);
        }
        $this->SelectionType = $selectionType;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \PayPal\StructType\PromotedItemType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get ListingType value
     * @return string|null
     */
    public function getListingType()
    {
        return $this->ListingType;
    }
    /**
     * Set ListingType value
     * @uses \PayPal\EnumType\ListingTypeCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ListingTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingType
     * @return \PayPal\StructType\PromotedItemType
     */
    public function setListingType($listingType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ListingTypeCodeType::valueIsValid($listingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\ListingTypeCodeType', is_array($listingType) ? implode(', ', $listingType) : var_export($listingType, true), implode(', ', \PayPal\EnumType\ListingTypeCodeType::getValidValues())), __LINE__);
        }
        $this->ListingType = $listingType;
        return $this;
    }
}
