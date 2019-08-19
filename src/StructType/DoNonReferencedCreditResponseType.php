<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoNonReferencedCreditResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoNonReferencedCreditResponseType extends AbstractResponseType
{
    /**
     * The DoNonReferencedCreditResponseDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:DoNonReferencedCreditResponseDetails
     * @var \PayPal\StructType\DoNonReferencedCreditResponseDetailsType
     */
    public $DoNonReferencedCreditResponseDetails;
    /**
     * Constructor method for DoNonReferencedCreditResponseType
     * @uses DoNonReferencedCreditResponseType::setDoNonReferencedCreditResponseDetails()
     * @param \PayPal\StructType\DoNonReferencedCreditResponseDetailsType $doNonReferencedCreditResponseDetails
     */
    public function __construct(\PayPal\StructType\DoNonReferencedCreditResponseDetailsType $doNonReferencedCreditResponseDetails = null)
    {
        $this
            ->setDoNonReferencedCreditResponseDetails($doNonReferencedCreditResponseDetails);
    }
    /**
     * Get DoNonReferencedCreditResponseDetails value
     * @return \PayPal\StructType\DoNonReferencedCreditResponseDetailsType
     */
    public function getDoNonReferencedCreditResponseDetails()
    {
        return $this->DoNonReferencedCreditResponseDetails;
    }
    /**
     * Set DoNonReferencedCreditResponseDetails value
     * @param \PayPal\StructType\DoNonReferencedCreditResponseDetailsType $doNonReferencedCreditResponseDetails
     * @return \PayPal\StructType\DoNonReferencedCreditResponseType
     */
    public function setDoNonReferencedCreditResponseDetails(\PayPal\StructType\DoNonReferencedCreditResponseDetailsType $doNonReferencedCreditResponseDetails = null)
    {
        $this->DoNonReferencedCreditResponseDetails = $doNonReferencedCreditResponseDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoNonReferencedCreditResponseType
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
