<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoReferenceTransactionReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoReferenceTransactionReq extends AbstractStructBase
{
    /**
     * The DoReferenceTransactionRequest
     * Meta informations extracted from the WSDL
     * - ref: ns:DoReferenceTransactionRequest
     * @var \PayPal\StructType\DoReferenceTransactionRequestType
     */
    public $DoReferenceTransactionRequest;
    /**
     * Constructor method for DoReferenceTransactionReq
     * @uses DoReferenceTransactionReq::setDoReferenceTransactionRequest()
     * @param \PayPal\StructType\DoReferenceTransactionRequestType $doReferenceTransactionRequest
     */
    public function __construct(\PayPal\StructType\DoReferenceTransactionRequestType $doReferenceTransactionRequest = null)
    {
        $this
            ->setDoReferenceTransactionRequest($doReferenceTransactionRequest);
    }
    /**
     * Get DoReferenceTransactionRequest value
     * @return \PayPal\StructType\DoReferenceTransactionRequestType|null
     */
    public function getDoReferenceTransactionRequest()
    {
        return $this->DoReferenceTransactionRequest;
    }
    /**
     * Set DoReferenceTransactionRequest value
     * @param \PayPal\StructType\DoReferenceTransactionRequestType $doReferenceTransactionRequest
     * @return \PayPal\StructType\DoReferenceTransactionReq
     */
    public function setDoReferenceTransactionRequest(\PayPal\StructType\DoReferenceTransactionRequestType $doReferenceTransactionRequest = null)
    {
        $this->DoReferenceTransactionRequest = $doReferenceTransactionRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoReferenceTransactionReq
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
