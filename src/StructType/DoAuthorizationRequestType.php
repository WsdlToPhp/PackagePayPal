<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoAuthorizationRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Address the order will be shipped to. Optional | Information about the individual purchased items
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoAuthorizationRequestType extends AbstractRequestType
{
    /**
     * The TransactionID
     * Meta informations extracted from the WSDL
     * - documentation: The value of the order’s transaction identification number returned by a PayPal product. Required Character length and limits: 19 single-byte characters maximum
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TransactionID;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: Amount to authorize. Required Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The TransactionEntity
     * Meta informations extracted from the WSDL
     * - documentation: Type of transaction to authorize. The only allowable value is Order, which means that the transaction represents a customer order that can be fulfilled over 29 days. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionEntity;
    /**
     * The ShipToAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ebl:ShipToAddress
     * @var \PayPal\StructType\AddressType
     */
    public $ShipToAddress;
    /**
     * The PaymentDetailsItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ebl:PaymentDetailsItem
     * @var \PayPal\StructType\PaymentDetailsItemType[]
     */
    public $PaymentDetailsItem;
    /**
     * The ItemTotal
     * Meta informations extracted from the WSDL
     * - documentation: Sum of cost of all items in this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency.
     * No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ItemTotal;
    /**
     * The ShippingTotal
     * Meta informations extracted from the WSDL
     * - documentation: Total shipping costs for this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No
     * currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ShippingTotal;
    /**
     * The HandlingTotal
     * Meta informations extracted from the WSDL
     * - documentation: Total handling costs for this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency. No
     * currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $HandlingTotal;
    /**
     * The TaxTotal
     * Meta informations extracted from the WSDL
     * - documentation: Sum of tax for all items in this order. You must set the currencyID attribute to one of the three-character currency codes for any of the supported PayPal currencies. Optional Limitations: Must not exceed $10,000 USD in any currency.
     * No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $TaxTotal;
    /**
     * The InsuranceTotal
     * Meta informations extracted from the WSDL
     * - documentation: Total shipping insurance costs for this order. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $InsuranceTotal;
    /**
     * The ShippingDiscount
     * Meta informations extracted from the WSDL
     * - documentation: Shipping discount for this order, specified as a negative number. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ShippingDiscount;
    /**
     * The OrderDescription
     * Meta informations extracted from the WSDL
     * - documentation: Description of items the customer is purchasing. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrderDescription;
    /**
     * The Custom
     * Meta informations extracted from the WSDL
     * - documentation: A free-form field for your own use. Optional Character length and limitations: 256 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Custom;
    /**
     * The MsgSubID
     * Meta informations extracted from the WSDL
     * - documentation: Unique id for each API request to prevent duplicate payments. Optional Character length and limits: 38 single-byte characters maximum.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MsgSubID;
    /**
     * The IPAddress
     * Meta informations extracted from the WSDL
     * - documentation: IP Address of the buyer
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IPAddress;
    /**
     * The ShipToStore
     * Meta informations extracted from the WSDL
     * - documentation: A flag indicating that this transaction is a Ship to Store transaction. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShipToStore;
    /**
     * Constructor method for DoAuthorizationRequestType
     * @uses DoAuthorizationRequestType::setTransactionID()
     * @uses DoAuthorizationRequestType::setAmount()
     * @uses DoAuthorizationRequestType::setTransactionEntity()
     * @uses DoAuthorizationRequestType::setShipToAddress()
     * @uses DoAuthorizationRequestType::setPaymentDetailsItem()
     * @uses DoAuthorizationRequestType::setItemTotal()
     * @uses DoAuthorizationRequestType::setShippingTotal()
     * @uses DoAuthorizationRequestType::setHandlingTotal()
     * @uses DoAuthorizationRequestType::setTaxTotal()
     * @uses DoAuthorizationRequestType::setInsuranceTotal()
     * @uses DoAuthorizationRequestType::setShippingDiscount()
     * @uses DoAuthorizationRequestType::setOrderDescription()
     * @uses DoAuthorizationRequestType::setCustom()
     * @uses DoAuthorizationRequestType::setMsgSubID()
     * @uses DoAuthorizationRequestType::setIPAddress()
     * @uses DoAuthorizationRequestType::setShipToStore()
     * @param string $transactionID
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param string $transactionEntity
     * @param \PayPal\StructType\AddressType $shipToAddress
     * @param \PayPal\StructType\PaymentDetailsItemType[] $paymentDetailsItem
     * @param \PayPal\StructType\BasicAmountType $itemTotal
     * @param \PayPal\StructType\BasicAmountType $shippingTotal
     * @param \PayPal\StructType\BasicAmountType $handlingTotal
     * @param \PayPal\StructType\BasicAmountType $taxTotal
     * @param \PayPal\StructType\BasicAmountType $insuranceTotal
     * @param \PayPal\StructType\BasicAmountType $shippingDiscount
     * @param string $orderDescription
     * @param string $custom
     * @param string $msgSubID
     * @param string $iPAddress
     * @param string $shipToStore
     */
    public function __construct($transactionID = null, \PayPal\StructType\BasicAmountType $amount = null, $transactionEntity = null, \PayPal\StructType\AddressType $shipToAddress = null, array $paymentDetailsItem = array(), \PayPal\StructType\BasicAmountType $itemTotal = null, \PayPal\StructType\BasicAmountType $shippingTotal = null, \PayPal\StructType\BasicAmountType $handlingTotal = null, \PayPal\StructType\BasicAmountType $taxTotal = null, \PayPal\StructType\BasicAmountType $insuranceTotal = null, \PayPal\StructType\BasicAmountType $shippingDiscount = null, $orderDescription = null, $custom = null, $msgSubID = null, $iPAddress = null, $shipToStore = null)
    {
        $this
            ->setTransactionID($transactionID)
            ->setAmount($amount)
            ->setTransactionEntity($transactionEntity)
            ->setShipToAddress($shipToAddress)
            ->setPaymentDetailsItem($paymentDetailsItem)
            ->setItemTotal($itemTotal)
            ->setShippingTotal($shippingTotal)
            ->setHandlingTotal($handlingTotal)
            ->setTaxTotal($taxTotal)
            ->setInsuranceTotal($insuranceTotal)
            ->setShippingDiscount($shippingDiscount)
            ->setOrderDescription($orderDescription)
            ->setCustom($custom)
            ->setMsgSubID($msgSubID)
            ->setIPAddress($iPAddress)
            ->setShipToStore($shipToStore);
    }
    /**
     * Get TransactionID value
     * @return string
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get Amount value
     * @return \PayPal\StructType\BasicAmountType
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \PayPal\StructType\BasicAmountType $amount
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get TransactionEntity value
     * @return string|null
     */
    public function getTransactionEntity()
    {
        return $this->TransactionEntity;
    }
    /**
     * Set TransactionEntity value
     * @uses \PayPal\EnumType\TransactionEntityType::valueIsValid()
     * @uses \PayPal\EnumType\TransactionEntityType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $transactionEntity
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setTransactionEntity($transactionEntity = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\TransactionEntityType::valueIsValid($transactionEntity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $transactionEntity, implode(', ', \PayPal\EnumType\TransactionEntityType::getValidValues())), __LINE__);
        }
        $this->TransactionEntity = $transactionEntity;
        return $this;
    }
    /**
     * Get ShipToAddress value
     * @return \PayPal\StructType\AddressType|null
     */
    public function getShipToAddress()
    {
        return $this->ShipToAddress;
    }
    /**
     * Set ShipToAddress value
     * @param \PayPal\StructType\AddressType $shipToAddress
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setShipToAddress(\PayPal\StructType\AddressType $shipToAddress = null)
    {
        $this->ShipToAddress = $shipToAddress;
        return $this;
    }
    /**
     * Get PaymentDetailsItem value
     * @return \PayPal\StructType\PaymentDetailsItemType[]|null
     */
    public function getPaymentDetailsItem()
    {
        return $this->PaymentDetailsItem;
    }
    /**
     * Set PaymentDetailsItem value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentDetailsItemType[] $paymentDetailsItem
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setPaymentDetailsItem(array $paymentDetailsItem = array())
    {
        foreach ($paymentDetailsItem as $doAuthorizationRequestTypePaymentDetailsItemItem) {
            // validation for constraint: itemType
            if (!$doAuthorizationRequestTypePaymentDetailsItemItem instanceof \PayPal\StructType\PaymentDetailsItemType) {
                throw new \InvalidArgumentException(sprintf('The PaymentDetailsItem property can only contain items of \PayPal\StructType\PaymentDetailsItemType, "%s" given', is_object($doAuthorizationRequestTypePaymentDetailsItemItem) ? get_class($doAuthorizationRequestTypePaymentDetailsItemItem) : gettype($doAuthorizationRequestTypePaymentDetailsItemItem)), __LINE__);
            }
        }
        $this->PaymentDetailsItem = $paymentDetailsItem;
        return $this;
    }
    /**
     * Add item to PaymentDetailsItem value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\PaymentDetailsItemType $item
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function addToPaymentDetailsItem(\PayPal\StructType\PaymentDetailsItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\PaymentDetailsItemType) {
            throw new \InvalidArgumentException(sprintf('The PaymentDetailsItem property can only contain items of \PayPal\StructType\PaymentDetailsItemType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentDetailsItem[] = $item;
        return $this;
    }
    /**
     * Get ItemTotal value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getItemTotal()
    {
        return $this->ItemTotal;
    }
    /**
     * Set ItemTotal value
     * @param \PayPal\StructType\BasicAmountType $itemTotal
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setItemTotal(\PayPal\StructType\BasicAmountType $itemTotal = null)
    {
        $this->ItemTotal = $itemTotal;
        return $this;
    }
    /**
     * Get ShippingTotal value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getShippingTotal()
    {
        return $this->ShippingTotal;
    }
    /**
     * Set ShippingTotal value
     * @param \PayPal\StructType\BasicAmountType $shippingTotal
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setShippingTotal(\PayPal\StructType\BasicAmountType $shippingTotal = null)
    {
        $this->ShippingTotal = $shippingTotal;
        return $this;
    }
    /**
     * Get HandlingTotal value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getHandlingTotal()
    {
        return $this->HandlingTotal;
    }
    /**
     * Set HandlingTotal value
     * @param \PayPal\StructType\BasicAmountType $handlingTotal
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setHandlingTotal(\PayPal\StructType\BasicAmountType $handlingTotal = null)
    {
        $this->HandlingTotal = $handlingTotal;
        return $this;
    }
    /**
     * Get TaxTotal value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getTaxTotal()
    {
        return $this->TaxTotal;
    }
    /**
     * Set TaxTotal value
     * @param \PayPal\StructType\BasicAmountType $taxTotal
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setTaxTotal(\PayPal\StructType\BasicAmountType $taxTotal = null)
    {
        $this->TaxTotal = $taxTotal;
        return $this;
    }
    /**
     * Get InsuranceTotal value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getInsuranceTotal()
    {
        return $this->InsuranceTotal;
    }
    /**
     * Set InsuranceTotal value
     * @param \PayPal\StructType\BasicAmountType $insuranceTotal
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setInsuranceTotal(\PayPal\StructType\BasicAmountType $insuranceTotal = null)
    {
        $this->InsuranceTotal = $insuranceTotal;
        return $this;
    }
    /**
     * Get ShippingDiscount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getShippingDiscount()
    {
        return $this->ShippingDiscount;
    }
    /**
     * Set ShippingDiscount value
     * @param \PayPal\StructType\BasicAmountType $shippingDiscount
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setShippingDiscount(\PayPal\StructType\BasicAmountType $shippingDiscount = null)
    {
        $this->ShippingDiscount = $shippingDiscount;
        return $this;
    }
    /**
     * Get OrderDescription value
     * @return string|null
     */
    public function getOrderDescription()
    {
        return $this->OrderDescription;
    }
    /**
     * Set OrderDescription value
     * @param string $orderDescription
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setOrderDescription($orderDescription = null)
    {
        // validation for constraint: string
        if (!is_null($orderDescription) && !is_string($orderDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderDescription)), __LINE__);
        }
        $this->OrderDescription = $orderDescription;
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
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setCustom($custom = null)
    {
        // validation for constraint: string
        if (!is_null($custom) && !is_string($custom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($custom)), __LINE__);
        }
        $this->Custom = $custom;
        return $this;
    }
    /**
     * Get MsgSubID value
     * @return string|null
     */
    public function getMsgSubID()
    {
        return $this->MsgSubID;
    }
    /**
     * Set MsgSubID value
     * @param string $msgSubID
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setMsgSubID($msgSubID = null)
    {
        // validation for constraint: string
        if (!is_null($msgSubID) && !is_string($msgSubID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($msgSubID)), __LINE__);
        }
        $this->MsgSubID = $msgSubID;
        return $this;
    }
    /**
     * Get IPAddress value
     * @return string|null
     */
    public function getIPAddress()
    {
        return $this->IPAddress;
    }
    /**
     * Set IPAddress value
     * @param string $iPAddress
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setIPAddress($iPAddress = null)
    {
        // validation for constraint: string
        if (!is_null($iPAddress) && !is_string($iPAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iPAddress)), __LINE__);
        }
        $this->IPAddress = $iPAddress;
        return $this;
    }
    /**
     * Get ShipToStore value
     * @return string|null
     */
    public function getShipToStore()
    {
        return $this->ShipToStore;
    }
    /**
     * Set ShipToStore value
     * @param string $shipToStore
     * @return \PayPal\StructType\DoAuthorizationRequestType
     */
    public function setShipToStore($shipToStore = null)
    {
        // validation for constraint: string
        if (!is_null($shipToStore) && !is_string($shipToStore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shipToStore)), __LINE__);
        }
        $this->ShipToStore = $shipToStore;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoAuthorizationRequestType
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
