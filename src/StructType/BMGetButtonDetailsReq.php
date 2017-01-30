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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BMGetButtonDetailsReq
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
