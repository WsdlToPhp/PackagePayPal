<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMManageButtonStatusReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMManageButtonStatusReq extends AbstractStructBase
{
    /**
     * The BMManageButtonStatusRequest
     * Meta information extracted from the WSDL
     * - ref: ns:BMManageButtonStatusRequest
     * @var \PayPal\StructType\BMManageButtonStatusRequestType
     */
    public $BMManageButtonStatusRequest;
    /**
     * Constructor method for BMManageButtonStatusReq
     * @uses BMManageButtonStatusReq::setBMManageButtonStatusRequest()
     * @param \PayPal\StructType\BMManageButtonStatusRequestType $bMManageButtonStatusRequest
     */
    public function __construct(\PayPal\StructType\BMManageButtonStatusRequestType $bMManageButtonStatusRequest = null)
    {
        $this
            ->setBMManageButtonStatusRequest($bMManageButtonStatusRequest);
    }
    /**
     * Get BMManageButtonStatusRequest value
     * @return \PayPal\StructType\BMManageButtonStatusRequestType|null
     */
    public function getBMManageButtonStatusRequest()
    {
        return $this->BMManageButtonStatusRequest;
    }
    /**
     * Set BMManageButtonStatusRequest value
     * @param \PayPal\StructType\BMManageButtonStatusRequestType $bMManageButtonStatusRequest
     * @return \PayPal\StructType\BMManageButtonStatusReq
     */
    public function setBMManageButtonStatusRequest(\PayPal\StructType\BMManageButtonStatusRequestType $bMManageButtonStatusRequest = null)
    {
        $this->BMManageButtonStatusRequest = $bMManageButtonStatusRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BMManageButtonStatusReq
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
