<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentItemInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: PaymentItemInfoType Information about a PayPal item.
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentItemInfoType extends AbstractStructBase
{
    /**
     * The InvoiceID
     * Meta information extracted from the WSDL
     * - documentation: Invoice number you set in the original transaction. Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceID;
    /**
     * The Custom
     * Meta information extracted from the WSDL
     * - documentation: Custom field you set in the original transaction. Character length and limitations: 127 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Custom;
    /**
     * The Memo
     * Meta information extracted from the WSDL
     * - documentation: Memo entered by your customer in PayPal Website Payments note field. Character length and limitations: 255 single-byte alphanumeric characters
     * - minOccurs: 0
     * @var string
     */
    public $Memo;
    /**
     * The SalesTax
     * Meta information extracted from the WSDL
     * - documentation: Amount of tax charged on transaction
     * - minOccurs: 0
     * @var string
     */
    public $SalesTax;
    /**
     * The PaymentItem
     * Meta information extracted from the WSDL
     * - documentation: Details about the indivudal purchased item
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentItemType[]
     */
    public $PaymentItem;
    /**
     * The Subscription
     * Meta information extracted from the WSDL
     * - documentation: Information about the transaction if it was created via PayPal Subcriptions
     * - minOccurs: 0
     * @var \PayPal\StructType\SubscriptionInfoType
     */
    public $Subscription;
    /**
     * The Auction
     * Meta information extracted from the WSDL
     * - documentation: Information about the transaction if it was created via an auction
     * - minOccurs: 0
     * @var \PayPal\StructType\AuctionInfoType
     */
    public $Auction;
    /**
     * Constructor method for PaymentItemInfoType
     * @uses PaymentItemInfoType::setInvoiceID()
     * @uses PaymentItemInfoType::setCustom()
     * @uses PaymentItemInfoType::setMemo()
     * @uses PaymentItemInfoType::setSalesTax()
     * @uses PaymentItemInfoType::setPaymentItem()
     * @uses PaymentItemInfoType::setSubscription()
     * @uses PaymentItemInfoType::setAuction()
     * @param string $invoiceID
     * @param string $custom
     * @param string $memo
     * @param string $salesTax
     * @param \PayPal\StructType\PaymentItemType[] $paymentItem
     * @param \PayPal\StructType\SubscriptionInfoType $subscription
     * @param \PayPal\StructType\AuctionInfoType $auction
     */
    public function __construct($invoiceID = null, $custom = null, $memo = null, $salesTax = null, array $paymentItem = array(), \PayPal\StructType\SubscriptionInfoType $subscription = null, \PayPal\StructType\AuctionInfoType $auction = null)
    {
        $this
            ->setInvoiceID($invoiceID)
            ->setCustom($custom)
            ->setMemo($memo)
            ->setSalesTax($salesTax)
            ->setPaymentItem($paymentItem)
            ->setSubscription($subscription)
            ->setAuction($auction);
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
     * @return \PayPal\StructType\PaymentItemInfoType
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
     * Get Custom value
     * @return string|null
     */
    public function getCustom()
    {
        return $this->Custom;
    }
    /**
     * Set Custom value
     * @param string $custom
     * @return \PayPal\StructType\PaymentItemInfoType
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: string
        if (!is_null($custom) && !is_string($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custom, true), gettype($custom)), __LINE__);
        }
        $this->Custom = $custom;
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
     * @return \PayPal\StructType\PaymentItemInfoType
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
     * Get SalesTax value
     * @return string|null
     */
    public function getSalesTax()
    {
        return $this->SalesTax;
    }
    /**
     * Set SalesTax value
     * @param string $salesTax
     * @return \PayPal\StructType\PaymentItemInfoType
     */
    public function setSalesTax($salesTax = null)
    {
        // validation for constraint: string
        if (!is_null($salesTax) && !is_string($salesTax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salesTax, true), gettype($salesTax)), __LINE__);
        }
        $this->SalesTax = $salesTax;
        return $this;
    }
    /**
     * Get PaymentItem value
     * @return \PayPal\StructType\PaymentItemType[]|null
     */
    public function getPaymentItem()
    {
        return $this->PaymentItem;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentItemForArrayConstraintsFromSetPaymentItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentItemInfoTypePaymentItemItem) {
            // validation for constraint: itemType
            if (!$paymentItemInfoTypePaymentItemItem instanceof \PayPal\StructType\PaymentItemType) {
                $invalidValues[] = is_object($paymentItemInfoTypePaymentItemItem) ? get_class($paymentItemInfoTypePaymentItemItem) : sprintf('%s(%s)', gettype($paymentItemInfoTypePaymentItemItem), var_export($paymentItemInfoTypePaymentItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentItem property can only contain items of type \PayPal\StructType\PaymentItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PaymentItem value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentItemType[] $paymentItem
     * @return \PayPal\StructType\PaymentItemInfoType
     */
    public function setPaymentItem(array $paymentItem = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentItemArrayErrorMessage = self::validatePaymentItemForArrayConstraintsFromSetPaymentItem($paymentItem))) {
            throw new \InvalidArgumentException($paymentItemArrayErrorMessage, __LINE__);
        }
        $this->PaymentItem = $paymentItem;
        return $this;
    }
    /**
     * Add item to PaymentItem value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentItemType $item
     * @return \PayPal\StructType\PaymentItemInfoType
     */
    public function addToPaymentItem(\PayPal\StructType\PaymentItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\PaymentItemType) {
            throw new \InvalidArgumentException(sprintf('The PaymentItem property can only contain items of type \PayPal\StructType\PaymentItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PaymentItem[] = $item;
        return $this;
    }
    /**
     * Get Subscription value
     * @return \PayPal\StructType\SubscriptionInfoType|null
     */
    public function getSubscription()
    {
        return $this->Subscription;
    }
    /**
     * Set Subscription value
     * @param \PayPal\StructType\SubscriptionInfoType $subscription
     * @return \PayPal\StructType\PaymentItemInfoType
     */
    public function setSubscription(\PayPal\StructType\SubscriptionInfoType $subscription = null)
    {
        $this->Subscription = $subscription;
        return $this;
    }
    /**
     * Get Auction value
     * @return \PayPal\StructType\AuctionInfoType|null
     */
    public function getAuction()
    {
        return $this->Auction;
    }
    /**
     * Set Auction value
     * @param \PayPal\StructType\AuctionInfoType $auction
     * @return \PayPal\StructType\PaymentItemInfoType
     */
    public function setAuction(\PayPal\StructType\AuctionInfoType $auction = null)
    {
        $this->Auction = $auction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PaymentItemInfoType
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
