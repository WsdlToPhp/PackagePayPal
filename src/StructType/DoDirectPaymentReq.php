<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoDirectPaymentReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoDirectPaymentReq extends AbstractStructBase
{
    /**
     * The DoDirectPaymentRequest
     * Meta information extracted from the WSDL
     * - ref: ns:DoDirectPaymentRequest
     * @var \PayPal\StructType\DoDirectPaymentRequestType
     */
    public $DoDirectPaymentRequest;
    /**
     * Constructor method for DoDirectPaymentReq
     * @uses DoDirectPaymentReq::setDoDirectPaymentRequest()
     * @param \PayPal\StructType\DoDirectPaymentRequestType $doDirectPaymentRequest
     */
    public function __construct(\PayPal\StructType\DoDirectPaymentRequestType $doDirectPaymentRequest = null)
    {
        $this
            ->setDoDirectPaymentRequest($doDirectPaymentRequest);
    }
    /**
     * Get DoDirectPaymentRequest value
     * @return \PayPal\StructType\DoDirectPaymentRequestType|null
     */
    public function getDoDirectPaymentRequest()
    {
        return $this->DoDirectPaymentRequest;
    }
    /**
     * Set DoDirectPaymentRequest value
     * @param \PayPal\StructType\DoDirectPaymentRequestType $doDirectPaymentRequest
     * @return \PayPal\StructType\DoDirectPaymentReq
     */
    public function setDoDirectPaymentRequest(\PayPal\StructType\DoDirectPaymentRequestType $doDirectPaymentRequest = null)
    {
        $this->DoDirectPaymentRequest = $doDirectPaymentRequest;
        return $this;
    }
}
