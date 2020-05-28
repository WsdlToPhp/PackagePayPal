<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoAuthorizationReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoAuthorizationReq extends AbstractStructBase
{
    /**
     * The DoAuthorizationRequest
     * Meta information extracted from the WSDL
     * - ref: ns:DoAuthorizationRequest
     * @var \PayPal\StructType\DoAuthorizationRequestType
     */
    public $DoAuthorizationRequest;
    /**
     * Constructor method for DoAuthorizationReq
     * @uses DoAuthorizationReq::setDoAuthorizationRequest()
     * @param \PayPal\StructType\DoAuthorizationRequestType $doAuthorizationRequest
     */
    public function __construct(\PayPal\StructType\DoAuthorizationRequestType $doAuthorizationRequest = null)
    {
        $this
            ->setDoAuthorizationRequest($doAuthorizationRequest);
    }
    /**
     * Get DoAuthorizationRequest value
     * @return \PayPal\StructType\DoAuthorizationRequestType|null
     */
    public function getDoAuthorizationRequest()
    {
        return $this->DoAuthorizationRequest;
    }
    /**
     * Set DoAuthorizationRequest value
     * @param \PayPal\StructType\DoAuthorizationRequestType $doAuthorizationRequest
     * @return \PayPal\StructType\DoAuthorizationReq
     */
    public function setDoAuthorizationRequest(\PayPal\StructType\DoAuthorizationRequestType $doAuthorizationRequest = null)
    {
        $this->DoAuthorizationRequest = $doAuthorizationRequest;
        return $this;
    }
}
