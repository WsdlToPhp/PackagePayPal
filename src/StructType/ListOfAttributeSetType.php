<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListOfAttributeSetType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ListOfAttributeSetType extends AbstractStructBase
{
    /**
     * The AttributeSet
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \PayPal\StructType\AttributeSetType[]
     */
    public $AttributeSet;
    /**
     * Constructor method for ListOfAttributeSetType
     * @uses ListOfAttributeSetType::setAttributeSet()
     * @param \PayPal\StructType\AttributeSetType[] $attributeSet
     */
    public function __construct(array $attributeSet = array())
    {
        $this
            ->setAttributeSet($attributeSet);
    }
    /**
     * Get AttributeSet value
     * @return \PayPal\StructType\AttributeSetType[]|null
     */
    public function getAttributeSet()
    {
        return $this->AttributeSet;
    }
    /**
     * Set AttributeSet value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AttributeSetType[] $attributeSet
     * @return \PayPal\StructType\ListOfAttributeSetType
     */
    public function setAttributeSet(array $attributeSet = array())
    {
        foreach ($attributeSet as $listOfAttributeSetTypeAttributeSetItem) {
            // validation for constraint: itemType
            if (!$listOfAttributeSetTypeAttributeSetItem instanceof \PayPal\StructType\AttributeSetType) {
                throw new \InvalidArgumentException(sprintf('The AttributeSet property can only contain items of \PayPal\StructType\AttributeSetType, "%s" given', is_object($listOfAttributeSetTypeAttributeSetItem) ? get_class($listOfAttributeSetTypeAttributeSetItem) : gettype($listOfAttributeSetTypeAttributeSetItem)), __LINE__);
            }
        }
        $this->AttributeSet = $attributeSet;
        return $this;
    }
    /**
     * Add item to AttributeSet value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AttributeSetType $item
     * @return \PayPal\StructType\ListOfAttributeSetType
     */
    public function addToAttributeSet(\PayPal\StructType\AttributeSetType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\AttributeSetType) {
            throw new \InvalidArgumentException(sprintf('The AttributeSet property can only contain items of \PayPal\StructType\AttributeSetType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AttributeSet[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ListOfAttributeSetType
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
