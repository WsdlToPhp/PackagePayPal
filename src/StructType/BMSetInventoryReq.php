<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BMSetInventoryReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BMSetInventoryReq extends AbstractStructBase
{
    /**
     * The BMSetInventoryRequest
     * Meta information extracted from the WSDL
     * - ref: ns:BMSetInventoryRequest
     * @var \PayPal\StructType\BMSetInventoryRequestType
     */
    public $BMSetInventoryRequest;
    /**
     * Constructor method for BMSetInventoryReq
     * @uses BMSetInventoryReq::setBMSetInventoryRequest()
     * @param \PayPal\StructType\BMSetInventoryRequestType $bMSetInventoryRequest
     */
    public function __construct(\PayPal\StructType\BMSetInventoryRequestType $bMSetInventoryRequest = null)
    {
        $this
            ->setBMSetInventoryRequest($bMSetInventoryRequest);
    }
    /**
     * Get BMSetInventoryRequest value
     * @return \PayPal\StructType\BMSetInventoryRequestType|null
     */
    public function getBMSetInventoryRequest()
    {
        return $this->BMSetInventoryRequest;
    }
    /**
     * Set BMSetInventoryRequest value
     * @param \PayPal\StructType\BMSetInventoryRequestType $bMSetInventoryRequest
     * @return \PayPal\StructType\BMSetInventoryReq
     */
    public function setBMSetInventoryRequest(\PayPal\StructType\BMSetInventoryRequestType $bMSetInventoryRequest = null)
    {
        $this->BMSetInventoryRequest = $bMSetInventoryRequest;
        return $this;
    }
}
