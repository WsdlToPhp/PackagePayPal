<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoNonReferencedCreditRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoNonReferencedCreditRequestType extends AbstractRequestType
{
    /**
     * The DoNonReferencedCreditRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:DoNonReferencedCreditRequestDetails
     * @var \PayPal\StructType\DoNonReferencedCreditRequestDetailsType
     */
    public $DoNonReferencedCreditRequestDetails;
    /**
     * Constructor method for DoNonReferencedCreditRequestType
     * @uses DoNonReferencedCreditRequestType::setDoNonReferencedCreditRequestDetails()
     * @param \PayPal\StructType\DoNonReferencedCreditRequestDetailsType $doNonReferencedCreditRequestDetails
     */
    public function __construct(\PayPal\StructType\DoNonReferencedCreditRequestDetailsType $doNonReferencedCreditRequestDetails = null)
    {
        $this
            ->setDoNonReferencedCreditRequestDetails($doNonReferencedCreditRequestDetails);
    }
    /**
     * Get DoNonReferencedCreditRequestDetails value
     * @return \PayPal\StructType\DoNonReferencedCreditRequestDetailsType
     */
    public function getDoNonReferencedCreditRequestDetails()
    {
        return $this->DoNonReferencedCreditRequestDetails;
    }
    /**
     * Set DoNonReferencedCreditRequestDetails value
     * @param \PayPal\StructType\DoNonReferencedCreditRequestDetailsType $doNonReferencedCreditRequestDetails
     * @return \PayPal\StructType\DoNonReferencedCreditRequestType
     */
    public function setDoNonReferencedCreditRequestDetails(\PayPal\StructType\DoNonReferencedCreditRequestDetailsType $doNonReferencedCreditRequestDetails = null)
    {
        $this->DoNonReferencedCreditRequestDetails = $doNonReferencedCreditRequestDetails;
        return $this;
    }
}
