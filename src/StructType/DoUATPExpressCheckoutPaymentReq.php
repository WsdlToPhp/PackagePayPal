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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoUATPExpressCheckoutPaymentReq
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
