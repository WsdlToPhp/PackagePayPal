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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetTransactionDetailsRequestType
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
