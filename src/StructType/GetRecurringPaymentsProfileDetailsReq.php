<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRecurringPaymentsProfileDetailsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetRecurringPaymentsProfileDetailsReq extends AbstractStructBase
{
    /**
     * The GetRecurringPaymentsProfileDetailsRequest
     * Meta information extracted from the WSDL
     * - ref: ns:GetRecurringPaymentsProfileDetailsRequest
     * @var \PayPal\StructType\GetRecurringPaymentsProfileDetailsRequestType
     */
    public $GetRecurringPaymentsProfileDetailsRequest;
    /**
     * Constructor method for GetRecurringPaymentsProfileDetailsReq
     * @uses GetRecurringPaymentsProfileDetailsReq::setGetRecurringPaymentsProfileDetailsRequest()
     * @param \PayPal\StructType\GetRecurringPaymentsProfileDetailsRequestType $getRecurringPaymentsProfileDetailsRequest
     */
    public function __construct(\PayPal\StructType\GetRecurringPaymentsProfileDetailsRequestType $getRecurringPaymentsProfileDetailsRequest = null)
    {
        $this
            ->setGetRecurringPaymentsProfileDetailsRequest($getRecurringPaymentsProfileDetailsRequest);
    }
    /**
     * Get GetRecurringPaymentsProfileDetailsRequest value
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsRequestType|null
     */
    public function getGetRecurringPaymentsProfileDetailsRequest()
    {
        return $this->GetRecurringPaymentsProfileDetailsRequest;
    }
    /**
     * Set GetRecurringPaymentsProfileDetailsRequest value
     * @param \PayPal\StructType\GetRecurringPaymentsProfileDetailsRequestType $getRecurringPaymentsProfileDetailsRequest
     * @return \PayPal\StructType\GetRecurringPaymentsProfileDetailsReq
     */
    public function setGetRecurringPaymentsProfileDetailsRequest(\PayPal\StructType\GetRecurringPaymentsProfileDetailsRequestType $getRecurringPaymentsProfileDetailsRequest = null)
    {
        $this->GetRecurringPaymentsProfileDetailsRequest = $getRecurringPaymentsProfileDetailsRequest;
        return $this;
    }
}
