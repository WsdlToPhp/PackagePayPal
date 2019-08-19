<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifiedFieldType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ModifiedFieldType extends AbstractStructBase
{
    /**
     * The Field
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Field;
    /**
     * The ModifyType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ModifyType;
    /**
     * Constructor method for ModifiedFieldType
     * @uses ModifiedFieldType::setField()
     * @uses ModifiedFieldType::setModifyType()
     * @param string $field
     * @param string $modifyType
     */
    public function __construct($field = null, $modifyType = null)
    {
        $this
            ->setField($field)
            ->setModifyType($modifyType);
    }
    /**
     * Get Field value
     * @return string|null
     */
    public function getField()
    {
        return $this->Field;
    }
    /**
     * Set Field value
     * @param string $field
     * @return \PayPal\StructType\ModifiedFieldType
     */
    public function setField($field = null)
    {
        // validation for constraint: string
        if (!is_null($field) && !is_string($field)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($field, true), gettype($field)), __LINE__);
        }
        $this->Field = $field;
        return $this;
    }
    /**
     * Get ModifyType value
     * @return string|null
     */
    public function getModifyType()
    {
        return $this->ModifyType;
    }
    /**
     * Set ModifyType value
     * @uses \PayPal\EnumType\ModifyCodeType::valueIsValid()
     * @uses \PayPal\EnumType\ModifyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $modifyType
     * @return \PayPal\StructType\ModifiedFieldType
     */
    public function setModifyType($modifyType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\ModifyCodeType::valueIsValid($modifyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\ModifyCodeType', is_array($modifyType) ? implode(', ', $modifyType) : var_export($modifyType, true), implode(', ', \PayPal\EnumType\ModifyCodeType::getValidValues())), __LINE__);
        }
        $this->ModifyType = $modifyType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ModifiedFieldType
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
