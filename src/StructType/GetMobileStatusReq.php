<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMobileStatusReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetMobileStatusReq extends AbstractStructBase
{
    /**
     * The GetMobileStatusRequest
     * Meta information extracted from the WSDL
     * - ref: ns:GetMobileStatusRequest
     * @var \PayPal\StructType\GetMobileStatusRequestType
     */
    public $GetMobileStatusRequest;
    /**
     * Constructor method for GetMobileStatusReq
     * @uses GetMobileStatusReq::setGetMobileStatusRequest()
     * @param \PayPal\StructType\GetMobileStatusRequestType $getMobileStatusRequest
     */
    public function __construct(\PayPal\StructType\GetMobileStatusRequestType $getMobileStatusRequest = null)
    {
        $this
            ->setGetMobileStatusRequest($getMobileStatusRequest);
    }
    /**
     * Get GetMobileStatusRequest value
     * @return \PayPal\StructType\GetMobileStatusRequestType|null
     */
    public function getGetMobileStatusRequest()
    {
        return $this->GetMobileStatusRequest;
    }
    /**
     * Set GetMobileStatusRequest value
     * @param \PayPal\StructType\GetMobileStatusRequestType $getMobileStatusRequest
     * @return \PayPal\StructType\GetMobileStatusReq
     */
    public function setGetMobileStatusRequest(\PayPal\StructType\GetMobileStatusRequestType $getMobileStatusRequest = null)
    {
        $this->GetMobileStatusRequest = $getMobileStatusRequest;
        return $this;
    }
}
