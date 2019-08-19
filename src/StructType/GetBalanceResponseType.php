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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Balance;
    /**
     * The BalanceTimeStamp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BalanceTimeStamp;
    /**
     * The BalanceHoldings
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($balanceTimeStamp, true), gettype($balanceTimeStamp)), __LINE__);
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
     * This method is responsible for validating the values passed to the setBalanceHoldings method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBalanceHoldings method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBalanceHoldingsForArrayConstraintsFromSetBalanceHoldings(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBalanceResponseTypeBalanceHoldingsItem) {
            // validation for constraint: itemType
            if (!$getBalanceResponseTypeBalanceHoldingsItem instanceof \PayPal\StructType\BasicAmountType) {
                $invalidValues[] = is_object($getBalanceResponseTypeBalanceHoldingsItem) ? get_class($getBalanceResponseTypeBalanceHoldingsItem) : sprintf('%s(%s)', gettype($getBalanceResponseTypeBalanceHoldingsItem), var_export($getBalanceResponseTypeBalanceHoldingsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BalanceHoldings property can only contain items of type \PayPal\StructType\BasicAmountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BalanceHoldings value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\BasicAmountType[] $balanceHoldings
     * @return \PayPal\StructType\GetBalanceResponseType
     */
    public function setBalanceHoldings(array $balanceHoldings = array())
    {
        // validation for constraint: array
        if ('' !== ($balanceHoldingsArrayErrorMessage = self::validateBalanceHoldingsForArrayConstraintsFromSetBalanceHoldings($balanceHoldings))) {
            throw new \InvalidArgumentException($balanceHoldingsArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The BalanceHoldings property can only contain items of type \PayPal\StructType\BasicAmountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
