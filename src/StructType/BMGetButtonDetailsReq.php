<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMGetButtonDetailsReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMGetButtonDetailsReq extends AbstractStructBase
{
    /**
     * The BMGetButtonDetailsRequest
     * Meta information extracted from the WSDL
     * - ref: ns:BMGetButtonDetailsRequest
     * @var \PayPal\StructType\BMGetButtonDetailsRequestType
     */
    public $BMGetButtonDetailsRequest;
    /**
     * Constructor method for BMGetButtonDetailsReq
     * @uses BMGetButtonDetailsReq::setBMGetButtonDetailsRequest()
     * @param \PayPal\StructType\BMGetButtonDetailsRequestType $bMGetButtonDetailsRequest
     */
    public function __construct(\PayPal\StructType\BMGetButtonDetailsRequestType $bMGetButtonDetailsRequest = null)
    {
        $this
            ->setBMGetButtonDetailsRequest($bMGetButtonDetailsRequest);
    }
    /**
     * Get BMGetButtonDetailsRequest value
     * @return \PayPal\StructType\BMGetButtonDetailsRequestType|null
     */
    public function getBMGetButtonDetailsRequest()
    {
        return $this->BMGetButtonDetailsRequest;
    }
    /**
     * Set BMGetButtonDetailsRequest value
     * @param \PayPal\StructType\BMGetButtonDetailsRequestType $bMGetButtonDetailsRequest
     * @return \PayPal\StructType\BMGetButtonDetailsReq
     */
    public function setBMGetButtonDetailsRequest(\PayPal\StructType\BMGetButtonDetailsRequestType $bMGetButtonDetailsRequest = null)
    {
        $this->BMGetButtonDetailsRequest = $bMGetButtonDetailsRequest;
        return $this;
    }
}
