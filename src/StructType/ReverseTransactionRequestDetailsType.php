<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReverseTransactionRequestDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ReverseTransactionRequestDetailsType extends AbstractStructBase
{
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Identifier of the transaction to reverse. Required Character length and limitations: 17 single-byte alphanumeric characters | TransactionId - Type for a PayPal Transaction ID.
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * Constructor method for ReverseTransactionRequestDetailsType
     * @uses ReverseTransactionRequestDetailsType::setTransactionID()
     * @param string $transactionID
     */
    public function __construct($transactionID = null)
    {
        $this
            ->setTransactionID($transactionID);
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \PayPal\StructType\ReverseTransactionRequestDetailsType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
}
