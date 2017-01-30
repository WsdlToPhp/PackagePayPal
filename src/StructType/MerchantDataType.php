<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MerchantDataType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This holds all key-value pairs which merchants wants to pass it to the open wallet(PLCC) processor.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MerchantDataType extends AbstractStructBase
{
    /**
     * The MerchantDataTuple
     * Meta informations extracted from the WSDL
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
     * Set MerchantDataTuple value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\TupleType[] $merchantDataTuple
     * @return \PayPal\StructType\MerchantDataType
     */
    public function setMerchantDataTuple(array $merchantDataTuple = array())
    {
        foreach ($merchantDataTuple as $merchantDataTypeMerchantDataTupleItem) {
            // validation for constraint: itemType
            if (!$merchantDataTypeMerchantDataTupleItem instanceof \PayPal\StructType\TupleType) {
                throw new \InvalidArgumentException(sprintf('The MerchantDataTuple property can only contain items of \PayPal\StructType\TupleType, "%s" given', is_object($merchantDataTypeMerchantDataTupleItem) ? get_class($merchantDataTypeMerchantDataTupleItem) : gettype($merchantDataTypeMerchantDataTupleItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The MerchantDataTuple property can only contain items of \PayPal\StructType\TupleType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
