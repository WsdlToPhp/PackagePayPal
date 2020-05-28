<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBalanceReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetBalanceReq extends AbstractStructBase
{
    /**
     * The GetBalanceRequest
     * Meta information extracted from the WSDL
     * - ref: ns:GetBalanceRequest
     * @var \PayPal\StructType\GetBalanceRequestType
     */
    public $GetBalanceRequest;
    /**
     * Constructor method for GetBalanceReq
     * @uses GetBalanceReq::setGetBalanceRequest()
     * @param \PayPal\StructType\GetBalanceRequestType $getBalanceRequest
     */
    public function __construct(\PayPal\StructType\GetBalanceRequestType $getBalanceRequest = null)
    {
        $this
            ->setGetBalanceRequest($getBalanceRequest);
    }
    /**
     * Get GetBalanceRequest value
     * @return \PayPal\StructType\GetBalanceRequestType|null
     */
    public function getGetBalanceRequest()
    {
        return $this->GetBalanceRequest;
    }
    /**
     * Set GetBalanceRequest value
     * @param \PayPal\StructType\GetBalanceRequestType $getBalanceRequest
     * @return \PayPal\StructType\GetBalanceReq
     */
    public function setGetBalanceRequest(\PayPal\StructType\GetBalanceRequestType $getBalanceRequest = null)
    {
        $this->GetBalanceRequest = $getBalanceRequest;
        return $this;
    }
}
