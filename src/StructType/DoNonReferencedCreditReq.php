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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoNonReferencedCreditReq
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
