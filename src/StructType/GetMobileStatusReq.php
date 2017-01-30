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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetMobileStatusReq
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
