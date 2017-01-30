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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoExpressCheckoutPaymentReq
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
