<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoNonReferencedCreditReq StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoNonReferencedCreditReq extends AbstractStructBase
{
    /**
     * The DoNonReferencedCreditRequest
     * Meta information extracted from the WSDL
     * - ref: ns:DoNonReferencedCreditRequest
     * @var \PayPal\StructType\DoNonReferencedCreditRequestType
     */
    public $DoNonReferencedCreditRequest;
    /**
     * Constructor method for DoNonReferencedCreditReq
     * @uses DoNonReferencedCreditReq::setDoNonReferencedCreditRequest()
     * @param \PayPal\StructType\DoNonReferencedCreditRequestType $doNonReferencedCreditRequest
     */
    public function __construct(\PayPal\StructType\DoNonReferencedCreditRequestType $doNonReferencedCreditRequest = null)
    {
        $this
            ->setDoNonReferencedCreditRequest($doNonReferencedCreditRequest);
    }
    /**
     * Get DoNonReferencedCreditRequest value
     * @return \PayPal\StructType\DoNonReferencedCreditRequestType|null
     */
    public function getDoNonReferencedCreditRequest()
    {
        return $this->DoNonReferencedCreditRequest;
    }
    /**
     * Set DoNonReferencedCreditRequest value
     * @param \PayPal\StructType\DoNonReferencedCreditRequestType $doNonReferencedCreditRequest
     * @return \PayPal\StructType\DoNonReferencedCreditReq
     */
    public function setDoNonReferencedCreditRequest(\PayPal\StructType\DoNonReferencedCreditRequestType $doNonReferencedCreditRequest = null)
    {
        $this->DoNonReferencedCreditRequest = $doNonReferencedCreditRequest;
        return $this;
    }
}
