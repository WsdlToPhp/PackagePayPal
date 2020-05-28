<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoDirectPaymentRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoDirectPaymentRequestType extends AbstractRequestType
{
    /**
     * The DoDirectPaymentRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:DoDirectPaymentRequestDetails
     * @var \PayPal\StructType\DoDirectPaymentRequestDetailsType
     */
    public $DoDirectPaymentRequestDetails;
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
     * Constructor method for DoDirectPaymentRequestType
     * @uses DoDirectPaymentRequestType::setDoDirectPaymentRequestDetails()
     * @uses DoDirectPaymentRequestType::setReturnFMFDetails()
     * @param \PayPal\StructType\DoDirectPaymentRequestDetailsType $doDirectPaymentRequestDetails
     * @param int $returnFMFDetails
     */
    public function __construct(\PayPal\StructType\DoDirectPaymentRequestDetailsType $doDirectPaymentRequestDetails = null, $returnFMFDetails = null)
    {
        $this
            ->setDoDirectPaymentRequestDetails($doDirectPaymentRequestDetails)
            ->setReturnFMFDetails($returnFMFDetails);
    }
    /**
     * Get DoDirectPaymentRequestDetails value
     * @return \PayPal\StructType\DoDirectPaymentRequestDetailsType
     */
    public function getDoDirectPaymentRequestDetails()
    {
        return $this->DoDirectPaymentRequestDetails;
    }
    /**
     * Set DoDirectPaymentRequestDetails value
     * @param \PayPal\StructType\DoDirectPaymentRequestDetailsType $doDirectPaymentRequestDetails
     * @return \PayPal\StructType\DoDirectPaymentRequestType
     */
    public function setDoDirectPaymentRequestDetails(\PayPal\StructType\DoDirectPaymentRequestDetailsType $doDirectPaymentRequestDetails = null)
    {
        $this->DoDirectPaymentRequestDetails = $doDirectPaymentRequestDetails;
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
     * @return \PayPal\StructType\DoDirectPaymentRequestType
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
}
