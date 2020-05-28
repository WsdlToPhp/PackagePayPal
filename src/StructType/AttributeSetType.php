<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributeSetType StructType
 * Meta information extracted from the WSDL
 * - documentation: AttributeSet.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AttributeSetType extends AbstractStructBase
{
    /**
     * The Attribute
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeForArrayConstraintsFromSetAttribute(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $attributeSetTypeAttributeItem) {
            // validation for constraint: itemType
            if (!$attributeSetTypeAttributeItem instanceof \PayPal\StructType\AttributeType) {
                $invalidValues[] = is_object($attributeSetTypeAttributeItem) ? get_class($attributeSetTypeAttributeItem) : sprintf('%s(%s)', gettype($attributeSetTypeAttributeItem), var_export($attributeSetTypeAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attribute property can only contain items of type \PayPal\StructType\AttributeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Attribute value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\AttributeType[] $attribute
     * @return \PayPal\StructType\AttributeSetType
     */
    public function setAttribute(array $attribute = array())
    {
        // validation for constraint: array
        if ('' !== ($attributeArrayErrorMessage = self::validateAttributeForArrayConstraintsFromSetAttribute($attribute))) {
            throw new \InvalidArgumentException($attributeArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Attribute property can only contain items of type \PayPal\StructType\AttributeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attributeSetID, true), gettype($attributeSetID)), __LINE__);
        }
        $this->AttributeSetID = $attributeSetID;
        return $this;
    }
}
