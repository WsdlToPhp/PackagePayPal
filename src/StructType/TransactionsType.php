<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains information about multiple individual transations.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TransactionsType extends AbstractStructBase
{
    /**
     * The Transaction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: ns:Transaction
     * @var \PayPal\StructType\TransactionType[]
     */
    public $Transaction;
    /**
     * Constructor method for TransactionsType
     * @uses TransactionsType::setTransaction()
     * @param \PayPal\StructType\TransactionType[] $transaction
     */
    public function __construct(array $transaction = array())
    {
        $this
            ->setTransaction($transaction);
    }
    /**
     * Get Transaction value
     * @return \PayPal\StructType\TransactionType[]|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * This method is responsible for validating the values passed to the setTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransactionForArrayConstraintsFromSetTransaction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $transactionsTypeTransactionItem) {
            // validation for constraint: itemType
            if (!$transactionsTypeTransactionItem instanceof \PayPal\StructType\TransactionType) {
                $invalidValues[] = is_object($transactionsTypeTransactionItem) ? get_class($transactionsTypeTransactionItem) : sprintf('%s(%s)', gettype($transactionsTypeTransactionItem), var_export($transactionsTypeTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Transaction property can only contain items of type \PayPal\StructType\TransactionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Transaction value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\TransactionType[] $transaction
     * @return \PayPal\StructType\TransactionsType
     */
    public function setTransaction(array $transaction = array())
    {
        // validation for constraint: array
        if ('' !== ($transactionArrayErrorMessage = self::validateTransactionForArrayConstraintsFromSetTransaction($transaction))) {
            throw new \InvalidArgumentException($transactionArrayErrorMessage, __LINE__);
        }
        $this->Transaction = $transaction;
        return $this;
    }
    /**
     * Add item to Transaction value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\TransactionType $item
     * @return \PayPal\StructType\TransactionsType
     */
    public function addToTransaction(\PayPal\StructType\TransactionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\TransactionType) {
            throw new \InvalidArgumentException(sprintf('The Transaction property can only contain items of type \PayPal\StructType\TransactionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Transaction[] = $item;
        return $this;
    }
}
