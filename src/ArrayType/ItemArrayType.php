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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemForArrayConstraintsFromSetItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemArrayTypeItemItem) {
            // validation for constraint: itemType
            if (!$itemArrayTypeItemItem instanceof \PayPal\StructType\ItemType) {
                $invalidValues[] = is_object($itemArrayTypeItemItem) ? get_class($itemArrayTypeItemItem) : sprintf('%s(%s)', gettype($itemArrayTypeItemItem), var_export($itemArrayTypeItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Item property can only contain items of type \PayPal\StructType\ItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Item value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ItemType[] $item
     * @return \PayPal\ArrayType\ItemArrayType
     */
    public function setItem(array $item = array())
    {
        // validation for constraint: array
        if ('' !== ($itemArrayErrorMessage = self::validateItemForArrayConstraintsFromSetItem($item))) {
            throw new \InvalidArgumentException($itemArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Item property can only contain items of type \PayPal\StructType\ItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
