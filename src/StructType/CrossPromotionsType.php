<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrossPromotionsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Merchandizing info for an Item. This contains a list of crosssell or upsell items. PrimaryScheme, PromotionMethod,SellerId,ItemId, ShippingDiscount do not have be min occur 0
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CrossPromotionsType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Item ID for the base item. Based on this item other items are promoted. | Represents the unique identifier for an item. To be used to specify the elements that represents an ItemID.
     * - base: xs:string
     * @var string
     */
    public $ItemID;
    /**
     * The PrimaryScheme
     * @var string
     */
    public $PrimaryScheme;
    /**
     * The PromotionMethod
     * @var string
     */
    public $PromotionMethod;
    /**
     * The SellerID
     * Meta information extracted from the WSDL
     * - documentation: Id of the Seller who is promoting this item.
     * @var string
     */
    public $SellerID;
    /**
     * The ShippingDiscount
     * Meta information extracted from the WSDL
     * - documentation: Shipping Discount offered or not by the seller.
     * @var bool
     */
    public $ShippingDiscount;
    /**
     * The SellerKey
     * Meta information extracted from the WSDL
     * - documentation: Key of the Seller who is promoting this item.
     * - minOccurs: 0
     * @var string
     */
    public $SellerKey;
    /**
     * The StoreName
     * Meta information extracted from the WSDL
     * - documentation: Store Name for the seller.
     * - minOccurs: 0
     * @var string
     */
    public $StoreName;
    /**
     * The PromotedItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \PayPal\StructType\PromotedItemType[]
     */
    public $PromotedItem;
    /**
     * Constructor method for CrossPromotionsType
     * @uses CrossPromotionsType::setItemID()
     * @uses CrossPromotionsType::setPrimaryScheme()
     * @uses CrossPromotionsType::setPromotionMethod()
     * @uses CrossPromotionsType::setSellerID()
     * @uses CrossPromotionsType::setShippingDiscount()
     * @uses CrossPromotionsType::setSellerKey()
     * @uses CrossPromotionsType::setStoreName()
     * @uses CrossPromotionsType::setPromotedItem()
     * @param string $itemID
     * @param string $primaryScheme
     * @param string $promotionMethod
     * @param string $sellerID
     * @param bool $shippingDiscount
     * @param string $sellerKey
     * @param string $storeName
     * @param \PayPal\StructType\PromotedItemType[] $promotedItem
     */
    public function __construct($itemID = null, $primaryScheme = null, $promotionMethod = null, $sellerID = null, $shippingDiscount = null, $sellerKey = null, $storeName = null, array $promotedItem = array())
    {
        $this
            ->setItemID($itemID)
            ->setPrimaryScheme($primaryScheme)
            ->setPromotionMethod($promotionMethod)
            ->setSellerID($sellerID)
            ->setShippingDiscount($shippingDiscount)
            ->setSellerKey($sellerKey)
            ->setStoreName($storeName)
            ->setPromotedItem($promotedItem);
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
     * @return \PayPal\StructType\CrossPromotionsType
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
     * Get PrimaryScheme value
     * @return string|null
     */
    public function getPrimaryScheme()
    {
        return $this->PrimaryScheme;
    }
    /**
     * Set PrimaryScheme value
     * @uses \PayPal\EnumType\PromotionSchemeCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PromotionSchemeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $primaryScheme
     * @return \PayPal\StructType\CrossPromotionsType
     */
    public function setPrimaryScheme($primaryScheme = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PromotionSchemeCodeType::valueIsValid($primaryScheme)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PromotionSchemeCodeType', is_array($primaryScheme) ? implode(', ', $primaryScheme) : var_export($primaryScheme, true), implode(', ', \PayPal\EnumType\PromotionSchemeCodeType::getValidValues())), __LINE__);
        }
        $this->PrimaryScheme = $primaryScheme;
        return $this;
    }
    /**
     * Get PromotionMethod value
     * @return string|null
     */
    public function getPromotionMethod()
    {
        return $this->PromotionMethod;
    }
    /**
     * Set PromotionMethod value
     * @uses \PayPal\EnumType\PromotionMethodCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PromotionMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $promotionMethod
     * @return \PayPal\StructType\CrossPromotionsType
     */
    public function setPromotionMethod($promotionMethod = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PromotionMethodCodeType::valueIsValid($promotionMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PromotionMethodCodeType', is_array($promotionMethod) ? implode(', ', $promotionMethod) : var_export($promotionMethod, true), implode(', ', \PayPal\EnumType\PromotionMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PromotionMethod = $promotionMethod;
        return $this;
    }
    /**
     * Get SellerID value
     * @return string|null
     */
    public function getSellerID()
    {
        return $this->SellerID;
    }
    /**
     * Set SellerID value
     * @param string $sellerID
     * @return \PayPal\StructType\CrossPromotionsType
     */
    public function setSellerID($sellerID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerID) && !is_string($sellerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerID, true), gettype($sellerID)), __LINE__);
        }
        $this->SellerID = $sellerID;
        return $this;
    }
    /**
     * Get ShippingDiscount value
     * @return bool|null
     */
    public function getShippingDiscount()
    {
        return $this->ShippingDiscount;
    }
    /**
     * Set ShippingDiscount value
     * @param bool $shippingDiscount
     * @return \PayPal\StructType\CrossPromotionsType
     */
    public function setShippingDiscount($shippingDiscount = null)
    {
        // validation for constraint: boolean
        if (!is_null($shippingDiscount) && !is_bool($shippingDiscount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shippingDiscount, true), gettype($shippingDiscount)), __LINE__);
        }
        $this->ShippingDiscount = $shippingDiscount;
        return $this;
    }
    /**
     * Get SellerKey value
     * @return string|null
     */
    public function getSellerKey()
    {
        return $this->SellerKey;
    }
    /**
     * Set SellerKey value
     * @param string $sellerKey
     * @return \PayPal\StructType\CrossPromotionsType
     */
    public function setSellerKey($sellerKey = null)
    {
        // validation for constraint: string
        if (!is_null($sellerKey) && !is_string($sellerKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerKey, true), gettype($sellerKey)), __LINE__);
        }
        $this->SellerKey = $sellerKey;
        return $this;
    }
    /**
     * Get StoreName value
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->StoreName;
    }
    /**
     * Set StoreName value
     * @param string $storeName
     * @return \PayPal\StructType\CrossPromotionsType
     */
    public function setStoreName($storeName = null)
    {
        // validation for constraint: string
        if (!is_null($storeName) && !is_string($storeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storeName, true), gettype($storeName)), __LINE__);
        }
        $this->StoreName = $storeName;
        return $this;
    }
    /**
     * Get PromotedItem value
     * @return \PayPal\StructType\PromotedItemType[]|null
     */
    public function getPromotedItem()
    {
        return $this->PromotedItem;
    }
    /**
     * This method is responsible for validating the values passed to the setPromotedItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromotedItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePromotedItemForArrayConstraintsFromSetPromotedItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $crossPromotionsTypePromotedItemItem) {
            // validation for constraint: itemType
            if (!$crossPromotionsTypePromotedItemItem instanceof \PayPal\StructType\PromotedItemType) {
                $invalidValues[] = is_object($crossPromotionsTypePromotedItemItem) ? get_class($crossPromotionsTypePromotedItemItem) : sprintf('%s(%s)', gettype($crossPromotionsTypePromotedItemItem), var_export($crossPromotionsTypePromotedItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PromotedItem property can only contain items of type \PayPal\StructType\PromotedItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PromotedItem value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PromotedItemType[] $promotedItem
     * @return \PayPal\StructType\CrossPromotionsType
     */
    public function setPromotedItem(array $promotedItem = array())
    {
        // validation for constraint: array
        if ('' !== ($promotedItemArrayErrorMessage = self::validatePromotedItemForArrayConstraintsFromSetPromotedItem($promotedItem))) {
            throw new \InvalidArgumentException($promotedItemArrayErrorMessage, __LINE__);
        }
        $this->PromotedItem = $promotedItem;
        return $this;
    }
    /**
     * Add item to PromotedItem value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PromotedItemType $item
     * @return \PayPal\StructType\CrossPromotionsType
     */
    public function addToPromotedItem(\PayPal\StructType\PromotedItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\PromotedItemType) {
            throw new \InvalidArgumentException(sprintf('The PromotedItem property can only contain items of type \PayPal\StructType\PromotedItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PromotedItem[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CrossPromotionsType
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
