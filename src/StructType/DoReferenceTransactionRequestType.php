<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoReferenceTransactionRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoReferenceTransactionRequestType extends AbstractRequestType
{
    /**
     * The DoReferenceTransactionRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:DoReferenceTransactionRequestDetails
     * @var \PayPal\StructType\DoReferenceTransactionRequestDetailsType
     */
    public $DoReferenceTransactionRequestDetails;
    /**
     * The ReturnFMFDetails
     * Meta information extracted from the WSDL
     * - documentation: This flag indicates that the response should include FMFDetails
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ReturnFMFDetails;
    /**
     * Constructor method for DoReferenceTransactionRequestType
     * @uses DoReferenceTransactionRequestType::setDoReferenceTransactionRequestDetails()
     * @uses DoReferenceTransactionRequestType::setReturnFMFDetails()
     * @param \PayPal\StructType\DoReferenceTransactionRequestDetailsType $doReferenceTransactionRequestDetails
     * @param int $returnFMFDetails
     */
    public function __construct(\PayPal\StructType\DoReferenceTransactionRequestDetailsType $doReferenceTransactionRequestDetails = null, $returnFMFDetails = null)
    {
        $this
            ->setDoReferenceTransactionRequestDetails($doReferenceTransactionRequestDetails)
            ->setReturnFMFDetails($returnFMFDetails);
    }
    /**
     * Get DoReferenceTransactionRequestDetails value
     * @return \PayPal\StructType\DoReferenceTransactionRequestDetailsType
     */
    public function getDoReferenceTransactionRequestDetails()
    {
        return $this->DoReferenceTransactionRequestDetails;
    }
    /**
     * Set DoReferenceTransactionRequestDetails value
     * @param \PayPal\StructType\DoReferenceTransactionRequestDetailsType $doReferenceTransactionRequestDetails
     * @return \PayPal\StructType\DoReferenceTransactionRequestType
     */
    public function setDoReferenceTransactionRequestDetails(\PayPal\StructType\DoReferenceTransactionRequestDetailsType $doReferenceTransactionRequestDetails = null)
    {
        $this->DoReferenceTransactionRequestDetails = $doReferenceTransactionRequestDetails;
        return $this;
    }
    /**
     * Get ReturnFMFDetails value
     * @return int|null
     */
    public function getReturnFMFDetails()
    {
        return $this->ReturnFMFDetails;
    }
    /**
     * Set ReturnFMFDetails value
     * @param int $returnFMFDetails
     * @return \PayPal\StructType\DoReferenceTransactionRequestType
     */
    public function setReturnFMFDetails($returnFMFDetails = null)
    {
        // validation for constraint: int
        if (!is_null($returnFMFDetails) && !(is_int($returnFMFDetails) || ctype_digit($returnFMFDetails))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnFMFDetails, true), gettype($returnFMFDetails)), __LINE__);
        }
        $this->ReturnFMFDetails = $returnFMFDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoReferenceTransactionRequestType
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
