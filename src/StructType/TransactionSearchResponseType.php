<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionSearchResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Results of a Transaction Search.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TransactionSearchResponseType extends AbstractResponseType
{
    /**
     * The PaymentTransactions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ebl:PaymentTransactions
     * @var \PayPal\StructType\PaymentTransactionSearchResultType[]
     */
    public $PaymentTransactions;
    /**
     * Constructor method for TransactionSearchResponseType
     * @uses TransactionSearchResponseType::setPaymentTransactions()
     * @param \PayPal\StructType\PaymentTransactionSearchResultType[] $paymentTransactions
     */
    public function __construct(array $paymentTransactions = array())
    {
        $this
            ->setPaymentTransactions($paymentTransactions);
    }
    /**
     * Get PaymentTransactions value
     * @return \PayPal\StructType\PaymentTransactionSearchResultType[]|null
     */
    public function getPaymentTransactions()
    {
        return $this->PaymentTransactions;
    }
    /**
     * Set PaymentTransactions value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentTransactionSearchResultType[] $paymentTransactions
     * @return \PayPal\StructType\TransactionSearchResponseType
     */
    public function setPaymentTransactions(array $paymentTransactions = array())
    {
        foreach ($paymentTransactions as $transactionSearchResponseTypePaymentTransactionsItem) {
            // validation for constraint: itemType
            if (!$transactionSearchResponseTypePaymentTransactionsItem instanceof \PayPal\StructType\PaymentTransactionSearchResultType) {
                throw new \InvalidArgumentException(sprintf('The PaymentTransactions property can only contain items of \PayPal\StructType\PaymentTransactionSearchResultType, "%s" given', is_object($transactionSearchResponseTypePaymentTransactionsItem) ? get_class($transactionSearchResponseTypePaymentTransactionsItem) : gettype($transactionSearchResponseTypePaymentTransactionsItem)), __LINE__);
            }
        }
        $this->PaymentTransactions = $paymentTransactions;
        return $this;
    }
    /**
     * Add item to PaymentTransactions value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentTransactionSearchResultType $item
     * @return \PayPal\StructType\TransactionSearchResponseType
     */
    public function addToPaymentTransactions(\PayPal\StructType\PaymentTransactionSearchResultType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\PaymentTransactionSearchResultType) {
            throw new \InvalidArgumentException(sprintf('The PaymentTransactions property can only contain items of \PayPal\StructType\PaymentTransactionSearchResultType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentTransactions[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TransactionSearchResponseType
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
