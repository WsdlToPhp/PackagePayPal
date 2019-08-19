<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountEntryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Item number if transaction is associated with an auction or 0 if no item is associated with an account entry. | Balance as of a given entry, can be 0.00.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AccountEntryType extends AbstractStructBase
{
    /**
     * The Balance
     * Meta information extracted from the WSDL
     * - ref: ns:Balance
     * @var \PayPal\StructType\AmountType
     */
    public $Balance;
    /**
     * The Credit
     * Meta information extracted from the WSDL
     * - documentation: Credit Amount for a detail entry, can be 0.00.
     * @var \PayPal\StructType\AmountType
     */
    public $Credit;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - documentation: Date entry was posted, in GMT.
     * @var string
     */
    public $Date;
    /**
     * The Debit
     * Meta information extracted from the WSDL
     * - documentation: Debit Amount for this detail entry, can be 0.00.
     * @var \PayPal\StructType\AmountType
     */
    public $Debit;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Represents the unique identifier for an item. To be used to specify the elements that represents an ItemID.
     * - base: xs:string
     * - ref: ns:ItemID
     * @var string
     */
    public $ItemID;
    /**
     * The Memo
     * Meta information extracted from the WSDL
     * - documentation: Memo line for an account entry, can be empty string.
     * @var string
     */
    public $Memo;
    /**
     * The RefNumber
     * Meta information extracted from the WSDL
     * - documentation: eBay reference number for an account entry.
     * @var int
     */
    public $RefNumber;
    /**
     * The AccountEntryDetailsType
     * Meta information extracted from the WSDL
     * - documentation: Integer code for account details entry type. This element element specifies an index to a table of explanations for accounting charges.
     * @var int
     */
    public $AccountEntryDetailsType;
    /**
     * Constructor method for AccountEntryType
     * @uses AccountEntryType::setBalance()
     * @uses AccountEntryType::setCredit()
     * @uses AccountEntryType::setDate()
     * @uses AccountEntryType::setDebit()
     * @uses AccountEntryType::setItemID()
     * @uses AccountEntryType::setMemo()
     * @uses AccountEntryType::setRefNumber()
     * @uses AccountEntryType::setAccountEntryDetailsType()
     * @param \PayPal\StructType\AmountType $balance
     * @param \PayPal\StructType\AmountType $credit
     * @param string $date
     * @param \PayPal\StructType\AmountType $debit
     * @param string $itemID
     * @param string $memo
     * @param int $refNumber
     * @param int $accountEntryDetailsType
     */
    public function __construct(\PayPal\StructType\AmountType $balance = null, \PayPal\StructType\AmountType $credit = null, $date = null, \PayPal\StructType\AmountType $debit = null, $itemID = null, $memo = null, $refNumber = null, $accountEntryDetailsType = null)
    {
        $this
            ->setBalance($balance)
            ->setCredit($credit)
            ->setDate($date)
            ->setDebit($debit)
            ->setItemID($itemID)
            ->setMemo($memo)
            ->setRefNumber($refNumber)
            ->setAccountEntryDetailsType($accountEntryDetailsType);
    }
    /**
     * Get Balance value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getBalance()
    {
        return $this->Balance;
    }
    /**
     * Set Balance value
     * @param \PayPal\StructType\AmountType $balance
     * @return \PayPal\StructType\AccountEntryType
     */
    public function setBalance(\PayPal\StructType\AmountType $balance = null)
    {
        $this->Balance = $balance;
        return $this;
    }
    /**
     * Get Credit value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getCredit()
    {
        return $this->Credit;
    }
    /**
     * Set Credit value
     * @param \PayPal\StructType\AmountType $credit
     * @return \PayPal\StructType\AccountEntryType
     */
    public function setCredit(\PayPal\StructType\AmountType $credit = null)
    {
        $this->Credit = $credit;
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \PayPal\StructType\AccountEntryType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get Debit value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getDebit()
    {
        return $this->Debit;
    }
    /**
     * Set Debit value
     * @param \PayPal\StructType\AmountType $debit
     * @return \PayPal\StructType\AccountEntryType
     */
    public function setDebit(\PayPal\StructType\AmountType $debit = null)
    {
        $this->Debit = $debit;
        return $this;
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \PayPal\StructType\AccountEntryType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get Memo value
     * @return string|null
     */
    public function getMemo()
    {
        return $this->Memo;
    }
    /**
     * Set Memo value
     * @param string $memo
     * @return \PayPal\StructType\AccountEntryType
     */
    public function setMemo($memo = null)
    {
        // validation for constraint: string
        if (!is_null($memo) && !is_string($memo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($memo, true), gettype($memo)), __LINE__);
        }
        $this->Memo = $memo;
        return $this;
    }
    /**
     * Get RefNumber value
     * @return int|null
     */
    public function getRefNumber()
    {
        return $this->RefNumber;
    }
    /**
     * Set RefNumber value
     * @param int $refNumber
     * @return \PayPal\StructType\AccountEntryType
     */
    public function setRefNumber($refNumber = null)
    {
        // validation for constraint: int
        if (!is_null($refNumber) && !(is_int($refNumber) || ctype_digit($refNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refNumber, true), gettype($refNumber)), __LINE__);
        }
        $this->RefNumber = $refNumber;
        return $this;
    }
    /**
     * Get AccountEntryDetailsType value
     * @return int|null
     */
    public function getAccountEntryDetailsType()
    {
        return $this->AccountEntryDetailsType;
    }
    /**
     * Set AccountEntryDetailsType value
     * @param int $accountEntryDetailsType
     * @return \PayPal\StructType\AccountEntryType
     */
    public function setAccountEntryDetailsType($accountEntryDetailsType = null)
    {
        // validation for constraint: int
        if (!is_null($accountEntryDetailsType) && !(is_int($accountEntryDetailsType) || ctype_digit($accountEntryDetailsType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountEntryDetailsType, true), gettype($accountEntryDetailsType)), __LINE__);
        }
        $this->AccountEntryDetailsType = $accountEntryDetailsType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AccountEntryType
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
