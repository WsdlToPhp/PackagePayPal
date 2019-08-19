<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessPermissionDetailsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetAccessPermissionDetailsReq extends AbstractStructBase
{
    /**
     * The GetAccessPermissionDetailsRequest
     * Meta information extracted from the WSDL
     * - ref: ns:GetAccessPermissionDetailsRequest
     * @var \PayPal\StructType\GetAccessPermissionDetailsRequestType
     */
    public $GetAccessPermissionDetailsRequest;
    /**
     * Constructor method for GetAccessPermissionDetailsReq
     * @uses GetAccessPermissionDetailsReq::setGetAccessPermissionDetailsRequest()
     * @param \PayPal\StructType\GetAccessPermissionDetailsRequestType $getAccessPermissionDetailsRequest
     */
    public function __construct(\PayPal\StructType\GetAccessPermissionDetailsRequestType $getAccessPermissionDetailsRequest = null)
    {
        $this
            ->setGetAccessPermissionDetailsRequest($getAccessPermissionDetailsRequest);
    }
    /**
     * Get GetAccessPermissionDetailsRequest value
     * @return \PayPal\StructType\GetAccessPermissionDetailsRequestType|null
     */
    public function getGetAccessPermissionDetailsRequest()
    {
        return $this->GetAccessPermissionDetailsRequest;
    }
    /**
     * Set GetAccessPermissionDetailsRequest value
     * @param \PayPal\StructType\GetAccessPermissionDetailsRequestType $getAccessPermissionDetailsRequest
     * @return \PayPal\StructType\GetAccessPermissionDetailsReq
     */
    public function setGetAccessPermissionDetailsRequest(\PayPal\StructType\GetAccessPermissionDetailsRequestType $getAccessPermissionDetailsRequest = null)
    {
        $this->GetAccessPermissionDetailsRequest = $getAccessPermissionDetailsRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetAccessPermissionDetailsReq
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
