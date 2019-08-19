<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoNonReferencedCreditResponseDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoNonReferencedCreditResponseDetailsType extends AbstractStructBase
{
    /**
     * The Amount
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: TransactionId - Type for a PayPal Transaction ID.
     * - base: xs:string
     * @var string
     */
    public $TransactionID;
    /**
     * Constructor method for DoNonReferencedCreditResponseDetailsType
     * @uses DoNonReferencedCreditResponseDetailsType::setAmount()
     * @uses DoNonReferencedCreditResponseDetailsType::setTransactionID()
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param string $transactionID
     */
    public function __construct(\PayPal\StructType\BasicAmountType $amount = null, $transactionID = null)
    {
        $this
            ->setAmount($amount)
            ->setTransactionID($transactionID);
    }
    /**
     * Get Amount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \PayPal\StructType\BasicAmountType $amount
     * @return \PayPal\StructType\DoNonReferencedCreditResponseDetailsType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
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
     * @return \PayPal\StructType\DoNonReferencedCreditResponseDetailsType
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
     * @return \PayPal\StructType\DoNonReferencedCreditResponseDetailsType
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
