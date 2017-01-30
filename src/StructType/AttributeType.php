<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specific physical attribute of an item.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AttributeType extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - documentation: ValueList of the Attribute being described by the AttributeID.
     * - maxOccurs: unbounded
     * @var \PayPal\StructType\ValType[]
     */
    public $Value;
    /**
     * The AttributeID
     * Meta informations extracted from the WSDL
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
     * Set Value value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\ValType[] $value
     * @return \PayPal\StructType\AttributeType
     */
    public function setValue(array $value = array())
    {
        foreach ($value as $attributeTypeValueItem) {
            // validation for constraint: itemType
            if (!$attributeTypeValueItem instanceof \PayPal\StructType\ValType) {
                throw new \InvalidArgumentException(sprintf('The Value property can only contain items of \PayPal\StructType\ValType, "%s" given', is_object($attributeTypeValueItem) ? get_class($attributeTypeValueItem) : gettype($attributeTypeValueItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The Value property can only contain items of \PayPal\StructType\ValType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attributeID)), __LINE__);
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
