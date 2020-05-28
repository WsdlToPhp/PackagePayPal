<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnterBoardingReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EnterBoardingReq extends AbstractStructBase
{
    /**
     * The EnterBoardingRequest
     * Meta information extracted from the WSDL
     * - ref: ns:EnterBoardingRequest
     * @var \PayPal\StructType\EnterBoardingRequestType
     */
    public $EnterBoardingRequest;
    /**
     * Constructor method for EnterBoardingReq
     * @uses EnterBoardingReq::setEnterBoardingRequest()
     * @param \PayPal\StructType\EnterBoardingRequestType $enterBoardingRequest
     */
    public function __construct(\PayPal\StructType\EnterBoardingRequestType $enterBoardingRequest = null)
    {
        $this
            ->setEnterBoardingRequest($enterBoardingRequest);
    }
    /**
     * Get EnterBoardingRequest value
     * @return \PayPal\StructType\EnterBoardingRequestType|null
     */
    public function getEnterBoardingRequest()
    {
        return $this->EnterBoardingRequest;
    }
    /**
     * Set EnterBoardingRequest value
     * @param \PayPal\StructType\EnterBoardingRequestType $enterBoardingRequest
     * @return \PayPal\StructType\EnterBoardingReq
     */
    public function setEnterBoardingRequest(\PayPal\StructType\EnterBoardingRequestType $enterBoardingRequest = null)
    {
        $this->EnterBoardingRequest = $enterBoardingRequest;
        return $this;
    }
}
