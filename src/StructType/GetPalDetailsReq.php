<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPalDetailsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetPalDetailsReq extends AbstractStructBase
{
    /**
     * The GetPalDetailsRequest
     * Meta information extracted from the WSDL
     * - ref: ns:GetPalDetailsRequest
     * @var \PayPal\StructType\GetPalDetailsRequestType
     */
    public $GetPalDetailsRequest;
    /**
     * Constructor method for GetPalDetailsReq
     * @uses GetPalDetailsReq::setGetPalDetailsRequest()
     * @param \PayPal\StructType\GetPalDetailsRequestType $getPalDetailsRequest
     */
    public function __construct(\PayPal\StructType\GetPalDetailsRequestType $getPalDetailsRequest = null)
    {
        $this
            ->setGetPalDetailsRequest($getPalDetailsRequest);
    }
    /**
     * Get GetPalDetailsRequest value
     * @return \PayPal\StructType\GetPalDetailsRequestType|null
     */
    public function getGetPalDetailsRequest()
    {
        return $this->GetPalDetailsRequest;
    }
    /**
     * Set GetPalDetailsRequest value
     * @param \PayPal\StructType\GetPalDetailsRequestType $getPalDetailsRequest
     * @return \PayPal\StructType\GetPalDetailsReq
     */
    public function setGetPalDetailsRequest(\PayPal\StructType\GetPalDetailsRequestType $getPalDetailsRequest = null)
    {
        $this->GetPalDetailsRequest = $getPalDetailsRequest;
        return $this;
    }
}
