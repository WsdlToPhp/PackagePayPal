<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributeSetType StructType
 * Meta informations extracted from the WSDL
 * - documentation: AttributeSet.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AttributeSetType extends AbstractStructBase
{
    /**
     * The Attribute
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \PayPal\StructType\AttributeType[]
     */
    public $Attribute;
    /**
     * The AttributeSetID
     * @var string
     */
    public $AttributeSetID;
    /**
     * Constructor method for AttributeSetType
     * @uses AttributeSetType::setAttribute()
     * @uses AttributeSetType::setAttributeSetID()
     * @param \PayPal\StructType\AttributeType[] $attribute
     * @param string $attributeSetID
     */
    public function __construct(array $attribute = array(), $attributeSetID = null)
    {
        $this
            ->setAttribute($attribute)
            ->setAttributeSetID($attributeSetID);
    }
    /**
     * Get Attribute value
     * @return \PayPal\StructType\AttributeType[]|null
     */
    public function getAttribute()
    {
        return $this->Attribute;
    }
    /**
     * Set Attribute value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AttributeType[] $attribute
     * @return \PayPal\StructType\AttributeSetType
     */
    public function setAttribute(array $attribute = array())
    {
        foreach ($attribute as $attributeSetTypeAttributeItem) {
            // validation for constraint: itemType
            if (!$attributeSetTypeAttributeItem instanceof \PayPal\StructType\AttributeType) {
                throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of \PayPal\StructType\AttributeType, "%s" given', is_object($attributeSetTypeAttributeItem) ? get_class($attributeSetTypeAttributeItem) : gettype($attributeSetTypeAttributeItem)), __LINE__);
            }
        }
        $this->Attribute = $attribute;
        return $this;
    }
    /**
     * Add item to Attribute value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AttributeType $item
     * @return \PayPal\StructType\AttributeSetType
     */
    public function addToAttribute(\PayPal\StructType\AttributeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\AttributeType) {
            throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of \PayPal\StructType\AttributeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Attribute[] = $item;
        return $this;
    }
    /**
     * Get AttributeSetID value
     * @return string|null
     */
    public function getAttributeSetID()
    {
        return $this->AttributeSetID;
    }
    /**
     * Set AttributeSetID value
     * @param string $attributeSetID
     * @return \PayPal\StructType\AttributeSetType
     */
    public function setAttributeSetID($attributeSetID = null)
    {
        // validation for constraint: string
        if (!is_null($attributeSetID) && !is_string($attributeSetID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($attributeSetID)), __LINE__);
        }
        $this->AttributeSetID = $attributeSetID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AttributeSetType
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
