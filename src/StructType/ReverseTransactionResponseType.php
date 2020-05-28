<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReverseTransactionResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReverseTransactionResponseType extends AbstractResponseType
{
    /**
     * The ReverseTransactionResponseDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:ReverseTransactionResponseDetails
     * @var \PayPal\StructType\ReverseTransactionResponseDetailsType
     */
    public $ReverseTransactionResponseDetails;
    /**
     * Constructor method for ReverseTransactionResponseType
     * @uses ReverseTransactionResponseType::setReverseTransactionResponseDetails()
     * @param \PayPal\StructType\ReverseTransactionResponseDetailsType $reverseTransactionResponseDetails
     */
    public function __construct(\PayPal\StructType\ReverseTransactionResponseDetailsType $reverseTransactionResponseDetails = null)
    {
        $this
            ->setReverseTransactionResponseDetails($reverseTransactionResponseDetails);
    }
    /**
     * Get ReverseTransactionResponseDetails value
     * @return \PayPal\StructType\ReverseTransactionResponseDetailsType
     */
    public function getReverseTransactionResponseDetails()
    {
        return $this->ReverseTransactionResponseDetails;
    }
    /**
     * Set ReverseTransactionResponseDetails value
     * @param \PayPal\StructType\ReverseTransactionResponseDetailsType $reverseTransactionResponseDetails
     * @return \PayPal\StructType\ReverseTransactionResponseType
     */
    public function setReverseTransactionResponseDetails(\PayPal\StructType\ReverseTransactionResponseDetailsType $reverseTransactionResponseDetails = null)
    {
        $this->ReverseTransactionResponseDetails = $reverseTransactionResponseDetails;
        return $this;
    }
}
