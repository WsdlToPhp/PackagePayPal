<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIncentiveEvaluationRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetIncentiveEvaluationRequestType extends AbstractRequestType
{
    /**
     * The GetIncentiveEvaluationRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:GetIncentiveEvaluationRequestDetails
     * @var \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType
     */
    public $GetIncentiveEvaluationRequestDetails;
    /**
     * Constructor method for GetIncentiveEvaluationRequestType
     * @uses GetIncentiveEvaluationRequestType::setGetIncentiveEvaluationRequestDetails()
     * @param \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType $getIncentiveEvaluationRequestDetails
     */
    public function __construct(\PayPal\StructType\GetIncentiveEvaluationRequestDetailsType $getIncentiveEvaluationRequestDetails = null)
    {
        $this
            ->setGetIncentiveEvaluationRequestDetails($getIncentiveEvaluationRequestDetails);
    }
    /**
     * Get GetIncentiveEvaluationRequestDetails value
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType
     */
    public function getGetIncentiveEvaluationRequestDetails()
    {
        return $this->GetIncentiveEvaluationRequestDetails;
    }
    /**
     * Set GetIncentiveEvaluationRequestDetails value
     * @param \PayPal\StructType\GetIncentiveEvaluationRequestDetailsType $getIncentiveEvaluationRequestDetails
     * @return \PayPal\StructType\GetIncentiveEvaluationRequestType
     */
    public function setGetIncentiveEvaluationRequestDetails(\PayPal\StructType\GetIncentiveEvaluationRequestDetailsType $getIncentiveEvaluationRequestDetails = null)
    {
        $this->GetIncentiveEvaluationRequestDetails = $getIncentiveEvaluationRequestDetails;
        return $this;
    }
}
