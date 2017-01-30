<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMobilePaymentReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CreateMobilePaymentReq extends AbstractStructBase
{
    /**
     * The CreateMobilePaymentRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:CreateMobilePaymentRequest
     * @var \PayPal\StructType\CreateMobilePaymentRequestType
     */
    public $CreateMobilePaymentRequest;
    /**
     * Constructor method for CreateMobilePaymentReq
     * @uses CreateMobilePaymentReq::setCreateMobilePaymentRequest()
     * @param \PayPal\StructType\CreateMobilePaymentRequestType $createMobilePaymentRequest
     */
    public function __construct(\PayPal\StructType\CreateMobilePaymentRequestType $createMobilePaymentRequest = null)
    {
        $this
            ->setCreateMobilePaymentRequest($createMobilePaymentRequest);
    }
    /**
     * Get CreateMobilePaymentRequest value
     * @return \PayPal\StructType\CreateMobilePaymentRequestType|null
     */
    public function getCreateMobilePaymentRequest()
    {
        return $this->CreateMobilePaymentRequest;
    }
    /**
     * Set CreateMobilePaymentRequest value
     * @param \PayPal\StructType\CreateMobilePaymentRequestType $createMobilePaymentRequest
     * @return \PayPal\StructType\CreateMobilePaymentReq
     */
    public function setCreateMobilePaymentRequest(\PayPal\StructType\CreateMobilePaymentRequestType $createMobilePaymentRequest = null)
    {
        $this->CreateMobilePaymentRequest = $createMobilePaymentRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\CreateMobilePaymentReq
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
