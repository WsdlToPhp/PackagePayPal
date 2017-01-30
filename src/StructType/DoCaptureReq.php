<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoCaptureReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoCaptureReq extends AbstractStructBase
{
    /**
     * The DoCaptureRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:DoCaptureRequest
     * @var \PayPal\StructType\DoCaptureRequestType
     */
    public $DoCaptureRequest;
    /**
     * Constructor method for DoCaptureReq
     * @uses DoCaptureReq::setDoCaptureRequest()
     * @param \PayPal\StructType\DoCaptureRequestType $doCaptureRequest
     */
    public function __construct(\PayPal\StructType\DoCaptureRequestType $doCaptureRequest = null)
    {
        $this
            ->setDoCaptureRequest($doCaptureRequest);
    }
    /**
     * Get DoCaptureRequest value
     * @return \PayPal\StructType\DoCaptureRequestType|null
     */
    public function getDoCaptureRequest()
    {
        return $this->DoCaptureRequest;
    }
    /**
     * Set DoCaptureRequest value
     * @param \PayPal\StructType\DoCaptureRequestType $doCaptureRequest
     * @return \PayPal\StructType\DoCaptureReq
     */
    public function setDoCaptureRequest(\PayPal\StructType\DoCaptureRequestType $doCaptureRequest = null)
    {
        $this->DoCaptureRequest = $doCaptureRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoCaptureReq
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
