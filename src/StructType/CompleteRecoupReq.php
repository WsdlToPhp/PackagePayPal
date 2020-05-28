<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompleteRecoupReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CompleteRecoupReq extends AbstractStructBase
{
    /**
     * The CompleteRecoupRequest
     * Meta information extracted from the WSDL
     * - ref: ns:CompleteRecoupRequest
     * @var \PayPal\StructType\CompleteRecoupRequestType
     */
    public $CompleteRecoupRequest;
    /**
     * Constructor method for CompleteRecoupReq
     * @uses CompleteRecoupReq::setCompleteRecoupRequest()
     * @param \PayPal\StructType\CompleteRecoupRequestType $completeRecoupRequest
     */
    public function __construct(\PayPal\StructType\CompleteRecoupRequestType $completeRecoupRequest = null)
    {
        $this
            ->setCompleteRecoupRequest($completeRecoupRequest);
    }
    /**
     * Get CompleteRecoupRequest value
     * @return \PayPal\StructType\CompleteRecoupRequestType|null
     */
    public function getCompleteRecoupRequest()
    {
        return $this->CompleteRecoupRequest;
    }
    /**
     * Set CompleteRecoupRequest value
     * @param \PayPal\StructType\CompleteRecoupRequestType $completeRecoupRequest
     * @return \PayPal\StructType\CompleteRecoupReq
     */
    public function setCompleteRecoupRequest(\PayPal\StructType\CompleteRecoupRequestType $completeRecoupRequest = null)
    {
        $this->CompleteRecoupRequest = $completeRecoupRequest;
        return $this;
    }
}
