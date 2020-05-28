<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExpressCheckoutDetailsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetExpressCheckoutDetailsReq extends AbstractStructBase
{
    /**
     * The GetExpressCheckoutDetailsRequest
     * Meta information extracted from the WSDL
     * - ref: ns:GetExpressCheckoutDetailsRequest
     * @var \PayPal\StructType\GetExpressCheckoutDetailsRequestType
     */
    public $GetExpressCheckoutDetailsRequest;
    /**
     * Constructor method for GetExpressCheckoutDetailsReq
     * @uses GetExpressCheckoutDetailsReq::setGetExpressCheckoutDetailsRequest()
     * @param \PayPal\StructType\GetExpressCheckoutDetailsRequestType $getExpressCheckoutDetailsRequest
     */
    public function __construct(\PayPal\StructType\GetExpressCheckoutDetailsRequestType $getExpressCheckoutDetailsRequest = null)
    {
        $this
            ->setGetExpressCheckoutDetailsRequest($getExpressCheckoutDetailsRequest);
    }
    /**
     * Get GetExpressCheckoutDetailsRequest value
     * @return \PayPal\StructType\GetExpressCheckoutDetailsRequestType|null
     */
    public function getGetExpressCheckoutDetailsRequest()
    {
        return $this->GetExpressCheckoutDetailsRequest;
    }
    /**
     * Set GetExpressCheckoutDetailsRequest value
     * @param \PayPal\StructType\GetExpressCheckoutDetailsRequestType $getExpressCheckoutDetailsRequest
     * @return \PayPal\StructType\GetExpressCheckoutDetailsReq
     */
    public function setGetExpressCheckoutDetailsRequest(\PayPal\StructType\GetExpressCheckoutDetailsRequestType $getExpressCheckoutDetailsRequest = null)
    {
        $this->GetExpressCheckoutDetailsRequest = $getExpressCheckoutDetailsRequest;
        return $this;
    }
}
