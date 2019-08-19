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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BMGetInventoryReq
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
