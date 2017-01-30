<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIncentiveEvaluationRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetIncentiveEvaluationRequestDetailsType extends AbstractStructBase
{
    /**
     * The ExternalBuyerId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalBuyerId;
    /**
     * The IncentiveCodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var string[]
     */
    public $IncentiveCodes;
    /**
     * The ApplyIndication
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var \PayPal\StructType\IncentiveApplyIndicationType[]
     */
    public $ApplyIndication;
    /**
     * The Buckets
     * Meta informations extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \PayPal\StructType\IncentiveBucketType[]
     */
    public $Buckets;
    /**
     * The CartTotalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $CartTotalAmt;
    /**
     * The RequestDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\IncentiveRequestDetailsType
     */
    public $RequestDetails;
    /**
     * Constructor method for GetIncentiveEvaluationRequestDetailsType
     * @uses GetIncentiveEvaluationRequestDetailsType::setExternalBuyerId()
     * @uses GetIncentiveEvaluationRequestDetailsType::setIncentiveCodes()
     * @uses GetIncentiveEvaluationRequestDetailsType::setApplyIndication()
     * @uses GetIncentiveEvaluationRequestDetailsType::setBuckets()
     * @uses GetIncentiveEvaluationRequestDetailsType::setCartTotalAmt()
     * @uses GetIncentiveEvaluationRequestDetailsType::setRequestDetails()
     * @param string $externalBuyerId
     * @param string[] $incentiveCodes
     * @param \PayPal\StructType\IncentiveApplyIndicationType[] $applyIndication
     * @param \PayPal\StructType\IncentiveBucketType[] $buckets
     * @param \PayPal\StructType\BasicAmountType $cartTotalAmt
     * @param \PayPal\StructType\IncentiveRequestDetailsType $requestDetails
     */
    public function __construct($externalBuyerId = null, array $incentiveCodes = array(), array $applyIndication = array(), array $buckets = array(), \PayPal\StructType\BasicAmountType $cartTotalAmt = null, \PayPal\StructType\IncentiveRequestDetailsType $requestDetails = null)
    {
        $this
            ->setExternalBuyerId($externalBuyerId)
            ->setIncentiveCodes($incentiveCodes)
            ->setApplyIndication($applyIndication)
            ->setBuckets($buckets)
            ->setCartTotalAmt($cartTotalAmt)
            ->setRequestDetails($requestDetails);
    }
    /**
     * Get ExternalBuyerId value
     * @return string|null
     */
    public function getExternalBuyerId()
    {
        return $this->ExternalBuyerId;
    }
    /**
     * Set ExternalBuyerId value
     * @param string $externalBuyerId
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType
     */
    public function setExternalBuyerId($externalBuyerId = null)
    {
        // validation for constraint: string
        if (!is_null($externalBuyerId) && !is_string($externalBuyerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($externalBuyerId)), __LINE__);
        }
        $this->ExternalBuyerId = $externalBuyerId;
        return $this;
    }
    /**
     * Get IncentiveCodes value
     * @return string[]|null
     */
    public function getIncentiveCodes()
    {
        return $this->IncentiveCodes;
    }
    /**
     * Set IncentiveCodes value
     * @throws \InvalidArgumentException
     * @param string[] $incentiveCodes
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType
     */
    public function setIncentiveCodes(array $incentiveCodes = array())
    {
        foreach ($incentiveCodes as $getIncentiveEvaluationRequestDetailsTypeIncentiveCodesItem) {
            // validation for constraint: itemType
            if (!is_string($getIncentiveEvaluationRequestDetailsTypeIncentiveCodesItem)) {
                throw new \InvalidArgumentException(sprintf('The IncentiveCodes property can only contain items of string, "%s" given', is_object($getIncentiveEvaluationRequestDetailsTypeIncentiveCodesItem) ? get_class($getIncentiveEvaluationRequestDetailsTypeIncentiveCodesItem) : gettype($getIncentiveEvaluationRequestDetailsTypeIncentiveCodesItem)), __LINE__);
            }
        }
        $this->IncentiveCodes = $incentiveCodes;
        return $this;
    }
    /**
     * Add item to IncentiveCodes value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType
     */
    public function addToIncentiveCodes($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The IncentiveCodes property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->IncentiveCodes[] = $item;
        return $this;
    }
    /**
     * Get ApplyIndication value
     * @return \PayPal\StructType\IncentiveApplyIndicationType[]|null
     */
    public function getApplyIndication()
    {
        return $this->ApplyIndication;
    }
    /**
     * Set ApplyIndication value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveApplyIndicationType[] $applyIndication
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType
     */
    public function setApplyIndication(array $applyIndication = array())
    {
        foreach ($applyIndication as $getIncentiveEvaluationRequestDetailsTypeApplyIndicationItem) {
            // validation for constraint: itemType
            if (!$getIncentiveEvaluationRequestDetailsTypeApplyIndicationItem instanceof \PayPal\StructType\IncentiveApplyIndicationType) {
                throw new \InvalidArgumentException(sprintf('The ApplyIndication property can only contain items of \PayPal\StructType\IncentiveApplyIndicationType, "%s" given', is_object($getIncentiveEvaluationRequestDetailsTypeApplyIndicationItem) ? get_class($getIncentiveEvaluationRequestDetailsTypeApplyIndicationItem) : gettype($getIncentiveEvaluationRequestDetailsTypeApplyIndicationItem)), __LINE__);
            }
        }
        $this->ApplyIndication = $applyIndication;
        return $this;
    }
    /**
     * Add item to ApplyIndication value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveApplyIndicationType $item
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType
     */
    public function addToApplyIndication(\PayPal\StructType\IncentiveApplyIndicationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\IncentiveApplyIndicationType) {
            throw new \InvalidArgumentException(sprintf('The ApplyIndication property can only contain items of \PayPal\StructType\IncentiveApplyIndicationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ApplyIndication[] = $item;
        return $this;
    }
    /**
     * Get Buckets value
     * @return \PayPal\StructType\IncentiveBucketType[]|null
     */
    public function getBuckets()
    {
        return $this->Buckets;
    }
    /**
     * Set Buckets value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveBucketType[] $buckets
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType
     */
    public function setBuckets(array $buckets = array())
    {
        foreach ($buckets as $getIncentiveEvaluationRequestDetailsTypeBucketsItem) {
            // validation for constraint: itemType
            if (!$getIncentiveEvaluationRequestDetailsTypeBucketsItem instanceof \PayPal\StructType\IncentiveBucketType) {
                throw new \InvalidArgumentException(sprintf('The Buckets property can only contain items of \PayPal\StructType\IncentiveBucketType, "%s" given', is_object($getIncentiveEvaluationRequestDetailsTypeBucketsItem) ? get_class($getIncentiveEvaluationRequestDetailsTypeBucketsItem) : gettype($getIncentiveEvaluationRequestDetailsTypeBucketsItem)), __LINE__);
            }
        }
        $this->Buckets = $buckets;
        return $this;
    }
    /**
     * Add item to Buckets value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveBucketType $item
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType
     */
    public function addToBuckets(\PayPal\StructType\IncentiveBucketType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\IncentiveBucketType) {
            throw new \InvalidArgumentException(sprintf('The Buckets property can only contain items of \PayPal\StructType\IncentiveBucketType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Buckets[] = $item;
        return $this;
    }
    /**
     * Get CartTotalAmt value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getCartTotalAmt()
    {
        return $this->CartTotalAmt;
    }
    /**
     * Set CartTotalAmt value
     * @param \PayPal\StructType\BasicAmountType $cartTotalAmt
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType
     */
    public function setCartTotalAmt(\PayPal\StructType\BasicAmountType $cartTotalAmt = null)
    {
        $this->CartTotalAmt = $cartTotalAmt;
        return $this;
    }
    /**
     * Get RequestDetails value
     * @return \PayPal\StructType\IncentiveRequestDetailsType|null
     */
    public function getRequestDetails()
    {
        return $this->RequestDetails;
    }
    /**
     * Set RequestDetails value
     * @param \PayPal\StructType\IncentiveRequestDetailsType $requestDetails
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType
     */
    public function setRequestDetails(\PayPal\StructType\IncentiveRequestDetailsType $requestDetails = null)
    {
        $this->RequestDetails = $requestDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType
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
