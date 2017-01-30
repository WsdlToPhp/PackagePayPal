<?php

namespace PayPal\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for CategoryArrayType ArrayType
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CategoryArrayType extends AbstractStructArrayBase
{
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ns:Category
     * @var \PayPal\StructType\CategoryType[]
     */
    public $Category;
    /**
     * Constructor method for CategoryArrayType
     * @uses CategoryArrayType::setCategory()
     * @param \PayPal\StructType\CategoryType[] $category
     */
    public function __construct(array $category = array())
    {
        $this
            ->setCategory($category);
    }
    /**
     * Get Category value
     * @return \PayPal\StructType\CategoryType[]|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\CategoryType[] $category
     * @return \PayPal\ArrayType\CategoryArrayType
     */
    public function setCategory(array $category = array())
    {
        foreach ($category as $categoryArrayTypeCategoryItem) {
            // validation for constraint: itemType
            if (!$categoryArrayTypeCategoryItem instanceof \PayPal\StructType\CategoryType) {
                throw new \InvalidArgumentException(sprintf('The Category property can only contain items of \PayPal\StructType\CategoryType, "%s" given', is_object($categoryArrayTypeCategoryItem) ? get_class($categoryArrayTypeCategoryItem) : gettype($categoryArrayTypeCategoryItem)), __LINE__);
            }
        }
        $this->Category = $category;
        return $this;
    }
    /**
     * Add item to Category value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\CategoryType $item
     * @return \PayPal\ArrayType\CategoryArrayType
     */
    public function addToCategory(\PayPal\StructType\CategoryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\CategoryType) {
            throw new \InvalidArgumentException(sprintf('The Category property can only contain items of \PayPal\StructType\CategoryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Category[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \PayPal\StructType\CategoryType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \PayPal\StructType\CategoryType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \PayPal\StructType\CategoryType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \PayPal\StructType\CategoryType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \PayPal\StructType\CategoryType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Category
     */
    public function getAttributeName()
    {
        return 'Category';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\ArrayType\CategoryArrayType
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
