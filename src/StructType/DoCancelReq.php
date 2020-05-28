<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoCancelReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoCancelReq extends AbstractStructBase
{
    /**
     * The DoCancelRequest
     * Meta information extracted from the WSDL
     * - ref: ns:DoCancelRequest
     * @var \PayPal\StructType\DoCancelRequestType
     */
    public $DoCancelRequest;
    /**
     * Constructor method for DoCancelReq
     * @uses DoCancelReq::setDoCancelRequest()
     * @param \PayPal\StructType\DoCancelRequestType $doCancelRequest
     */
    public function __construct(\PayPal\StructType\DoCancelRequestType $doCancelRequest = null)
    {
        $this
            ->setDoCancelRequest($doCancelRequest);
    }
    /**
     * Get DoCancelRequest value
     * @return \PayPal\StructType\DoCancelRequestType|null
     */
    public function getDoCancelRequest()
    {
        return $this->DoCancelRequest;
    }
    /**
     * Set DoCancelRequest value
     * @param \PayPal\StructType\DoCancelRequestType $doCancelRequest
     * @return \PayPal\StructType\DoCancelReq
     */
    public function setDoCancelRequest(\PayPal\StructType\DoCancelRequestType $doCancelRequest = null)
    {
        $this->DoCancelRequest = $doCancelRequest;
        return $this;
    }
}
