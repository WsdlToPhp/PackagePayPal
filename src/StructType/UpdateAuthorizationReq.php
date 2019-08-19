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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\UpdateAuthorizationReq
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
