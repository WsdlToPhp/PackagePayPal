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
     * Meta information extracted from the WSDL
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
}
