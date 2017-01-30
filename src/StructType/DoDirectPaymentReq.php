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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoDirectPaymentReq
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
