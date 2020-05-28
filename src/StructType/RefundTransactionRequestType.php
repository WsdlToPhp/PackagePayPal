<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundTransactionRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This holds key-value pair which merchants wants to pass it to the open wallet-PLCC processorOptional | Information about the individual details of the items to be refunded.Optional | To pass the Merchant store informationOptional
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RefundTransactionRequestType extends AbstractRequestType
{
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the transaction you are refunding. Optional Character length and limitations: 17 single-byte alphanumeric characters | TransactionId - Type for a PayPal Transaction ID.
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The PayerID
     * Meta information extracted from the WSDL
     * - documentation: Encrypted PayPal customer account identification number. Optional Character length and limitations: 127 single-byte alphanumeric characters
     * - base: xs:string
     * - maxLength: 127
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PayerID;
    /**
     * The InvoiceID
     * Meta information extracted from the WSDL
     * - documentation: Invoice number corresponding to transaction details for tracking the refund of a payment. This parameter is passed by the merchant or recipient while refunding the transaction. This parameter does not affect the business logic, it is
     * persisted in the DB for transaction reference Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceID;
    /**
     * The RefundType
     * Meta information extracted from the WSDL
     * - documentation: Type of refund you are making Required
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RefundType;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Refund amount. Amount is required if RefundType is Partial. NOTE: If RefundType is Full, do not set Amount.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The ShippingAmount
     * Meta information extracted from the WSDL
     * - documentation: Shipping amount. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $ShippingAmount;
    /**
     * The TaxAmount
     * Meta information extracted from the WSDL
     * - documentation: Tax amount. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $TaxAmount;
    /**
     * The Memo
     * Meta information extracted from the WSDL
     * - documentation: Custom memo about the refund. Optional Character length and limitations: 255 single-byte alphanumeric characters
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Memo;
    /**
     * The RetryUntil
     * Meta information extracted from the WSDL
     * - documentation: The maximum time till which refund must be tried. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RetryUntil;
    /**
     * The RefundSource
     * Meta information extracted from the WSDL
     * - documentation: The type of funding source for refund. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RefundSource;
    /**
     * The RefundAdvice
     * Meta information extracted from the WSDL
     * - documentation: Flag to indicate that the customer was already given store credit for a given transaction. This will allow us to make sure we do not double refund. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $RefundAdvice;
    /**
     * The MerchantStoreDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ebl:MerchantStoreDetails
     * @var \PayPal\StructType\MerchantStoreDetailsType
     */
    public $MerchantStoreDetails;
    /**
     * The RefundItemDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ebl:RefundItemDetails
     * @var \PayPal\StructType\InvoiceItemType[]
     */
    public $RefundItemDetails;
    /**
     * The MsgSubID
     * Meta information extracted from the WSDL
     * - documentation: Unique id for each API request to prevent duplicate payments. Optional Character length and limits: 38 single-byte characters maximum.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MsgSubID;
    /**
     * The MerchantData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ebl:MerchantData
     * @var \PayPal\StructType\MerchantDataType
     */
    public $MerchantData;
    /**
     * Constructor method for RefundTransactionRequestType
     * @uses RefundTransactionRequestType::setTransactionID()
     * @uses RefundTransactionRequestType::setPayerID()
     * @uses RefundTransactionRequestType::setInvoiceID()
     * @uses RefundTransactionRequestType::setRefundType()
     * @uses RefundTransactionRequestType::setAmount()
     * @uses RefundTransactionRequestType::setShippingAmount()
     * @uses RefundTransactionRequestType::setTaxAmount()
     * @uses RefundTransactionRequestType::setMemo()
     * @uses RefundTransactionRequestType::setRetryUntil()
     * @uses RefundTransactionRequestType::setRefundSource()
     * @uses RefundTransactionRequestType::setRefundAdvice()
     * @uses RefundTransactionRequestType::setMerchantStoreDetails()
     * @uses RefundTransactionRequestType::setRefundItemDetails()
     * @uses RefundTransactionRequestType::setMsgSubID()
     * @uses RefundTransactionRequestType::setMerchantData()
     * @param string $transactionID
     * @param string $payerID
     * @param string $invoiceID
     * @param string $refundType
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param \PayPal\StructType\BasicAmountType $shippingAmount
     * @param \PayPal\StructType\BasicAmountType $taxAmount
     * @param string $memo
     * @param string $retryUntil
     * @param string $refundSource
     * @param bool $refundAdvice
     * @param \PayPal\StructType\MerchantStoreDetailsType $merchantStoreDetails
     * @param \PayPal\StructType\InvoiceItemType[] $refundItemDetails
     * @param string $msgSubID
     * @param \PayPal\StructType\MerchantDataType $merchantData
     */
    public function __construct($transactionID = null, $payerID = null, $invoiceID = null, $refundType = null, \PayPal\StructType\BasicAmountType $amount = null, \PayPal\StructType\BasicAmountType $shippingAmount = null, \PayPal\StructType\BasicAmountType $taxAmount = null, $memo = null, $retryUntil = null, $refundSource = null, $refundAdvice = null, \PayPal\StructType\MerchantStoreDetailsType $merchantStoreDetails = null, array $refundItemDetails = array(), $msgSubID = null, \PayPal\StructType\MerchantDataType $merchantData = null)
    {
        $this
            ->setTransactionID($transactionID)
            ->setPayerID($payerID)
            ->setInvoiceID($invoiceID)
            ->setRefundType($refundType)
            ->setAmount($amount)
            ->setShippingAmount($shippingAmount)
            ->setTaxAmount($taxAmount)
            ->setMemo($memo)
            ->setRetryUntil($retryUntil)
            ->setRefundSource($refundSource)
            ->setRefundAdvice($refundAdvice)
            ->setMerchantStoreDetails($merchantStoreDetails)
            ->setRefundItemDetails($refundItemDetails)
            ->setMsgSubID($msgSubID)
            ->setMerchantData($merchantData);
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
     * @return \PayPal\StructType\RefundTransactionRequestType
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
     * Get PayerID value
     * @return string|null
     */
    public function getPayerID()
    {
        return $this->PayerID;
    }
    /**
     * Set PayerID value
     * @param string $payerID
     * @return \PayPal\StructType\RefundTransactionRequestType
     */
    public function setPayerID($payerID = null)
    {
        // validation for constraint: string
        if (!is_null($payerID) && !is_string($payerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payerID, true), gettype($payerID)), __LINE__);
        }
        // validation for constraint: maxLength(127)
        if (!is_null($payerID) && mb_strlen($payerID) > 127) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 127', mb_strlen($payerID)), __LINE__);
        }
        $this->PayerID = $payerID;
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
     * @return \PayPal\StructType\RefundTransactionRequestType
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
     * Get RefundType value
     * @return string|null
     */
    public function getRefundType()
    {
        return $this->RefundType;
    }
    /**
     * Set RefundType value
     * @uses \PayPal\EnumType\RefundType::valueIsValid()
     * @uses \PayPal\EnumType\RefundType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $refundType
     * @return \PayPal\StructType\RefundTransactionRequestType
     */
    public function setRefundType($refundType = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\RefundType::valueIsValid($refundType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\RefundType', is_array($refundType) ? implode(', ', $refundType) : var_export($refundType, true), implode(', ', \PayPal\EnumType\RefundType::getValidValues())), __LINE__);
        }
        $this->RefundType = $refundType;
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
     * @return \PayPal\StructType\RefundTransactionRequestType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get ShippingAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getShippingAmount()
    {
        return $this->ShippingAmount;
    }
    /**
     * Set ShippingAmount value
     * @param \PayPal\StructType\BasicAmountType $shippingAmount
     * @return \PayPal\StructType\RefundTransactionRequestType
     */
    public function setShippingAmount(\PayPal\StructType\BasicAmountType $shippingAmount = null)
    {
        $this->ShippingAmount = $shippingAmount;
        return $this;
    }
    /**
     * Get TaxAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param \PayPal\StructType\BasicAmountType $taxAmount
     * @return \PayPal\StructType\RefundTransactionRequestType
     */
    public function setTaxAmount(\PayPal\StructType\BasicAmountType $taxAmount = null)
    {
        $this->TaxAmount = $taxAmount;
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
     * @return \PayPal\StructType\RefundTransactionRequestType
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
     * Get RetryUntil value
     * @return string|null
     */
    public function getRetryUntil()
    {
        return $this->RetryUntil;
    }
    /**
     * Set RetryUntil value
     * @param string $retryUntil
     * @return \PayPal\StructType\RefundTransactionRequestType
     */
    public function setRetryUntil($retryUntil = null)
    {
        // validation for constraint: string
        if (!is_null($retryUntil) && !is_string($retryUntil)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retryUntil, true), gettype($retryUntil)), __LINE__);
        }
        $this->RetryUntil = $retryUntil;
        return $this;
    }
    /**
     * Get RefundSource value
     * @return string|null
     */
    public function getRefundSource()
    {
        return $this->RefundSource;
    }
    /**
     * Set RefundSource value
     * @uses \PayPal\EnumType\RefundSourceCodeType::valueIsValid()
     * @uses \PayPal\EnumType\RefundSourceCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $refundSource
     * @return \PayPal\StructType\RefundTransactionRequestType
     */
    public function setRefundSource($refundSource = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\RefundSourceCodeType::valueIsValid($refundSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\RefundSourceCodeType', is_array($refundSource) ? implode(', ', $refundSource) : var_export($refundSource, true), implode(', ', \PayPal\EnumType\RefundSourceCodeType::getValidValues())), __LINE__);
        }
        $this->RefundSource = $refundSource;
        return $this;
    }
    /**
     * Get RefundAdvice value
     * @return bool|null
     */
    public function getRefundAdvice()
    {
        return $this->RefundAdvice;
    }
    /**
     * Set RefundAdvice value
     * @param bool $refundAdvice
     * @return \PayPal\StructType\RefundTransactionRequestType
     */
    public function setRefundAdvice($refundAdvice = null)
    {
        // validation for constraint: boolean
        if (!is_null($refundAdvice) && !is_bool($refundAdvice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refundAdvice, true), gettype($refundAdvice)), __LINE__);
        }
        $this->RefundAdvice = $refundAdvice;
        return $this;
    }
    /**
     * Get MerchantStoreDetails value
     * @return \PayPal\StructType\MerchantStoreDetailsType|null
     */
    public function getMerchantStoreDetails()
    {
        return $this->MerchantStoreDetails;
    }
    /**
     * Set MerchantStoreDetails value
     * @param \PayPal\StructType\MerchantStoreDetailsType $merchantStoreDetails
     * @return \PayPal\StructType\RefundTransactionRequestType
     */
    public function setMerchantStoreDetails(\PayPal\StructType\MerchantStoreDetailsType $merchantStoreDetails = null)
    {
        $this->MerchantStoreDetails = $merchantStoreDetails;
        return $this;
    }
    /**
     * Get RefundItemDetails value
     * @return \PayPal\StructType\InvoiceItemType[]|null
     */
    public function getRefundItemDetails()
    {
        return $this->RefundItemDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setRefundItemDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefundItemDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefundItemDetailsForArrayConstraintsFromSetRefundItemDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $refundTransactionRequestTypeRefundItemDetailsItem) {
            // validation for constraint: itemType
            if (!$refundTransactionRequestTypeRefundItemDetailsItem instanceof \PayPal\StructType\InvoiceItemType) {
                $invalidValues[] = is_object($refundTransactionRequestTypeRefundItemDetailsItem) ? get_class($refundTransactionRequestTypeRefundItemDetailsItem) : sprintf('%s(%s)', gettype($refundTransactionRequestTypeRefundItemDetailsItem), var_export($refundTransactionRequestTypeRefundItemDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RefundItemDetails property can only contain items of type \PayPal\StructType\InvoiceItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RefundItemDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\InvoiceItemType[] $refundItemDetails
     * @return \PayPal\StructType\RefundTransactionRequestType
     */
    public function setRefundItemDetails(array $refundItemDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($refundItemDetailsArrayErrorMessage = self::validateRefundItemDetailsForArrayConstraintsFromSetRefundItemDetails($refundItemDetails))) {
            throw new \InvalidArgumentException($refundItemDetailsArrayErrorMessage, __LINE__);
        }
        $this->RefundItemDetails = $refundItemDetails;
        return $this;
    }
    /**
     * Add item to RefundItemDetails value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\InvoiceItemType $item
     * @return \PayPal\StructType\RefundTransactionRequestType
     */
    public function addToRefundItemDetails(\PayPal\StructType\InvoiceItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\InvoiceItemType) {
            throw new \InvalidArgumentException(sprintf('The RefundItemDetails property can only contain items of type \PayPal\StructType\InvoiceItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RefundItemDetails[] = $item;
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
     * @return \PayPal\StructType\RefundTransactionRequestType
     */
    public function setMsgSubID($msgSubID = null)
    {
        // validation for constraint: string
        if (!is_null($msgSubID) && !is_string($msgSubID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgSubID, true), gettype($msgSubID)), __LINE__);
        }
        $this->MsgSubID = $msgSubID;
        return $this;
    }
    /**
     * Get MerchantData value
     * @return \PayPal\StructType\MerchantDataType|null
     */
    public function getMerchantData()
    {
        return $this->MerchantData;
    }
    /**
     * Set MerchantData value
     * @param \PayPal\StructType\MerchantDataType $merchantData
     * @return \PayPal\StructType\RefundTransactionRequestType
     */
    public function setMerchantData(\PayPal\StructType\MerchantDataType $merchantData = null)
    {
        $this->MerchantData = $merchantData;
        return $this;
    }
}
