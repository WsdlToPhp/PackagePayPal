<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTransactionDetailsRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetTransactionDetailsRequestType extends AbstractRequestType
{
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of a transaction. RequiredThe details for some kinds of transactions cannot be retrieved with GetTransactionDetailsRequest. You cannot obtain details of bank transfer withdrawals, for example. Character length and
     * limitations: 17 single-byte alphanumeric characters | TransactionId - Type for a PayPal Transaction ID.
     * - base: xs:string
     * @var string
     */
    public $TransactionID;
    /**
     * Constructor method for GetTransactionDetailsRequestType
     * @uses GetTransactionDetailsRequestType::setTransactionID()
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
     * @return \PayPal\StructType\GetTransactionDetailsRequestType
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
