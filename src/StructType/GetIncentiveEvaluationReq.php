<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIncentiveEvaluationReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetIncentiveEvaluationReq extends AbstractStructBase
{
    /**
     * The GetIncentiveEvaluationRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:GetIncentiveEvaluationRequest
     * @var \PayPal\StructType\GetIncentiveEvaluationRequestType
     */
    public $GetIncentiveEvaluationRequest;
    /**
     * Constructor method for GetIncentiveEvaluationReq
     * @uses GetIncentiveEvaluationReq::setGetIncentiveEvaluationRequest()
     * @param \PayPal\StructType\GetIncentiveEvaluationRequestType $getIncentiveEvaluationRequest
     */
    public function __construct(\PayPal\StructType\GetIncentiveEvaluationRequestType $getIncentiveEvaluationRequest = null)
    {
        $this
            ->setGetIncentiveEvaluationRequest($getIncentiveEvaluationRequest);
    }
    /**
     * Get GetIncentiveEvaluationRequest value
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestType|null
     */
    public function getGetIncentiveEvaluationRequest()
    {
        return $this->GetIncentiveEvaluationRequest;
    }
    /**
     * Set GetIncentiveEvaluationRequest value
     * @param \PayPal\StructType\GetIncentiveEvaluationRequestType $getIncentiveEvaluationRequest
     * @return \PayPal\StructType\GetIncentiveEvaluationReq
     */
    public function setGetIncentiveEvaluationRequest(\PayPal\StructType\GetIncentiveEvaluationRequestType $getIncentiveEvaluationRequest = null)
    {
        $this->GetIncentiveEvaluationRequest = $getIncentiveEvaluationRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetIncentiveEvaluationReq
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
