<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MerchantDataType StructType
 * Meta information extracted from the WSDL
 * - documentation: This holds all key-value pairs which merchants wants to pass it to the open wallet(PLCC) processor.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MerchantDataType extends AbstractStructBase
{
    /**
     * The MerchantDataTuple
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 0
     * @var \PayPal\StructType\TupleType[]
     */
    public $MerchantDataTuple;
    /**
     * Constructor method for MerchantDataType
     * @uses MerchantDataType::setMerchantDataTuple()
     * @param \PayPal\StructType\TupleType[] $merchantDataTuple
     */
    public function __construct(array $merchantDataTuple = array())
    {
        $this
            ->setMerchantDataTuple($merchantDataTuple);
    }
    /**
     * Get MerchantDataTuple value
     * @return \PayPal\StructType\TupleType[]|null
     */
    public function getMerchantDataTuple()
    {
        return $this->MerchantDataTuple;
    }
    /**
     * This method is responsible for validating the values passed to the setMerchantDataTuple method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMerchantDataTuple method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMerchantDataTupleForArrayConstraintsFromSetMerchantDataTuple(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $merchantDataTypeMerchantDataTupleItem) {
            // validation for constraint: itemType
            if (!$merchantDataTypeMerchantDataTupleItem instanceof \PayPal\StructType\TupleType) {
                $invalidValues[] = is_object($merchantDataTypeMerchantDataTupleItem) ? get_class($merchantDataTypeMerchantDataTupleItem) : sprintf('%s(%s)', gettype($merchantDataTypeMerchantDataTupleItem), var_export($merchantDataTypeMerchantDataTupleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MerchantDataTuple property can only contain items of type \PayPal\StructType\TupleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MerchantDataTuple value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\TupleType[] $merchantDataTuple
     * @return \PayPal\StructType\MerchantDataType
     */
    public function setMerchantDataTuple(array $merchantDataTuple = array())
    {
        // validation for constraint: array
        if ('' !== ($merchantDataTupleArrayErrorMessage = self::validateMerchantDataTupleForArrayConstraintsFromSetMerchantDataTuple($merchantDataTuple))) {
            throw new \InvalidArgumentException($merchantDataTupleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($merchantDataTuple) && count($merchantDataTuple) > 16) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 16', count($merchantDataTuple)), __LINE__);
        }
        $this->MerchantDataTuple = $merchantDataTuple;
        return $this;
    }
    /**
     * Add item to MerchantDataTuple value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\TupleType $item
     * @return \PayPal\StructType\MerchantDataType
     */
    public function addToMerchantDataTuple(\PayPal\StructType\TupleType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\TupleType) {
            throw new \InvalidArgumentException(sprintf('The MerchantDataTuple property can only contain items of type \PayPal\StructType\TupleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(16)
        if (is_array($this->MerchantDataTuple) && count($this->MerchantDataTuple) >= 16) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 16', count($this->MerchantDataTuple)), __LINE__);
        }
        $this->MerchantDataTuple[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\MerchantDataType
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
