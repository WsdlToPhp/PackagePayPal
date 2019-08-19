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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoMobileCheckoutPaymentReq
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
