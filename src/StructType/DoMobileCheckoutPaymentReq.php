<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoMobileCheckoutPaymentReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoMobileCheckoutPaymentReq extends AbstractStructBase
{
    /**
     * The DoMobileCheckoutPaymentRequest
     * Meta information extracted from the WSDL
     * - ref: ns:DoMobileCheckoutPaymentRequest
     * @var \PayPal\StructType\DoMobileCheckoutPaymentRequestType
     */
    public $DoMobileCheckoutPaymentRequest;
    /**
     * Constructor method for DoMobileCheckoutPaymentReq
     * @uses DoMobileCheckoutPaymentReq::setDoMobileCheckoutPaymentRequest()
     * @param \PayPal\StructType\DoMobileCheckoutPaymentRequestType $doMobileCheckoutPaymentRequest
     */
    public function __construct(\PayPal\StructType\DoMobileCheckoutPaymentRequestType $doMobileCheckoutPaymentRequest = null)
    {
        $this
            ->setDoMobileCheckoutPaymentRequest($doMobileCheckoutPaymentRequest);
    }
    /**
     * Get DoMobileCheckoutPaymentRequest value
     * @return \PayPal\StructType\DoMobileCheckoutPaymentRequestType|null
     */
    public function getDoMobileCheckoutPaymentRequest()
    {
        return $this->DoMobileCheckoutPaymentRequest;
    }
    /**
     * Set DoMobileCheckoutPaymentRequest value
     * @param \PayPal\StructType\DoMobileCheckoutPaymentRequestType $doMobileCheckoutPaymentRequest
     * @return \PayPal\StructType\DoMobileCheckoutPaymentReq
     */
    public function setDoMobileCheckoutPaymentRequest(\PayPal\StructType\DoMobileCheckoutPaymentRequestType $doMobileCheckoutPaymentRequest = null)
    {
        $this->DoMobileCheckoutPaymentRequest = $doMobileCheckoutPaymentRequest;
        return $this;
    }
}
