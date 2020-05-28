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
     * Meta information extracted from the WSDL
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
}
