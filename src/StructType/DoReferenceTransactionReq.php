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
     * Meta information extracted from the WSDL
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
}
