<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoUATPExpressCheckoutPaymentReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoUATPExpressCheckoutPaymentReq extends AbstractStructBase
{
    /**
     * The DoUATPExpressCheckoutPaymentRequest
     * Meta information extracted from the WSDL
     * - ref: ns:DoUATPExpressCheckoutPaymentRequest
     * @var \PayPal\StructType\DoUATPExpressCheckoutPaymentRequestType
     */
    public $DoUATPExpressCheckoutPaymentRequest;
    /**
     * Constructor method for DoUATPExpressCheckoutPaymentReq
     * @uses DoUATPExpressCheckoutPaymentReq::setDoUATPExpressCheckoutPaymentRequest()
     * @param \PayPal\StructType\DoUATPExpressCheckoutPaymentRequestType $doUATPExpressCheckoutPaymentRequest
     */
    public function __construct(\PayPal\StructType\DoUATPExpressCheckoutPaymentRequestType $doUATPExpressCheckoutPaymentRequest = null)
    {
        $this
            ->setDoUATPExpressCheckoutPaymentRequest($doUATPExpressCheckoutPaymentRequest);
    }
    /**
     * Get DoUATPExpressCheckoutPaymentRequest value
     * @return \PayPal\StructType\DoUATPExpressCheckoutPaymentRequestType|null
     */
    public function getDoUATPExpressCheckoutPaymentRequest()
    {
        return $this->DoUATPExpressCheckoutPaymentRequest;
    }
    /**
     * Set DoUATPExpressCheckoutPaymentRequest value
     * @param \PayPal\StructType\DoUATPExpressCheckoutPaymentRequestType $doUATPExpressCheckoutPaymentRequest
     * @return \PayPal\StructType\DoUATPExpressCheckoutPaymentReq
     */
    public function setDoUATPExpressCheckoutPaymentRequest(\PayPal\StructType\DoUATPExpressCheckoutPaymentRequestType $doUATPExpressCheckoutPaymentRequest = null)
    {
        $this->DoUATPExpressCheckoutPaymentRequest = $doUATPExpressCheckoutPaymentRequest;
        return $this;
    }
}
