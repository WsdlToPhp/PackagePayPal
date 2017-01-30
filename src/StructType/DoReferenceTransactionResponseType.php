<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoReferenceTransactionResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoReferenceTransactionResponseType extends AbstractResponseType
{
    /**
     * The DoReferenceTransactionResponseDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:DoReferenceTransactionResponseDetails
     * @var \PayPal\StructType\DoReferenceTransactionResponseDetailsType
     */
    public $DoReferenceTransactionResponseDetails;
    /**
     * The FMFDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\FMFDetailsType
     */
    public $FMFDetails;
    /**
     * Constructor method for DoReferenceTransactionResponseType
     * @uses DoReferenceTransactionResponseType::setDoReferenceTransactionResponseDetails()
     * @uses DoReferenceTransactionResponseType::setFMFDetails()
     * @param \PayPal\StructType\DoReferenceTransactionResponseDetailsType $doReferenceTransactionResponseDetails
     * @param \PayPal\StructType\FMFDetailsType $fMFDetails
     */
    public function __construct(\PayPal\StructType\DoReferenceTransactionResponseDetailsType $doReferenceTransactionResponseDetails = null, \PayPal\StructType\FMFDetailsType $fMFDetails = null)
    {
        $this
            ->setDoReferenceTransactionResponseDetails($doReferenceTransactionResponseDetails)
            ->setFMFDetails($fMFDetails);
    }
    /**
     * Get DoReferenceTransactionResponseDetails value
     * @return \PayPal\StructType\DoReferenceTransactionResponseDetailsType
     */
    public function getDoReferenceTransactionResponseDetails()
    {
        return $this->DoReferenceTransactionResponseDetails;
    }
    /**
     * Set DoReferenceTransactionResponseDetails value
     * @param \PayPal\StructType\DoReferenceTransactionResponseDetailsType $doReferenceTransactionResponseDetails
     * @return \PayPal\StructType\DoReferenceTransactionResponseType
     */
    public function setDoReferenceTransactionResponseDetails(\PayPal\StructType\DoReferenceTransactionResponseDetailsType $doReferenceTransactionResponseDetails = null)
    {
        $this->DoReferenceTransactionResponseDetails = $doReferenceTransactionResponseDetails;
        return $this;
    }
    /**
     * Get FMFDetails value
     * @return \PayPal\StructType\FMFDetailsType|null
     */
    public function getFMFDetails()
    {
        return $this->FMFDetails;
    }
    /**
     * Set FMFDetails value
     * @param \PayPal\StructType\FMFDetailsType $fMFDetails
     * @return \PayPal\StructType\DoReferenceTransactionResponseType
     */
    public function setFMFDetails(\PayPal\StructType\FMFDetailsType $fMFDetails = null)
    {
        $this->FMFDetails = $fMFDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoReferenceTransactionResponseType
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
