<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InitiateRecoupReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class InitiateRecoupReq extends AbstractStructBase
{
    /**
     * The InitiateRecoupRequest
     * Meta information extracted from the WSDL
     * - ref: ns:InitiateRecoupRequest
     * @var \PayPal\StructType\InitiateRecoupRequestType
     */
    public $InitiateRecoupRequest;
    /**
     * Constructor method for InitiateRecoupReq
     * @uses InitiateRecoupReq::setInitiateRecoupRequest()
     * @param \PayPal\StructType\InitiateRecoupRequestType $initiateRecoupRequest
     */
    public function __construct(\PayPal\StructType\InitiateRecoupRequestType $initiateRecoupRequest = null)
    {
        $this
            ->setInitiateRecoupRequest($initiateRecoupRequest);
    }
    /**
     * Get InitiateRecoupRequest value
     * @return \PayPal\StructType\InitiateRecoupRequestType|null
     */
    public function getInitiateRecoupRequest()
    {
        return $this->InitiateRecoupRequest;
    }
    /**
     * Set InitiateRecoupRequest value
     * @param \PayPal\StructType\InitiateRecoupRequestType $initiateRecoupRequest
     * @return \PayPal\StructType\InitiateRecoupReq
     */
    public function setInitiateRecoupRequest(\PayPal\StructType\InitiateRecoupRequestType $initiateRecoupRequest = null)
    {
        $this->InitiateRecoupRequest = $initiateRecoupRequest;
        return $this;
    }
}
