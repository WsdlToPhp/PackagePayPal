<?php

namespace PayPal\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ItemArrayType ArrayType
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ItemArrayType extends AbstractStructArrayBase
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ns:Item
     * @var \PayPal\StructType\ItemType[]
     */
    public $Item;
    /**
     * Constructor method for ItemArrayType
     * @uses ItemArrayType::setItem()
     * @param \PayPal\StructType\ItemType[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \PayPal\StructType\ItemType[]|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ItemType[] $item
     * @return \PayPal\ArrayType\ItemArrayType
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $itemArrayTypeItemItem) {
            // validation for constraint: itemType
            if (!$itemArrayTypeItemItem instanceof \PayPal\StructType\ItemType) {
                throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \PayPal\StructType\ItemType, "%s" given', is_object($itemArrayTypeItemItem) ? get_class($itemArrayTypeItemItem) : gettype($itemArrayTypeItemItem)), __LINE__);
            }
        }
        $this->Item = $item;
        return $this;
    }
    /**
     * Add item to Item value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ItemType $item
     * @return \PayPal\ArrayType\ItemArrayType
     */
    public function addToItem(\PayPal\StructType\ItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\ItemType) {
            throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \PayPal\StructType\ItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \PayPal\StructType\ItemType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \PayPal\StructType\ItemType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \PayPal\StructType\ItemType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \PayPal\StructType\ItemType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \PayPal\StructType\ItemType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Item
     */
    public function getAttributeName()
    {
        return 'Item';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\ArrayType\ItemArrayType
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
