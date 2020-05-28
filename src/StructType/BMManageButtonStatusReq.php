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
}
