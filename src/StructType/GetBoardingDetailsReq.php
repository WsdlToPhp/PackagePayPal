<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBoardingDetailsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetBoardingDetailsReq extends AbstractStructBase
{
    /**
     * The GetBoardingDetailsRequest
     * Meta information extracted from the WSDL
     * - ref: ns:GetBoardingDetailsRequest
     * @var \PayPal\StructType\GetBoardingDetailsRequestType
     */
    public $GetBoardingDetailsRequest;
    /**
     * Constructor method for GetBoardingDetailsReq
     * @uses GetBoardingDetailsReq::setGetBoardingDetailsRequest()
     * @param \PayPal\StructType\GetBoardingDetailsRequestType $getBoardingDetailsRequest
     */
    public function __construct(\PayPal\StructType\GetBoardingDetailsRequestType $getBoardingDetailsRequest = null)
    {
        $this
            ->setGetBoardingDetailsRequest($getBoardingDetailsRequest);
    }
    /**
     * Get GetBoardingDetailsRequest value
     * @return \PayPal\StructType\GetBoardingDetailsRequestType|null
     */
    public function getGetBoardingDetailsRequest()
    {
        return $this->GetBoardingDetailsRequest;
    }
    /**
     * Set GetBoardingDetailsRequest value
     * @param \PayPal\StructType\GetBoardingDetailsRequestType $getBoardingDetailsRequest
     * @return \PayPal\StructType\GetBoardingDetailsReq
     */
    public function setGetBoardingDetailsRequest(\PayPal\StructType\GetBoardingDetailsRequestType $getBoardingDetailsRequest = null)
    {
        $this->GetBoardingDetailsRequest = $getBoardingDetailsRequest;
        return $this;
    }
}
