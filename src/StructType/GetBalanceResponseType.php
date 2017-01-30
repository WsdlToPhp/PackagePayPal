<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBalanceResponseType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class GetBalanceResponseType extends AbstractResponseType
{
    /**
     * The Balance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Balance;
    /**
     * The BalanceTimeStamp
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BalanceTimeStamp;
    /**
     * The BalanceHoldings
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType[]
     */
    public $BalanceHoldings;
    /**
     * Constructor method for GetBalanceResponseType
     * @uses GetBalanceResponseType::setBalance()
     * @uses GetBalanceResponseType::setBalanceTimeStamp()
     * @uses GetBalanceResponseType::setBalanceHoldings()
     * @param \PayPal\StructType\BasicAmountType $balance
     * @param string $balanceTimeStamp
     * @param \PayPal\StructType\BasicAmountType[] $balanceHoldings
     */
    public function __construct(\PayPal\StructType\BasicAmountType $balance = null, $balanceTimeStamp = null, array $balanceHoldings = array())
    {
        $this
            ->setBalance($balance)
            ->setBalanceTimeStamp($balanceTimeStamp)
            ->setBalanceHoldings($balanceHoldings);
    }
    /**
     * Get Balance value
     * @return \PayPal\StructType\BasicAmountType
     */
    public function getBalance()
    {
        return $this->Balance;
    }
    /**
     * Set Balance value
     * @param \PayPal\StructType\BasicAmountType $balance
     * @return \PayPal\StructType\GetBalanceResponseType
     */
    public function setBalance(\PayPal\StructType\BasicAmountType $balance = null)
    {
        $this->Balance = $balance;
        return $this;
    }
    /**
     * Get BalanceTimeStamp value
     * @return string
     */
    public function getBalanceTimeStamp()
    {
        return $this->BalanceTimeStamp;
    }
    /**
     * Set BalanceTimeStamp value
     * @param string $balanceTimeStamp
     * @return \PayPal\StructType\GetBalanceResponseType
     */
    public function setBalanceTimeStamp($balanceTimeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($balanceTimeStamp) && !is_string($balanceTimeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($balanceTimeStamp)), __LINE__);
        }
        $this->BalanceTimeStamp = $balanceTimeStamp;
        return $this;
    }
    /**
     * Get BalanceHoldings value
     * @return \PayPal\StructType\BasicAmountType[]|null
     */
    public function getBalanceHoldings()
    {
        return $this->BalanceHoldings;
    }
    /**
     * Set BalanceHoldings value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\BasicAmountType[] $balanceHoldings
     * @return \PayPal\StructType\GetBalanceResponseType
     */
    public function setBalanceHoldings(array $balanceHoldings = array())
    {
        foreach ($balanceHoldings as $getBalanceResponseTypeBalanceHoldingsItem) {
            // validation for constraint: itemType
            if (!$getBalanceResponseTypeBalanceHoldingsItem instanceof \PayPal\StructType\BasicAmountType) {
                throw new \InvalidArgumentException(sprintf('The BalanceHoldings property can only contain items of \PayPal\StructType\BasicAmountType, "%s" given', is_object($getBalanceResponseTypeBalanceHoldingsItem) ? get_class($getBalanceResponseTypeBalanceHoldingsItem) : gettype($getBalanceResponseTypeBalanceHoldingsItem)), __LINE__);
            }
        }
        $this->BalanceHoldings = $balanceHoldings;
        return $this;
    }
    /**
     * Add item to BalanceHoldings value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\BasicAmountType $item
     * @return \PayPal\StructType\GetBalanceResponseType
     */
    public function addToBalanceHoldings(\PayPal\StructType\BasicAmountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\BasicAmountType) {
            throw new \InvalidArgumentException(sprintf('The BalanceHoldings property can only contain items of \PayPal\StructType\BasicAmountType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BalanceHoldings[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\GetBalanceResponseType
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
