<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains information about multiple individual transations.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TransactionsType extends AbstractStructBase
{
    /**
     * The Transaction
     * Meta informations extracted from the WSDL
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
     * Set Transaction value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\TransactionType[] $transaction
     * @return \PayPal\StructType\TransactionsType
     */
    public function setTransaction(array $transaction = array())
    {
        foreach ($transaction as $transactionsTypeTransactionItem) {
            // validation for constraint: itemType
            if (!$transactionsTypeTransactionItem instanceof \PayPal\StructType\TransactionType) {
                throw new \InvalidArgumentException(sprintf('The Transaction property can only contain items of \PayPal\StructType\TransactionType, "%s" given', is_object($transactionsTypeTransactionItem) ? get_class($transactionsTypeTransactionItem) : gettype($transactionsTypeTransactionItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The Transaction property can only contain items of \PayPal\StructType\TransactionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Transaction[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TransactionsType
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
