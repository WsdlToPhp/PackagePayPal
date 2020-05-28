<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReverseTransactionRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReverseTransactionRequestType extends AbstractRequestType
{
    /**
     * The ReverseTransactionRequestDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:ReverseTransactionRequestDetails
     * @var \PayPal\StructType\ReverseTransactionRequestDetailsType
     */
    public $ReverseTransactionRequestDetails;
    /**
     * Constructor method for ReverseTransactionRequestType
     * @uses ReverseTransactionRequestType::setReverseTransactionRequestDetails()
     * @param \PayPal\StructType\ReverseTransactionRequestDetailsType $reverseTransactionRequestDetails
     */
    public function __construct(\PayPal\StructType\ReverseTransactionRequestDetailsType $reverseTransactionRequestDetails = null)
    {
        $this
            ->setReverseTransactionRequestDetails($reverseTransactionRequestDetails);
    }
    /**
     * Get ReverseTransactionRequestDetails value
     * @return \PayPal\StructType\ReverseTransactionRequestDetailsType
     */
    public function getReverseTransactionRequestDetails()
    {
        return $this->ReverseTransactionRequestDetails;
    }
    /**
     * Set ReverseTransactionRequestDetails value
     * @param \PayPal\StructType\ReverseTransactionRequestDetailsType $reverseTransactionRequestDetails
     * @return \PayPal\StructType\ReverseTransactionRequestType
     */
    public function setReverseTransactionRequestDetails(\PayPal\StructType\ReverseTransactionRequestDetailsType $reverseTransactionRequestDetails = null)
    {
        $this->ReverseTransactionRequestDetails = $reverseTransactionRequestDetails;
        return $this;
    }
}
