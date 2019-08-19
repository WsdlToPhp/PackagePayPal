<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionSearchRequestType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TransactionSearchRequestType extends AbstractRequestType
{
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - documentation: The earliest transaction date at which to start the search. No wildcards are allowed. Required
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $StartDate;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - documentation: The latest transaction date to be included in the search Optional
     * - minOccurs: 0
     * @var string
     */
    public $EndDate;
    /**
     * The Payer
     * Meta information extracted from the WSDL
     * - documentation: Search by the buyer's email address OptionalCharacter length and limitations: 127 single-byte alphanumeric characters
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Payer;
    /**
     * The Receiver
     * Meta information extracted from the WSDL
     * - documentation: Search by the receiver's email address. If the merchant account has only one email, this is the primary email. Can also be a non-primary email.Optional
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Receiver;
    /**
     * The ReceiptID
     * Meta information extracted from the WSDL
     * - documentation: Search by the PayPal Account Optional receipt IDOptional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReceiptID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Search by the transaction ID. OptionalThe returned results are from the merchant's transaction records. Character length and limitations: 19 single-byte characters maximum | TransactionId - Type for a PayPal Transaction ID.
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The ProfileID
     * Meta information extracted from the WSDL
     * - documentation: Search by Recurring Payment Profile id. The ProfileID is returned as part of the CreateRecurringPaymentsProfile API response. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProfileID;
    /**
     * The PayerName
     * Meta information extracted from the WSDL
     * - documentation: Search by the buyer's name OptionalSalutation: 20 single-byte character limit.FirstName: 25 single-byte character limit.MiddleName: 25 single-byte character limit.LastName: 25 single-byte character limit.Suffix: 12 single-byte
     * character limit.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\PersonNameType
     */
    public $PayerName;
    /**
     * The AuctionItemNumber
     * Meta information extracted from the WSDL
     * - documentation: Search by item number of the purchased goods.OptionalTo search for purchased items not related to auctions, set the AuctionItemNumber element to the value of the HTML item_number variable set in the shopping cart for the original
     * transaction.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AuctionItemNumber;
    /**
     * The InvoiceID
     * Meta information extracted from the WSDL
     * - documentation: Search by invoice identification key, as set by you for the original transaction. InvoiceID searches the invoice records for items sold by the merchant, not the items purchased. OptionalThe value for InvoiceID must exactly match an
     * invoice identification number. No wildcards are allowed. Character length and limitations: 127 single-byte characters maximum
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceID;
    /**
     * The CardNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardNumber;
    /**
     * The TransactionClass
     * Meta information extracted from the WSDL
     * - documentation: Search by classification of transaction. Some kinds of possible classes of transactions are not searchable with TransactionSearchRequest. You cannot search for bank transfer withdrawals, for example. OptionalAll: all transaction
     * classifications.Sent: only payments sent.Received: only payments received.MassPay: only mass payments.MoneyRequest: only money requests.FundsAdded: only funds added to balance.FundsWithdrawn: only funds withdrawn from balance.Referral: only
     * transactions involving referrals.Fee: only transactions involving fees.Subscription: only transactions involving subscriptions.Dividend: only transactions involving dividends.Billpay: only transactions involving BillPay Transactions.Refund: only
     * transactions involving funds.CurrencyConversions: only transactions involving currency conversions.BalanceTransfer: only transactions involving balance transfers.Reversal: only transactions involving BillPay reversals.Shipping: only transactions
     * involving UPS shipping fees.BalanceAffecting: only transactions that affect the account balance.ECheck: only transactions involving eCheckForcedPostTransaction: forced post transaction.NonReferencedRefunds: non-referenced refunds.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionClass;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Search by transaction amount OptionalYou must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - documentation: Search by currency codeOptional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CurrencyCode;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Search by transaction status OptionalPending: The payment is pending. The specific reason the payment is pending is returned by the GetTransactionDetails APIPendingReason element. For more information, see PendingReason.Processing:
     * The payment is being processed.Success: The payment has been completed and the funds have been added successfully to your account balance.Denied: You denied the payment. This happens only if the payment was previously pending.Reversed: A payment was
     * reversed due to a chargeback or other type of reversal. The funds have been removed from your account balance and returned to the buyer.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * Constructor method for TransactionSearchRequestType
     * @uses TransactionSearchRequestType::setStartDate()
     * @uses TransactionSearchRequestType::setEndDate()
     * @uses TransactionSearchRequestType::setPayer()
     * @uses TransactionSearchRequestType::setReceiver()
     * @uses TransactionSearchRequestType::setReceiptID()
     * @uses TransactionSearchRequestType::setTransactionID()
     * @uses TransactionSearchRequestType::setProfileID()
     * @uses TransactionSearchRequestType::setPayerName()
     * @uses TransactionSearchRequestType::setAuctionItemNumber()
     * @uses TransactionSearchRequestType::setInvoiceID()
     * @uses TransactionSearchRequestType::setCardNumber()
     * @uses TransactionSearchRequestType::setTransactionClass()
     * @uses TransactionSearchRequestType::setAmount()
     * @uses TransactionSearchRequestType::setCurrencyCode()
     * @uses TransactionSearchRequestType::setStatus()
     * @param string $startDate
     * @param string $endDate
     * @param string $payer
     * @param string $receiver
     * @param string $receiptID
     * @param string $transactionID
     * @param string $profileID
     * @param \PayPal\StructType\PersonNameType $payerName
     * @param string $auctionItemNumber
     * @param string $invoiceID
     * @param string $cardNumber
     * @param string $transactionClass
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param string $currencyCode
     * @param string $status
     */
    public function __construct($startDate = null, $endDate = null, $payer = null, $receiver = null, $receiptID = null, $transactionID = null, $profileID = null, \PayPal\StructType\PersonNameType $payerName = null, $auctionItemNumber = null, $invoiceID = null, $cardNumber = null, $transactionClass = null, \PayPal\StructType\BasicAmountType $amount = null, $currencyCode = null, $status = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setPayer($payer)
            ->setReceiver($receiver)
            ->setReceiptID($receiptID)
            ->setTransactionID($transactionID)
            ->setProfileID($profileID)
            ->setPayerName($payerName)
            ->setAuctionItemNumber($auctionItemNumber)
            ->setInvoiceID($invoiceID)
            ->setCardNumber($cardNumber)
            ->setTransactionClass($transactionClass)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode)
            ->setStatus($status);
    }
    /**
     * Get StartDate value
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \PayPal\StructType\TransactionSearchRequestType
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \PayPal\StructType\TransactionSearchRequestType
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Get Payer value
     * @return string|null
     */
    public function getPayer()
    {
        return $this->Payer;
    }
    /**
     * Set Payer value
     * @param string $payer
     * @return \PayPal\StructType\TransactionSearchRequestType
     */
    public function setPayer($payer = null)
    {
        // validation for constraint: string
        if (!is_null($payer) && !is_string($payer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payer, true), gettype($payer)), __LINE__);
        }
        $this->Payer = $payer;
        return $this;
    }
    /**
     * Get Receiver value
     * @return string|null
     */
    public function getReceiver()
    {
        return $this->Receiver;
    }
    /**
     * Set Receiver value
     * @param string $receiver
     * @return \PayPal\StructType\TransactionSearchRequestType
     */
    public function setReceiver($receiver = null)
    {
        // validation for constraint: string
        if (!is_null($receiver) && !is_string($receiver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiver, true), gettype($receiver)), __LINE__);
        }
        $this->Receiver = $receiver;
        return $this;
    }
    /**
     * Get ReceiptID value
     * @return string|null
     */
    public function getReceiptID()
    {
        return $this->ReceiptID;
    }
    /**
     * Set ReceiptID value
     * @param string $receiptID
     * @return \PayPal\StructType\TransactionSearchRequestType
     */
    public function setReceiptID($receiptID = null)
    {
        // validation for constraint: string
        if (!is_null($receiptID) && !is_string($receiptID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptID, true), gettype($receiptID)), __LINE__);
        }
        $this->ReceiptID = $receiptID;
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
     * @return \PayPal\StructType\TransactionSearchRequestType
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
     * Get ProfileID value
     * @return string|null
     */
    public function getProfileID()
    {
        return $this->ProfileID;
    }
    /**
     * Set ProfileID value
     * @param string $profileID
     * @return \PayPal\StructType\TransactionSearchRequestType
     */
    public function setProfileID($profileID = null)
    {
        // validation for constraint: string
        if (!is_null($profileID) && !is_string($profileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileID, true), gettype($profileID)), __LINE__);
        }
        $this->ProfileID = $profileID;
        return $this;
    }
    /**
     * Get PayerName value
     * @return \PayPal\StructType\PersonNameType|null
     */
    public function getPayerName()
    {
        return $this->PayerName;
    }
    /**
     * Set PayerName value
     * @param \PayPal\StructType\PersonNameType $payerName
     * @return \PayPal\StructType\TransactionSearchRequestType
     */
    public function setPayerName(\PayPal\StructType\PersonNameType $payerName = null)
    {
        $this->PayerName = $payerName;
        return $this;
    }
    /**
     * Get AuctionItemNumber value
     * @return string|null
     */
    public function getAuctionItemNumber()
    {
        return $this->AuctionItemNumber;
    }
    /**
     * Set AuctionItemNumber value
     * @param string $auctionItemNumber
     * @return \PayPal\StructType\TransactionSearchRequestType
     */
    public function setAuctionItemNumber($auctionItemNumber = null)
    {
        // validation for constraint: string
        if (!is_null($auctionItemNumber) && !is_string($auctionItemNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($auctionItemNumber, true), gettype($auctionItemNumber)), __LINE__);
        }
        $this->AuctionItemNumber = $auctionItemNumber;
        return $this;
    }
    /**
     * Get InvoiceID value
     * @return string|null
     */
    public function getInvoiceID()
    {
        return $this->InvoiceID;
    }
    /**
     * Set InvoiceID value
     * @param string $invoiceID
     * @return \PayPal\StructType\TransactionSearchRequestType
     */
    public function setInvoiceID($invoiceID = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceID) && !is_string($invoiceID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceID, true), gettype($invoiceID)), __LINE__);
        }
        $this->InvoiceID = $invoiceID;
        return $this;
    }
    /**
     * Get CardNumber value
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }
    /**
     * Set CardNumber value
     * @param string $cardNumber
     * @return \PayPal\StructType\TransactionSearchRequestType
     */
    public function setCardNumber($cardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($cardNumber) && !is_string($cardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNumber, true), gettype($cardNumber)), __LINE__);
        }
        $this->CardNumber = $cardNumber;
        return $this;
    }
    /**
     * Get TransactionClass value
     * @return string|null
     */
    public function getTransactionClass()
    {
        return $this->TransactionClass;
    }
    /**
     * Set TransactionClass value
     * @uses \PayPal\EnumType\PaymentTransactionClassCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PaymentTransactionClassCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transactionClass
     * @return \PayPal\StructType\TransactionSearchRequestType
     */
    public function setTransactionClass($transactionClass = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PaymentTransactionClassCodeType::valueIsValid($transactionClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PaymentTransactionClassCodeType', is_array($transactionClass) ? implode(', ', $transactionClass) : var_export($transactionClass, true), implode(', ', \PayPal\EnumType\PaymentTransactionClassCodeType::getValidValues())), __LINE__);
        }
        $this->TransactionClass = $transactionClass;
        return $this;
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
     * @return \PayPal\StructType\TransactionSearchRequestType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @uses \PayPal\EnumType\CurrencyCodeType::valueIsValid()
     * @uses \PayPal\EnumType\CurrencyCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currencyCode
     * @return \PayPal\StructType\TransactionSearchRequestType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\CurrencyCodeType::valueIsValid($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\CurrencyCodeType', is_array($currencyCode) ? implode(', ', $currencyCode) : var_export($currencyCode, true), implode(', ', \PayPal\EnumType\CurrencyCodeType::getValidValues())), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \PayPal\EnumType\PaymentTransactionStatusCodeType::valueIsValid()
     * @uses \PayPal\EnumType\PaymentTransactionStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \PayPal\StructType\TransactionSearchRequestType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\PaymentTransactionStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\PaymentTransactionStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \PayPal\EnumType\PaymentTransactionStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TransactionSearchRequestType
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
