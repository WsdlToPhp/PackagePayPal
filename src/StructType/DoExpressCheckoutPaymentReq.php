<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoExpressCheckoutPaymentReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoExpressCheckoutPaymentReq extends AbstractStructBase
{
    /**
     * The DoExpressCheckoutPaymentRequest
     * Meta information extracted from the WSDL
     * - ref: ns:DoExpressCheckoutPaymentRequest
     * @var \PayPal\StructType\DoExpressCheckoutPaymentRequestType
     */
    public $DoExpressCheckoutPaymentRequest;
    /**
     * Constructor method for DoExpressCheckoutPaymentReq
     * @uses DoExpressCheckoutPaymentReq::setDoExpressCheckoutPaymentRequest()
     * @param \PayPal\StructType\DoExpressCheckoutPaymentRequestType $doExpressCheckoutPaymentRequest
     */
    public function __construct(\PayPal\StructType\DoExpressCheckoutPaymentRequestType $doExpressCheckoutPaymentRequest = null)
    {
        $this
            ->setDoExpressCheckoutPaymentRequest($doExpressCheckoutPaymentRequest);
    }
    /**
     * Get DoExpressCheckoutPaymentRequest value
     * @return \PayPal\StructType\DoExpressCheckoutPaymentRequestType|null
     */
    public function getDoExpressCheckoutPaymentRequest()
    {
        return $this->DoExpressCheckoutPaymentRequest;
    }
    /**
     * Set DoExpressCheckoutPaymentRequest value
     * @param \PayPal\StructType\DoExpressCheckoutPaymentRequestType $doExpressCheckoutPaymentRequest
     * @return \PayPal\StructType\DoExpressCheckoutPaymentReq
     */
    public function setDoExpressCheckoutPaymentRequest(\PayPal\StructType\DoExpressCheckoutPaymentRequestType $doExpressCheckoutPaymentRequest = null)
    {
        $this->DoExpressCheckoutPaymentRequest = $doExpressCheckoutPaymentRequest;
        return $this;
    }
}
