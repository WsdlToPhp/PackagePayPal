<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoUATPAuthorizationReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoUATPAuthorizationReq extends AbstractStructBase
{
    /**
     * The DoUATPAuthorizationRequest
     * Meta information extracted from the WSDL
     * - ref: ns:DoUATPAuthorizationRequest
     * @var \PayPal\StructType\DoUATPAuthorizationRequestType
     */
    public $DoUATPAuthorizationRequest;
    /**
     * Constructor method for DoUATPAuthorizationReq
     * @uses DoUATPAuthorizationReq::setDoUATPAuthorizationRequest()
     * @param \PayPal\StructType\DoUATPAuthorizationRequestType $doUATPAuthorizationRequest
     */
    public function __construct(\PayPal\StructType\DoUATPAuthorizationRequestType $doUATPAuthorizationRequest = null)
    {
        $this
            ->setDoUATPAuthorizationRequest($doUATPAuthorizationRequest);
    }
    /**
     * Get DoUATPAuthorizationRequest value
     * @return \PayPal\StructType\DoUATPAuthorizationRequestType|null
     */
    public function getDoUATPAuthorizationRequest()
    {
        return $this->DoUATPAuthorizationRequest;
    }
    /**
     * Set DoUATPAuthorizationRequest value
     * @param \PayPal\StructType\DoUATPAuthorizationRequestType $doUATPAuthorizationRequest
     * @return \PayPal\StructType\DoUATPAuthorizationReq
     */
    public function setDoUATPAuthorizationRequest(\PayPal\StructType\DoUATPAuthorizationRequestType $doUATPAuthorizationRequest = null)
    {
        $this->DoUATPAuthorizationRequest = $doUATPAuthorizationRequest;
        return $this;
    }
}
