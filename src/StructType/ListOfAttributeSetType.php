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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setAttributeSet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttributeSet method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeSetForArrayConstraintsFromSetAttributeSet(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $listOfAttributeSetTypeAttributeSetItem) {
            // validation for constraint: itemType
            if (!$listOfAttributeSetTypeAttributeSetItem instanceof \PayPal\StructType\AttributeSetType) {
                $invalidValues[] = is_object($listOfAttributeSetTypeAttributeSetItem) ? get_class($listOfAttributeSetTypeAttributeSetItem) : sprintf('%s(%s)', gettype($listOfAttributeSetTypeAttributeSetItem), var_export($listOfAttributeSetTypeAttributeSetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AttributeSet property can only contain items of type \PayPal\StructType\AttributeSetType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AttributeSet value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AttributeSetType[] $attributeSet
     * @return \PayPal\StructType\ListOfAttributeSetType
     */
    public function setAttributeSet(array $attributeSet = array())
    {
        // validation for constraint: array
        if ('' !== ($attributeSetArrayErrorMessage = self::validateAttributeSetForArrayConstraintsFromSetAttributeSet($attributeSet))) {
            throw new \InvalidArgumentException($attributeSetArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The AttributeSet property can only contain items of type \PayPal\StructType\AttributeSetType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
