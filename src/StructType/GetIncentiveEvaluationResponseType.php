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
}
