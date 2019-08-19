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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1000
     * - minOccurs: 0
     * @var \PayPal\StructType\IncentiveDetailType[]
     */
    public $IncentiveDetails;
    /**
     * The RequestId
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setIncentiveDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIncentiveDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncentiveDetailsForArrayConstraintsFromSetIncentiveDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIncentiveEvaluationResponseDetailsTypeIncentiveDetailsItem) {
            // validation for constraint: itemType
            if (!$getIncentiveEvaluationResponseDetailsTypeIncentiveDetailsItem instanceof \PayPal\StructType\IncentiveDetailType) {
                $invalidValues[] = is_object($getIncentiveEvaluationResponseDetailsTypeIncentiveDetailsItem) ? get_class($getIncentiveEvaluationResponseDetailsTypeIncentiveDetailsItem) : sprintf('%s(%s)', gettype($getIncentiveEvaluationResponseDetailsTypeIncentiveDetailsItem), var_export($getIncentiveEvaluationResponseDetailsTypeIncentiveDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IncentiveDetails property can only contain items of type \PayPal\StructType\IncentiveDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set IncentiveDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\IncentiveDetailType[] $incentiveDetails
     * @return \PayPal\StructType\GetIncentiveEvaluationResponseDetailsType
     */
    public function setIncentiveDetails(array $incentiveDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($incentiveDetailsArrayErrorMessage = self::validateIncentiveDetailsForArrayConstraintsFromSetIncentiveDetails($incentiveDetails))) {
            throw new \InvalidArgumentException($incentiveDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($incentiveDetails) && count($incentiveDetails) > 1000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1000', count($incentiveDetails)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The IncentiveDetails property can only contain items of type \PayPal\StructType\IncentiveDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(1000)
        if (is_array($this->IncentiveDetails) && count($this->IncentiveDetails) >= 1000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1000', count($this->IncentiveDetails)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestId, true), gettype($requestId)), __LINE__);
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
