<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReverseTransactionReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReverseTransactionReq extends AbstractStructBase
{
    /**
     * The ReverseTransactionRequest
     * Meta information extracted from the WSDL
     * - ref: ns:ReverseTransactionRequest
     * @var \PayPal\StructType\ReverseTransactionRequestType
     */
    public $ReverseTransactionRequest;
    /**
     * Constructor method for ReverseTransactionReq
     * @uses ReverseTransactionReq::setReverseTransactionRequest()
     * @param \PayPal\StructType\ReverseTransactionRequestType $reverseTransactionRequest
     */
    public function __construct(\PayPal\StructType\ReverseTransactionRequestType $reverseTransactionRequest = null)
    {
        $this
            ->setReverseTransactionRequest($reverseTransactionRequest);
    }
    /**
     * Get ReverseTransactionRequest value
     * @return \PayPal\StructType\ReverseTransactionRequestType|null
     */
    public function getReverseTransactionRequest()
    {
        return $this->ReverseTransactionRequest;
    }
    /**
     * Set ReverseTransactionRequest value
     * @param \PayPal\StructType\ReverseTransactionRequestType $reverseTransactionRequest
     * @return \PayPal\StructType\ReverseTransactionReq
     */
    public function setReverseTransactionRequest(\PayPal\StructType\ReverseTransactionRequestType $reverseTransactionRequest = null)
    {
        $this->ReverseTransactionRequest = $reverseTransactionRequest;
        return $this;
    }
}
