<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAuthDetailsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetAuthDetailsReq extends AbstractStructBase
{
    /**
     * The GetAuthDetailsRequest
     * Meta information extracted from the WSDL
     * - ref: ns:GetAuthDetailsRequest
     * @var \PayPal\StructType\GetAuthDetailsRequestType
     */
    public $GetAuthDetailsRequest;
    /**
     * Constructor method for GetAuthDetailsReq
     * @uses GetAuthDetailsReq::setGetAuthDetailsRequest()
     * @param \PayPal\StructType\GetAuthDetailsRequestType $getAuthDetailsRequest
     */
    public function __construct(\PayPal\StructType\GetAuthDetailsRequestType $getAuthDetailsRequest = null)
    {
        $this
            ->setGetAuthDetailsRequest($getAuthDetailsRequest);
    }
    /**
     * Get GetAuthDetailsRequest value
     * @return \PayPal\StructType\GetAuthDetailsRequestType|null
     */
    public function getGetAuthDetailsRequest()
    {
        return $this->GetAuthDetailsRequest;
    }
    /**
     * Set GetAuthDetailsRequest value
     * @param \PayPal\StructType\GetAuthDetailsRequestType $getAuthDetailsRequest
     * @return \PayPal\StructType\GetAuthDetailsReq
     */
    public function setGetAuthDetailsRequest(\PayPal\StructType\GetAuthDetailsRequestType $getAuthDetailsRequest = null)
    {
        $this->GetAuthDetailsRequest = $getAuthDetailsRequest;
        return $this;
    }
}
