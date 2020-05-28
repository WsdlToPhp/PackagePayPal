<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundTransactionReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RefundTransactionReq extends AbstractStructBase
{
    /**
     * The RefundTransactionRequest
     * Meta information extracted from the WSDL
     * - ref: ns:RefundTransactionRequest
     * @var \PayPal\StructType\RefundTransactionRequestType
     */
    public $RefundTransactionRequest;
    /**
     * Constructor method for RefundTransactionReq
     * @uses RefundTransactionReq::setRefundTransactionRequest()
     * @param \PayPal\StructType\RefundTransactionRequestType $refundTransactionRequest
     */
    public function __construct(\PayPal\StructType\RefundTransactionRequestType $refundTransactionRequest = null)
    {
        $this
            ->setRefundTransactionRequest($refundTransactionRequest);
    }
    /**
     * Get RefundTransactionRequest value
     * @return \PayPal\StructType\RefundTransactionRequestType|null
     */
    public function getRefundTransactionRequest()
    {
        return $this->RefundTransactionRequest;
    }
    /**
     * Set RefundTransactionRequest value
     * @param \PayPal\StructType\RefundTransactionRequestType $refundTransactionRequest
     * @return \PayPal\StructType\RefundTransactionReq
     */
    public function setRefundTransactionRequest(\PayPal\StructType\RefundTransactionRequestType $refundTransactionRequest = null)
    {
        $this->RefundTransactionRequest = $refundTransactionRequest;
        return $this;
    }
}
