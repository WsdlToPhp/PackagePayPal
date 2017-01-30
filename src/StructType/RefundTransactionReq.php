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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\RefundTransactionReq
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
