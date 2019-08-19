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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExternalBuyerId;
    /**
     * The IncentiveCodes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var string[]
     */
    public $IncentiveCodes;
    /**
     * The ApplyIndication
     * Meta information extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var \PayPal\StructType\IncentiveApplyIndicationType[]
     */
    public $ApplyIndication;
    /**
     * The Buckets
     * Meta information extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \PayPal\StructType\IncentiveBucketType[]
     */
    public $Buckets;
    /**
     * The CartTotalAmt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $CartTotalAmt;
    /**
     * The RequestDetails
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalBuyerId, true), gettype($externalBuyerId)), __LINE__);
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
     * This method is responsible for validating the values passed to the setIncentiveCodes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIncentiveCodes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncentiveCodesForArrayConstraintsFromSetIncentiveCodes(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIncentiveEvaluationRequestDetailsTypeIncentiveCodesItem) {
            // validation for constraint: itemType
            if (!is_string($getIncentiveEvaluationRequestDetailsTypeIncentiveCodesItem)) {
                $invalidValues[] = is_object($getIncentiveEvaluationRequestDetailsTypeIncentiveCodesItem) ? get_class($getIncentiveEvaluationRequestDetailsTypeIncentiveCodesItem) : sprintf('%s(%s)', gettype($getIncentiveEvaluationRequestDetailsTypeIncentiveCodesItem), var_export($getIncentiveEvaluationRequestDetailsTypeIncentiveCodesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IncentiveCodes property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set IncentiveCodes value
     * @throws \InvalidArgumentException
     * @param string[] $incentiveCodes
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType
     */
    public function setIncentiveCodes(array $incentiveCodes = array())
    {
        // validation for constraint: array
        if ('' !== ($incentiveCodesArrayErrorMessage = self::validateIncentiveCodesForArrayConstraintsFromSetIncentiveCodes($incentiveCodes))) {
            throw new \InvalidArgumentException($incentiveCodesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($incentiveCodes) && count($incentiveCodes) > 1000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1000', count($incentiveCodes)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The IncentiveCodes property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($this->IncentiveCodes) && count($this->IncentiveCodes) >= 1000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1000', count($this->IncentiveCodes)), __LINE__);
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
     * This method is responsible for validating the values passed to the setApplyIndication method
     * This method is willingly generated in order to preserve the one-line inline validation within the setApplyIndication method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateApplyIndicationForArrayConstraintsFromSetApplyIndication(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIncentiveEvaluationRequestDetailsTypeApplyIndicationItem) {
            // validation for constraint: itemType
            if (!$getIncentiveEvaluationRequestDetailsTypeApplyIndicationItem instanceof \PayPal\StructType\IncentiveApplyIndicationType) {
                $invalidValues[] = is_object($getIncentiveEvaluationRequestDetailsTypeApplyIndicationItem) ? get_class($getIncentiveEvaluationRequestDetailsTypeApplyIndicationItem) : sprintf('%s(%s)', gettype($getIncentiveEvaluationRequestDetailsTypeApplyIndicationItem), var_export($getIncentiveEvaluationRequestDetailsTypeApplyIndicationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ApplyIndication property can only contain items of type \PayPal\StructType\IncentiveApplyIndicationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ApplyIndication value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveApplyIndicationType[] $applyIndication
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType
     */
    public function setApplyIndication(array $applyIndication = array())
    {
        // validation for constraint: array
        if ('' !== ($applyIndicationArrayErrorMessage = self::validateApplyIndicationForArrayConstraintsFromSetApplyIndication($applyIndication))) {
            throw new \InvalidArgumentException($applyIndicationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($applyIndication) && count($applyIndication) > 1000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1000', count($applyIndication)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The ApplyIndication property can only contain items of type \PayPal\StructType\IncentiveApplyIndicationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($this->ApplyIndication) && count($this->ApplyIndication) >= 1000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1000', count($this->ApplyIndication)), __LINE__);
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
     * This method is responsible for validating the values passed to the setBuckets method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBuckets method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBucketsForArrayConstraintsFromSetBuckets(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIncentiveEvaluationRequestDetailsTypeBucketsItem) {
            // validation for constraint: itemType
            if (!$getIncentiveEvaluationRequestDetailsTypeBucketsItem instanceof \PayPal\StructType\IncentiveBucketType) {
                $invalidValues[] = is_object($getIncentiveEvaluationRequestDetailsTypeBucketsItem) ? get_class($getIncentiveEvaluationRequestDetailsTypeBucketsItem) : sprintf('%s(%s)', gettype($getIncentiveEvaluationRequestDetailsTypeBucketsItem), var_export($getIncentiveEvaluationRequestDetailsTypeBucketsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Buckets property can only contain items of type \PayPal\StructType\IncentiveBucketType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Buckets value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveBucketType[] $buckets
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType
     */
    public function setBuckets(array $buckets = array())
    {
        // validation for constraint: array
        if ('' !== ($bucketsArrayErrorMessage = self::validateBucketsForArrayConstraintsFromSetBuckets($buckets))) {
            throw new \InvalidArgumentException($bucketsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($buckets) && count($buckets) > 100) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 100', count($buckets)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Buckets property can only contain items of type \PayPal\StructType\IncentiveBucketType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(100)
        if (is_array($this->Buckets) && count($this->Buckets) >= 100) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 100', count($this->Buckets)), __LINE__);
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
