<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Unique identifier for an authorization. | Unique identifier for a transaction. Returns 0 when Type=1 (Chinese auction). Typically, an ItemID and a TransactionID uniquely identify a checkout transaction. | Includes shipping payment
 * data. | The amount the buyer paid for the item or agreed to pay, depending on how far into the checkout process the item is. If the seller allowed the buyer to change the item total, the buyer is able to change the total until the time that the
 * transaction's status moves to Complete. Determine whether the buyer changed the amount by calling GetSellerTransactions or GetSellerTransactions and comparing the AmountPaid value to what the seller expected. For Motors items, AmountPaid is the
 * amount paid by the buyer for the deposit. | Contains information about a single transaction. A transaction contains information about the sale of a particular item. The system creates a transaction when a buyer has made a purchase (Fixed Price items)
 * or is the winning bidder (BIN and auction items). A listing can be associated with one or more transactions in these cases: Multi-Item Fixed Price Listings Dutch Auction Listings A listing is associated with a single transaction in these cases:
 * Single-Item Fixed Price Listings Single-Item Auction Listings
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TransactionType extends AbstractStructBase
{
    /**
     * The AmountPaid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:AmountPaid
     * @var \PayPal\StructType\AmountType
     */
    public $AmountPaid;
    /**
     * The Buyer
     * Meta information extracted from the WSDL
     * - documentation: Container for buyer data.
     * - minOccurs: 0
     * @var \PayPal\StructType\UserType
     */
    public $Buyer;
    /**
     * The ShippingDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:ShippingDetails
     * @var \PayPal\StructType\ShippingDetailsType
     */
    public $ShippingDetails;
    /**
     * The ConvertedAmountPaid
     * Meta information extracted from the WSDL
     * - documentation: Value returned in the Transaction/AmountPaid element, converted to the currency indicated by SiteCurrency.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $ConvertedAmountPaid;
    /**
     * The ConvertedTransactionPrice
     * Meta information extracted from the WSDL
     * - documentation: Value returned in the Transaction/TransactionPrice element, converted to the currency indicated by SiteCurrency.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $ConvertedTransactionPrice;
    /**
     * The CreatedDate
     * Meta information extracted from the WSDL
     * - documentation: For fixed-price, Stores, and BIN items indicates when the purchase (or BIN) occurred. For all other item types indicates when the transaction was created (the time when checkout was initiated).
     * - minOccurs: 0
     * @var string
     */
    public $CreatedDate;
    /**
     * The DepositType
     * Meta information extracted from the WSDL
     * - documentation: Deposit type for Motors items. If item is not a Motors item, then returns a DepositType of None. Possible values: None Other Method Fast Deposit
     * - minOccurs: 0
     * @var string
     */
    public $DepositType;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: Item info associated with the transaction.
     * - minOccurs: 0
     * @var \PayPal\StructType\ItemType
     */
    public $Item;
    /**
     * The QuantityPurchased
     * Meta information extracted from the WSDL
     * - documentation: Contains the number of individual items the buyer purchased in the transaction.
     * - minOccurs: 0
     * @var int
     */
    public $QuantityPurchased;
    /**
     * The ShippingHandlingTotal
     * Meta information extracted from the WSDL
     * - documentation: Shipping cost totals shown to user (for both flat and calculated rates).
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $ShippingHandlingTotal;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Container node for transaction status data.
     * - minOccurs: 0
     * @var \PayPal\StructType\TransactionStatusType
     */
    public $Status;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:TransactionID
     * @var string
     */
    public $TransactionID;
    /**
     * The AuthorizationID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ns:AuthorizationID
     * @var string
     */
    public $AuthorizationID;
    /**
     * The TransactionPrice
     * Meta information extracted from the WSDL
     * - documentation: Price of the item, before shipping and sales tax. For Motors, TransactionPrice is the deposit amount.
     * - minOccurs: 0
     * @var \PayPal\StructType\AmountType
     */
    public $TransactionPrice;
    /**
     * The VATPercent
     * Meta information extracted from the WSDL
     * - documentation: VAT rate for the item, if the item price includes the VAT rate. Specify the VATPercent if you want include the net price in addition to the gross price in the listing. VAT rates vary depending on the item and on the user's country of
     * residence; therefore a business seller is responsible for entering the correct VAT rate (it will not be calculated by eBay).
     * - minOccurs: 0
     * @var float
     */
    public $VATPercent;
    /**
     * Constructor method for TransactionType
     * @uses TransactionType::setAmountPaid()
     * @uses TransactionType::setBuyer()
     * @uses TransactionType::setShippingDetails()
     * @uses TransactionType::setConvertedAmountPaid()
     * @uses TransactionType::setConvertedTransactionPrice()
     * @uses TransactionType::setCreatedDate()
     * @uses TransactionType::setDepositType()
     * @uses TransactionType::setItem()
     * @uses TransactionType::setQuantityPurchased()
     * @uses TransactionType::setShippingHandlingTotal()
     * @uses TransactionType::setStatus()
     * @uses TransactionType::setTransactionID()
     * @uses TransactionType::setAuthorizationID()
     * @uses TransactionType::setTransactionPrice()
     * @uses TransactionType::setVATPercent()
     * @param \PayPal\StructType\AmountType $amountPaid
     * @param \PayPal\StructType\UserType $buyer
     * @param \PayPal\StructType\ShippingDetailsType $shippingDetails
     * @param \PayPal\StructType\AmountType $convertedAmountPaid
     * @param \PayPal\StructType\AmountType $convertedTransactionPrice
     * @param string $createdDate
     * @param string $depositType
     * @param \PayPal\StructType\ItemType $item
     * @param int $quantityPurchased
     * @param \PayPal\StructType\AmountType $shippingHandlingTotal
     * @param \PayPal\StructType\TransactionStatusType $status
     * @param string $transactionID
     * @param string $authorizationID
     * @param \PayPal\StructType\AmountType $transactionPrice
     * @param float $vATPercent
     */
    public function __construct(\PayPal\StructType\AmountType $amountPaid = null, \PayPal\StructType\UserType $buyer = null, \PayPal\StructType\ShippingDetailsType $shippingDetails = null, \PayPal\StructType\AmountType $convertedAmountPaid = null, \PayPal\StructType\AmountType $convertedTransactionPrice = null, $createdDate = null, $depositType = null, \PayPal\StructType\ItemType $item = null, $quantityPurchased = null, \PayPal\StructType\AmountType $shippingHandlingTotal = null, \PayPal\StructType\TransactionStatusType $status = null, $transactionID = null, $authorizationID = null, \PayPal\StructType\AmountType $transactionPrice = null, $vATPercent = null)
    {
        $this
            ->setAmountPaid($amountPaid)
            ->setBuyer($buyer)
            ->setShippingDetails($shippingDetails)
            ->setConvertedAmountPaid($convertedAmountPaid)
            ->setConvertedTransactionPrice($convertedTransactionPrice)
            ->setCreatedDate($createdDate)
            ->setDepositType($depositType)
            ->setItem($item)
            ->setQuantityPurchased($quantityPurchased)
            ->setShippingHandlingTotal($shippingHandlingTotal)
            ->setStatus($status)
            ->setTransactionID($transactionID)
            ->setAuthorizationID($authorizationID)
            ->setTransactionPrice($transactionPrice)
            ->setVATPercent($vATPercent);
    }
    /**
     * Get AmountPaid value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getAmountPaid()
    {
        return $this->AmountPaid;
    }
    /**
     * Set AmountPaid value
     * @param \PayPal\StructType\AmountType $amountPaid
     * @return \PayPal\StructType\TransactionType
     */
    public function setAmountPaid(\PayPal\StructType\AmountType $amountPaid = null)
    {
        $this->AmountPaid = $amountPaid;
        return $this;
    }
    /**
     * Get Buyer value
     * @return \PayPal\StructType\UserType|null
     */
    public function getBuyer()
    {
        return $this->Buyer;
    }
    /**
     * Set Buyer value
     * @param \PayPal\StructType\UserType $buyer
     * @return \PayPal\StructType\TransactionType
     */
    public function setBuyer(\PayPal\StructType\UserType $buyer = null)
    {
        $this->Buyer = $buyer;
        return $this;
    }
    /**
     * Get ShippingDetails value
     * @return \PayPal\StructType\ShippingDetailsType|null
     */
    public function getShippingDetails()
    {
        return $this->ShippingDetails;
    }
    /**
     * Set ShippingDetails value
     * @param \PayPal\StructType\ShippingDetailsType $shippingDetails
     * @return \PayPal\StructType\TransactionType
     */
    public function setShippingDetails(\PayPal\StructType\ShippingDetailsType $shippingDetails = null)
    {
        $this->ShippingDetails = $shippingDetails;
        return $this;
    }
    /**
     * Get ConvertedAmountPaid value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getConvertedAmountPaid()
    {
        return $this->ConvertedAmountPaid;
    }
    /**
     * Set ConvertedAmountPaid value
     * @param \PayPal\StructType\AmountType $convertedAmountPaid
     * @return \PayPal\StructType\TransactionType
     */
    public function setConvertedAmountPaid(\PayPal\StructType\AmountType $convertedAmountPaid = null)
    {
        $this->ConvertedAmountPaid = $convertedAmountPaid;
        return $this;
    }
    /**
     * Get ConvertedTransactionPrice value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getConvertedTransactionPrice()
    {
        return $this->ConvertedTransactionPrice;
    }
    /**
     * Set ConvertedTransactionPrice value
     * @param \PayPal\StructType\AmountType $convertedTransactionPrice
     * @return \PayPal\StructType\TransactionType
     */
    public function setConvertedTransactionPrice(\PayPal\StructType\AmountType $convertedTransactionPrice = null)
    {
        $this->ConvertedTransactionPrice = $convertedTransactionPrice;
        return $this;
    }
    /**
     * Get CreatedDate value
     * @return string|null
     */
    public function getCreatedDate()
    {
        return $this->CreatedDate;
    }
    /**
     * Set CreatedDate value
     * @param string $createdDate
     * @return \PayPal\StructType\TransactionType
     */
    public function setCreatedDate($createdDate = null)
    {
        // validation for constraint: string
        if (!is_null($createdDate) && !is_string($createdDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdDate, true), gettype($createdDate)), __LINE__);
        }
        $this->CreatedDate = $createdDate;
        return $this;
    }
    /**
     * Get DepositType value
     * @return string|null
     */
    public function getDepositType()
    {
        return $this->DepositType;
    }
    /**
     * Set DepositType value
     * @uses \PayPal\EnumType\DepositTypeCodeType::valueIsValid()
     * @uses \PayPal\EnumType\DepositTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $depositType
     * @return \PayPal\StructType\TransactionType
     */
    public function setDepositType($depositType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\DepositTypeCodeType::valueIsValid($depositType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\DepositTypeCodeType', is_array($depositType) ? implode(', ', $depositType) : var_export($depositType, true), implode(', ', \PayPal\EnumType\DepositTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DepositType = $depositType;
        return $this;
    }
    /**
     * Get Item value
     * @return \PayPal\StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \PayPal\StructType\ItemType $item
     * @return \PayPal\StructType\TransactionType
     */
    public function setItem(\PayPal\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get QuantityPurchased value
     * @return int|null
     */
    public function getQuantityPurchased()
    {
        return $this->QuantityPurchased;
    }
    /**
     * Set QuantityPurchased value
     * @param int $quantityPurchased
     * @return \PayPal\StructType\TransactionType
     */
    public function setQuantityPurchased($quantityPurchased = null)
    {
        // validation for constraint: int
        if (!is_null($quantityPurchased) && !(is_int($quantityPurchased) || ctype_digit($quantityPurchased))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantityPurchased, true), gettype($quantityPurchased)), __LINE__);
        }
        $this->QuantityPurchased = $quantityPurchased;
        return $this;
    }
    /**
     * Get ShippingHandlingTotal value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getShippingHandlingTotal()
    {
        return $this->ShippingHandlingTotal;
    }
    /**
     * Set ShippingHandlingTotal value
     * @param \PayPal\StructType\AmountType $shippingHandlingTotal
     * @return \PayPal\StructType\TransactionType
     */
    public function setShippingHandlingTotal(\PayPal\StructType\AmountType $shippingHandlingTotal = null)
    {
        $this->ShippingHandlingTotal = $shippingHandlingTotal;
        return $this;
    }
    /**
     * Get Status value
     * @return \PayPal\StructType\TransactionStatusType|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param \PayPal\StructType\TransactionStatusType $status
     * @return \PayPal\StructType\TransactionType
     */
    public function setStatus(\PayPal\StructType\TransactionStatusType $status = null)
    {
        $this->Status = $status;
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
     * @return \PayPal\StructType\TransactionType
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
     * Get AuthorizationID value
     * @return string|null
     */
    public function getAuthorizationID()
    {
        return $this->AuthorizationID;
    }
    /**
     * Set AuthorizationID value
     * @param string $authorizationID
     * @return \PayPal\StructType\TransactionType
     */
    public function setAuthorizationID($authorizationID = null)
    {
        // validation for constraint: string
        if (!is_null($authorizationID) && !is_string($authorizationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizationID, true), gettype($authorizationID)), __LINE__);
        }
        $this->AuthorizationID = $authorizationID;
        return $this;
    }
    /**
     * Get TransactionPrice value
     * @return \PayPal\StructType\AmountType|null
     */
    public function getTransactionPrice()
    {
        return $this->TransactionPrice;
    }
    /**
     * Set TransactionPrice value
     * @param \PayPal\StructType\AmountType $transactionPrice
     * @return \PayPal\StructType\TransactionType
     */
    public function setTransactionPrice(\PayPal\StructType\AmountType $transactionPrice = null)
    {
        $this->TransactionPrice = $transactionPrice;
        return $this;
    }
    /**
     * Get VATPercent value
     * @return float|null
     */
    public function getVATPercent()
    {
        return $this->VATPercent;
    }
    /**
     * Set VATPercent value
     * @param float $vATPercent
     * @return \PayPal\StructType\TransactionType
     */
    public function setVATPercent($vATPercent = null)
    {
        // validation for constraint: float
        if (!is_null($vATPercent) && !(is_float($vATPercent) || is_numeric($vATPercent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vATPercent, true), gettype($vATPercent)), __LINE__);
        }
        $this->VATPercent = $vATPercent;
        return $this;
    }
}
