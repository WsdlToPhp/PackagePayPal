<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIncentiveEvaluationResponseDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetIncentiveEvaluationResponseDetailsType extends AbstractStructBase
{
    /**
     * The IncentiveDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var \PayPal\StructType\IncentiveDetailType[]
     */
    public $IncentiveDetails;
    /**
     * The RequestId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RequestId;
    /**
     * Constructor method for GetIncentiveEvaluationResponseDetailsType
     * @uses GetIncentiveEvaluationResponseDetailsType::setIncentiveDetails()
     * @uses GetIncentiveEvaluationResponseDetailsType::setRequestId()
     * @param \PayPal\StructType\IncentiveDetailType[] $incentiveDetails
     * @param string $requestId
     */
    public function __construct(array $incentiveDetails = array(), $requestId = null)
    {
        $this
            ->setIncentiveDetails($incentiveDetails)
            ->setRequestId($requestId);
    }
    /**
     * Get IncentiveDetails value
     * @return \PayPal\StructType\IncentiveDetailType[]|null
     */
    public function getIncentiveDetails()
    {
        return $this->IncentiveDetails;
    }
    /**
     * Set IncentiveDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveDetailType[] $incentiveDetails
     * @return \PayPal\StructType\GetIncentiveEvaluationResponseDetailsType
     */
    public function setIncentiveDetails(array $incentiveDetails = array())
    {
        foreach ($incentiveDetails as $getIncentiveEvaluationResponseDetailsTypeIncentiveDetailsItem) {
            // validation for constraint: itemType
            if (!$getIncentiveEvaluationResponseDetailsTypeIncentiveDetailsItem instanceof \PayPal\StructType\IncentiveDetailType) {
                throw new \InvalidArgumentException(sprintf('The IncentiveDetails property can only contain items of \PayPal\StructType\IncentiveDetailType, "%s" given', is_object($getIncentiveEvaluationResponseDetailsTypeIncentiveDetailsItem) ? get_class($getIncentiveEvaluationResponseDetailsTypeIncentiveDetailsItem) : gettype($getIncentiveEvaluationResponseDetailsTypeIncentiveDetailsItem)), __LINE__);
            }
        }
        $this->IncentiveDetails = $incentiveDetails;
        return $this;
    }
    /**
     * Add item to IncentiveDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveDetailType $item
     * @return \PayPal\StructType\GetIncentiveEvaluationResponseDetailsType
     */
    public function addToIncentiveDetails(\PayPal\StructType\IncentiveDetailType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\IncentiveDetailType) {
            throw new \InvalidArgumentException(sprintf('The IncentiveDetails property can only contain items of \PayPal\StructType\IncentiveDetailType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->IncentiveDetails[] = $item;
        return $this;
    }
    /**
     * Get RequestId value
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->RequestId;
    }
    /**
     * Set RequestId value
     * @param string $requestId
     * @return \PayPal\StructType\GetIncentiveEvaluationResponseDetailsType
     */
    public function setRequestId($requestId = null)
    {
        // validation for constraint: string
        if (!is_null($requestId) && !is_string($requestId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestId)), __LINE__);
        }
        $this->RequestId = $requestId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetIncentiveEvaluationResponseDetailsType
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
