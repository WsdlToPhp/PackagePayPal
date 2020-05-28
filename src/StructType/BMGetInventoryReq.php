<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMGetInventoryReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMGetInventoryReq extends AbstractStructBase
{
    /**
     * The BMGetInventoryRequest
     * Meta information extracted from the WSDL
     * - ref: ns:BMGetInventoryRequest
     * @var \PayPal\StructType\BMGetInventoryRequestType
     */
    public $BMGetInventoryRequest;
    /**
     * Constructor method for BMGetInventoryReq
     * @uses BMGetInventoryReq::setBMGetInventoryRequest()
     * @param \PayPal\StructType\BMGetInventoryRequestType $bMGetInventoryRequest
     */
    public function __construct(\PayPal\StructType\BMGetInventoryRequestType $bMGetInventoryRequest = null)
    {
        $this
            ->setBMGetInventoryRequest($bMGetInventoryRequest);
    }
    /**
     * Get BMGetInventoryRequest value
     * @return \PayPal\StructType\BMGetInventoryRequestType|null
     */
    public function getBMGetInventoryRequest()
    {
        return $this->BMGetInventoryRequest;
    }
    /**
     * Set BMGetInventoryRequest value
     * @param \PayPal\StructType\BMGetInventoryRequestType $bMGetInventoryRequest
     * @return \PayPal\StructType\BMGetInventoryReq
     */
    public function setBMGetInventoryRequest(\PayPal\StructType\BMGetInventoryRequestType $bMGetInventoryRequest = null)
    {
        $this->BMGetInventoryRequest = $bMGetInventoryRequest;
        return $this;
    }
}
