<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncentiveAppliedToType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IncentiveAppliedToType extends AbstractStructBase
{
    /**
     * The BucketId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BucketId;
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ItemId;
    /**
     * The IncentiveAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $IncentiveAmount;
    /**
     * The SubType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SubType;
    /**
     * Constructor method for IncentiveAppliedToType
     * @uses IncentiveAppliedToType::setBucketId()
     * @uses IncentiveAppliedToType::setItemId()
     * @uses IncentiveAppliedToType::setIncentiveAmount()
     * @uses IncentiveAppliedToType::setSubType()
     * @param string $bucketId
     * @param string $itemId
     * @param \PayPal\StructType\BasicAmountType $incentiveAmount
     * @param string $subType
     */
    public function __construct($bucketId = null, $itemId = null, \PayPal\StructType\BasicAmountType $incentiveAmount = null, $subType = null)
    {
        $this
            ->setBucketId($bucketId)
            ->setItemId($itemId)
            ->setIncentiveAmount($incentiveAmount)
            ->setSubType($subType);
    }
    /**
     * Get BucketId value
     * @return string|null
     */
    public function getBucketId()
    {
        return $this->BucketId;
    }
    /**
     * Set BucketId value
     * @param string $bucketId
     * @return \PayPal\StructType\IncentiveAppliedToType
     */
    public function setBucketId($bucketId = null)
    {
        // validation for constraint: string
        if (!is_null($bucketId) && !is_string($bucketId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bucketId)), __LINE__);
        }
        $this->BucketId = $bucketId;
        return $this;
    }
    /**
     * Get ItemId value
     * @return string|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param string $itemId
     * @return \PayPal\StructType\IncentiveAppliedToType
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: string
        if (!is_null($itemId) && !is_string($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemId)), __LINE__);
        }
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get IncentiveAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getIncentiveAmount()
    {
        return $this->IncentiveAmount;
    }
    /**
     * Set IncentiveAmount value
     * @param \PayPal\StructType\BasicAmountType $incentiveAmount
     * @return \PayPal\StructType\IncentiveAppliedToType
     */
    public function setIncentiveAmount(\PayPal\StructType\BasicAmountType $incentiveAmount = null)
    {
        $this->IncentiveAmount = $incentiveAmount;
        return $this;
    }
    /**
     * Get SubType value
     * @return string|null
     */
    public function getSubType()
    {
        return $this->SubType;
    }
    /**
     * Set SubType value
     * @param string $subType
     * @return \PayPal\StructType\IncentiveAppliedToType
     */
    public function setSubType($subType = null)
    {
        // validation for constraint: string
        if (!is_null($subType) && !is_string($subType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subType)), __LINE__);
        }
        $this->SubType = $subType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\IncentiveAppliedToType
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
