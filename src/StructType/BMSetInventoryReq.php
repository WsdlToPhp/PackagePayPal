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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BMSetInventoryReq
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
