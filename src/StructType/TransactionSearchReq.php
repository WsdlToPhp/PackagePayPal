<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionSearchReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TransactionSearchReq extends AbstractStructBase
{
    /**
     * The TransactionSearchRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:TransactionSearchRequest
     * @var \PayPal\StructType\TransactionSearchRequestType
     */
    public $TransactionSearchRequest;
    /**
     * Constructor method for TransactionSearchReq
     * @uses TransactionSearchReq::setTransactionSearchRequest()
     * @param \PayPal\StructType\TransactionSearchRequestType $transactionSearchRequest
     */
    public function __construct(\PayPal\StructType\TransactionSearchRequestType $transactionSearchRequest = null)
    {
        $this
            ->setTransactionSearchRequest($transactionSearchRequest);
    }
    /**
     * Get TransactionSearchRequest value
     * @return \PayPal\StructType\TransactionSearchRequestType|null
     */
    public function getTransactionSearchRequest()
    {
        return $this->TransactionSearchRequest;
    }
    /**
     * Set TransactionSearchRequest value
     * @param \PayPal\StructType\TransactionSearchRequestType $transactionSearchRequest
     * @return \PayPal\StructType\TransactionSearchReq
     */
    public function setTransactionSearchRequest(\PayPal\StructType\TransactionSearchRequestType $transactionSearchRequest = null)
    {
        $this->TransactionSearchRequest = $transactionSearchRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TransactionSearchReq
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
