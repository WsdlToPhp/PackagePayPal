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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoNonReferencedCreditRequestType
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
