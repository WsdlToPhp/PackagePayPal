<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateAuthorizationReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class UpdateAuthorizationReq extends AbstractStructBase
{
    /**
     * The UpdateAuthorizationRequest
     * Meta information extracted from the WSDL
     * - ref: ns:UpdateAuthorizationRequest
     * @var \PayPal\StructType\UpdateAuthorizationRequestType
     */
    public $UpdateAuthorizationRequest;
    /**
     * Constructor method for UpdateAuthorizationReq
     * @uses UpdateAuthorizationReq::setUpdateAuthorizationRequest()
     * @param \PayPal\StructType\UpdateAuthorizationRequestType $updateAuthorizationRequest
     */
    public function __construct(\PayPal\StructType\UpdateAuthorizationRequestType $updateAuthorizationRequest = null)
    {
        $this
            ->setUpdateAuthorizationRequest($updateAuthorizationRequest);
    }
    /**
     * Get UpdateAuthorizationRequest value
     * @return \PayPal\StructType\UpdateAuthorizationRequestType|null
     */
    public function getUpdateAuthorizationRequest()
    {
        return $this->UpdateAuthorizationRequest;
    }
    /**
     * Set UpdateAuthorizationRequest value
     * @param \PayPal\StructType\UpdateAuthorizationRequestType $updateAuthorizationRequest
     * @return \PayPal\StructType\UpdateAuthorizationReq
     */
    public function setUpdateAuthorizationRequest(\PayPal\StructType\UpdateAuthorizationRequestType $updateAuthorizationRequest = null)
    {
        $this->UpdateAuthorizationRequest = $updateAuthorizationRequest;
        return $this;
    }
}
