<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionSearchResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Results of a Transaction Search.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TransactionSearchResponseType extends AbstractResponseType
{
    /**
     * The PaymentTransactions
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setPaymentTransactions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentTransactions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentTransactionsForArrayConstraintsFromSetPaymentTransactions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $transactionSearchResponseTypePaymentTransactionsItem) {
            // validation for constraint: itemType
            if (!$transactionSearchResponseTypePaymentTransactionsItem instanceof \PayPal\StructType\PaymentTransactionSearchResultType) {
                $invalidValues[] = is_object($transactionSearchResponseTypePaymentTransactionsItem) ? get_class($transactionSearchResponseTypePaymentTransactionsItem) : sprintf('%s(%s)', gettype($transactionSearchResponseTypePaymentTransactionsItem), var_export($transactionSearchResponseTypePaymentTransactionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentTransactions property can only contain items of type \PayPal\StructType\PaymentTransactionSearchResultType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PaymentTransactions value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentTransactionSearchResultType[] $paymentTransactions
     * @return \PayPal\StructType\TransactionSearchResponseType
     */
    public function setPaymentTransactions(array $paymentTransactions = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentTransactionsArrayErrorMessage = self::validatePaymentTransactionsForArrayConstraintsFromSetPaymentTransactions($paymentTransactions))) {
            throw new \InvalidArgumentException($paymentTransactionsArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The PaymentTransactions property can only contain items of type \PayPal\StructType\PaymentTransactionSearchResultType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PaymentTransactions[] = $item;
        return $this;
    }
}
