<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIncentiveEvaluationResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetIncentiveEvaluationResponseType extends AbstractResponseType
{
    /**
     * The GetIncentiveEvaluationResponseDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:GetIncentiveEvaluationResponseDetails
     * @var \PayPal\StructType\GetIncentiveEvaluationResponseDetailsType
     */
    public $GetIncentiveEvaluationResponseDetails;
    /**
     * Constructor method for GetIncentiveEvaluationResponseType
     * @uses GetIncentiveEvaluationResponseType::setGetIncentiveEvaluationResponseDetails()
     * @param \PayPal\StructType\GetIncentiveEvaluationResponseDetailsType $getIncentiveEvaluationResponseDetails
     */
    public function __construct(\PayPal\StructType\GetIncentiveEvaluationResponseDetailsType $getIncentiveEvaluationResponseDetails = null)
    {
        $this
            ->setGetIncentiveEvaluationResponseDetails($getIncentiveEvaluationResponseDetails);
    }
    /**
     * Get GetIncentiveEvaluationResponseDetails value
     * @return \PayPal\StructType\GetIncentiveEvaluationResponseDetailsType
     */
    public function getGetIncentiveEvaluationResponseDetails()
    {
        return $this->GetIncentiveEvaluationResponseDetails;
    }
    /**
     * Set GetIncentiveEvaluationResponseDetails value
     * @param \PayPal\StructType\GetIncentiveEvaluationResponseDetailsType $getIncentiveEvaluationResponseDetails
     * @return \PayPal\StructType\GetIncentiveEvaluationResponseType
     */
    public function setGetIncentiveEvaluationResponseDetails(\PayPal\StructType\GetIncentiveEvaluationResponseDetailsType $getIncentiveEvaluationResponseDetails = null)
    {
        $this->GetIncentiveEvaluationResponseDetails = $getIncentiveEvaluationResponseDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetIncentiveEvaluationResponseType
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
