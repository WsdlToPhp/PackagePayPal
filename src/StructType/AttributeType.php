<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Specific physical attribute of an item.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AttributeType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: ValueList of the Attribute being described by the AttributeID.
     * - maxOccurs: unbounded
     * @var \PayPal\StructType\ValType[]
     */
    public $Value;
    /**
     * The AttributeID
     * Meta information extracted from the WSDL
     * - documentation: Constant name of the attribute that identifies a physical attribute within a set of characteristics that describe something in a formalised way.
     * @var string
     */
    public $AttributeID;
    /**
     * Constructor method for AttributeType
     * @uses AttributeType::setValue()
     * @uses AttributeType::setAttributeID()
     * @param \PayPal\StructType\ValType[] $value
     * @param string $attributeID
     */
    public function __construct(array $value = array(), $attributeID = null)
    {
        $this
            ->setValue($value)
            ->setAttributeID($attributeID);
    }
    /**
     * Get Value value
     * @return \PayPal\StructType\ValType[]|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * This method is responsible for validating the values passed to the setValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueForArrayConstraintsFromSetValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $attributeTypeValueItem) {
            // validation for constraint: itemType
            if (!$attributeTypeValueItem instanceof \PayPal\StructType\ValType) {
                $invalidValues[] = is_object($attributeTypeValueItem) ? get_class($attributeTypeValueItem) : sprintf('%s(%s)', gettype($attributeTypeValueItem), var_export($attributeTypeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Value property can only contain items of type \PayPal\StructType\ValType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Value value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ValType[] $value
     * @return \PayPal\StructType\AttributeType
     */
    public function setValue(array $value = array())
    {
        // validation for constraint: array
        if ('' !== ($valueArrayErrorMessage = self::validateValueForArrayConstraintsFromSetValue($value))) {
            throw new \InvalidArgumentException($valueArrayErrorMessage, __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Add item to Value value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ValType $item
     * @return \PayPal\StructType\AttributeType
     */
    public function addToValue(\PayPal\StructType\ValType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\ValType) {
            throw new \InvalidArgumentException(sprintf('The Value property can only contain items of type \PayPal\StructType\ValType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Value[] = $item;
        return $this;
    }
    /**
     * Get AttributeID value
     * @return string|null
     */
    public function getAttributeID()
    {
        return $this->AttributeID;
    }
    /**
     * Set AttributeID value
     * @param string $attributeID
     * @return \PayPal\StructType\AttributeType
     */
    public function setAttributeID($attributeID = null)
    {
        // validation for constraint: string
        if (!is_null($attributeID) && !is_string($attributeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeID, true), gettype($attributeID)), __LINE__);
        }
        $this->AttributeID = $attributeID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AttributeType
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
