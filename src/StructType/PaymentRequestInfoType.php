<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentRequestInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains payment request information for each bucket in the cart.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentRequestInfoType extends AbstractStructBase
{
    /**
     * The TransactionId
     * Meta informations extracted from the WSDL
     * - documentation: Contains the transaction id of the bucket.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionId;
    /**
     * The PaymentRequestID
     * Meta informations extracted from the WSDL
     * - documentation: Contains the bucket id.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentRequestID;
    /**
     * The PaymentError
     * Meta informations extracted from the WSDL
     * - documentation: Contains the error details.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\ErrorType
     */
    public $PaymentError;
    /**
     * Constructor method for PaymentRequestInfoType
     * @uses PaymentRequestInfoType::setTransactionId()
     * @uses PaymentRequestInfoType::setPaymentRequestID()
     * @uses PaymentRequestInfoType::setPaymentError()
     * @param string $transactionId
     * @param string $paymentRequestID
     * @param \PayPal\StructType\ErrorType $paymentError
     */
    public function __construct($transactionId = null, $paymentRequestID = null, \PayPal\StructType\ErrorType $paymentError = null)
    {
        $this
            ->setTransactionId($transactionId)
            ->setPaymentRequestID($paymentRequestID)
            ->setPaymentError($paymentError);
    }
    /**
     * Get TransactionId value
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param string $transactionId
     * @return \PayPal\StructType\PaymentRequestInfoType
     */
    public function setTransactionId($transactionId = null)
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionId)), __LINE__);
        }
        $this->TransactionId = $transactionId;
        return $this;
    }
    /**
     * Get PaymentRequestID value
     * @return string|null
     */
    public function getPaymentRequestID()
    {
        return $this->PaymentRequestID;
    }
    /**
     * Set PaymentRequestID value
     * @param string $paymentRequestID
     * @return \PayPal\StructType\PaymentRequestInfoType
     */
    public function setPaymentRequestID($paymentRequestID = null)
    {
        // validation for constraint: string
        if (!is_null($paymentRequestID) && !is_string($paymentRequestID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentRequestID)), __LINE__);
        }
        $this->PaymentRequestID = $paymentRequestID;
        return $this;
    }
    /**
     * Get PaymentError value
     * @return \PayPal\StructType\ErrorType|null
     */
    public function getPaymentError()
    {
        return $this->PaymentError;
    }
    /**
     * Set PaymentError value
     * @param \PayPal\StructType\ErrorType $paymentError
     * @return \PayPal\StructType\PaymentRequestInfoType
     */
    public function setPaymentError(\PayPal\StructType\ErrorType $paymentError = null)
    {
        $this->PaymentError = $paymentError;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PaymentRequestInfoType
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