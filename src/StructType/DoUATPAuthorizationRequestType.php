<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoUATPAuthorizationRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: UATP card details Required
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoUATPAuthorizationRequestType extends AbstractRequestType
{
    /**
     * The UATPDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ebl:UATPDetails
     * @var \PayPal\StructType\UATPDetailsType
     */
    public $UATPDetails;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Amount to authorize. Required Limitations: Must not exceed $10,000 USD in any currency. No currency symbol. Decimal separator must be a period (.), and the thousands separator must be a comma (,).
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The TransactionEntity
     * Meta information extracted from the WSDL
     * - documentation: Type of transaction to authorize. The only allowable value is Order, which means that the transaction represents a customer order that can be fulfilled over 29 days. Optional
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionEntity;
    /**
     * The InvoiceID
     * Meta information extracted from the WSDL
     * - documentation: Invoice ID. A pass through.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceID;
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
     * Constructor method for DoUATPAuthorizationRequestType
     * @uses DoUATPAuthorizationRequestType::setUATPDetails()
     * @uses DoUATPAuthorizationRequestType::setAmount()
     * @uses DoUATPAuthorizationRequestType::setTransactionEntity()
     * @uses DoUATPAuthorizationRequestType::setInvoiceID()
     * @uses DoUATPAuthorizationRequestType::setMsgSubID()
     * @param \PayPal\StructType\UATPDetailsType $uATPDetails
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param string $transactionEntity
     * @param string $invoiceID
     * @param string $msgSubID
     */
    public function __construct(\PayPal\StructType\UATPDetailsType $uATPDetails = null, \PayPal\StructType\BasicAmountType $amount = null, $transactionEntity = null, $invoiceID = null, $msgSubID = null)
    {
        $this
            ->setUATPDetails($uATPDetails)
            ->setAmount($amount)
            ->setTransactionEntity($transactionEntity)
            ->setInvoiceID($invoiceID)
            ->setMsgSubID($msgSubID);
    }
    /**
     * Get UATPDetails value
     * @return \PayPal\StructType\UATPDetailsType
     */
    public function getUATPDetails()
    {
        return $this->UATPDetails;
    }
    /**
     * Set UATPDetails value
     * @param \PayPal\StructType\UATPDetailsType $uATPDetails
     * @return \PayPal\StructType\DoUATPAuthorizationRequestType
     */
    public function setUATPDetails(\PayPal\StructType\UATPDetailsType $uATPDetails = null)
    {
        $this->UATPDetails = $uATPDetails;
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
     * @return \PayPal\StructType\DoUATPAuthorizationRequestType
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
     * @return \PayPal\StructType\DoUATPAuthorizationRequestType
     */
    public function setTransactionEntity($transactionEntity = null)
    {
        // validation for constraint: enumeration
        if (!\PayPal\EnumType\TransactionEntityType::valueIsValid($transactionEntity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \PayPal\EnumType\TransactionEntityType', is_array($transactionEntity) ? implode(', ', $transactionEntity) : var_export($transactionEntity, true), implode(', ', \PayPal\EnumType\TransactionEntityType::getValidValues())), __LINE__);
        }
        $this->TransactionEntity = $transactionEntity;
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
     * @return \PayPal\StructType\DoUATPAuthorizationRequestType
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
     * @return \PayPal\StructType\DoUATPAuthorizationRequestType
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
}
