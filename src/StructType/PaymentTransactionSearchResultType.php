<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentTransactionSearchResultType StructType
 * Meta information extracted from the WSDL
 * - documentation: The transaction ID of the seller | PaymentTransactionSearchResultType Results from a PaymentTransaction search
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PaymentTransactionSearchResultType extends AbstractStructBase
{
    /**
     * The Timestamp
     * Meta information extracted from the WSDL
     * - documentation: The date and time (in UTC/GMT format) the transaction occurred
     * @var string
     */
    public $Timestamp;
    /**
     * The Timezone
     * Meta information extracted from the WSDL
     * - documentation: The time zone of the transaction
     * @var string
     */
    public $Timezone;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The type of the transaction
     * @var string
     */
    public $Type;
    /**
     * The Payer
     * Meta information extracted from the WSDL
     * - documentation: The email address of the payer
     * - base: xs:string
     * @var string
     */
    public $Payer;
    /**
     * The PayerDisplayName
     * Meta information extracted from the WSDL
     * - documentation: Display name of the payer
     * @var string
     */
    public $PayerDisplayName;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - ref: ns:TransactionID
     * @var string
     */
    public $TransactionID;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: The status of the transaction
     * @var string
     */
    public $Status;
    /**
     * The GrossAmount
     * Meta information extracted from the WSDL
     * - documentation: The total gross amount charged, including any profile shipping cost and taxes
     * @var \PayPal\StructType\BasicAmountType
     */
    public $GrossAmount;
    /**
     * The FeeAmount
     * Meta information extracted from the WSDL
     * - documentation: The fee that PayPal charged for the transaction
     * @var \PayPal\StructType\BasicAmountType
     */
    public $FeeAmount;
    /**
     * The NetAmount
     * Meta information extracted from the WSDL
     * - documentation: The net amount of the transaction
     * @var \PayPal\StructType\BasicAmountType
     */
    public $NetAmount;
    /**
     * Constructor method for PaymentTransactionSearchResultType
     * @uses PaymentTransactionSearchResultType::setTimestamp()
     * @uses PaymentTransactionSearchResultType::setTimezone()
     * @uses PaymentTransactionSearchResultType::setType()
     * @uses PaymentTransactionSearchResultType::setPayer()
     * @uses PaymentTransactionSearchResultType::setPayerDisplayName()
     * @uses PaymentTransactionSearchResultType::setTransactionID()
     * @uses PaymentTransactionSearchResultType::setStatus()
     * @uses PaymentTransactionSearchResultType::setGrossAmount()
     * @uses PaymentTransactionSearchResultType::setFeeAmount()
     * @uses PaymentTransactionSearchResultType::setNetAmount()
     * @param string $timestamp
     * @param string $timezone
     * @param string $type
     * @param string $payer
     * @param string $payerDisplayName
     * @param string $transactionID
     * @param string $status
     * @param \PayPal\StructType\BasicAmountType $grossAmount
     * @param \PayPal\StructType\BasicAmountType $feeAmount
     * @param \PayPal\StructType\BasicAmountType $netAmount
     */
    public function __construct($timestamp = null, $timezone = null, $type = null, $payer = null, $payerDisplayName = null, $transactionID = null, $status = null, \PayPal\StructType\BasicAmountType $grossAmount = null, \PayPal\StructType\BasicAmountType $feeAmount = null, \PayPal\StructType\BasicAmountType $netAmount = null)
    {
        $this
            ->setTimestamp($timestamp)
            ->setTimezone($timezone)
            ->setType($type)
            ->setPayer($payer)
            ->setPayerDisplayName($payerDisplayName)
            ->setTransactionID($transactionID)
            ->setStatus($status)
            ->setGrossAmount($grossAmount)
            ->setFeeAmount($feeAmount)
            ->setNetAmount($netAmount);
    }
    /**
     * Get Timestamp value
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param string $timestamp
     * @return \PayPal\StructType\PaymentTransactionSearchResultType
     */
    public function setTimestamp($timestamp = null)
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->Timestamp = $timestamp;
        return $this;
    }
    /**
     * Get Timezone value
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->Timezone;
    }
    /**
     * Set Timezone value
     * @param string $timezone
     * @return \PayPal\StructType\PaymentTransactionSearchResultType
     */
    public function setTimezone($timezone = null)
    {
        // validation for constraint: string
        if (!is_null($timezone) && !is_string($timezone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timezone, true), gettype($timezone)), __LINE__);
        }
        $this->Timezone = $timezone;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \PayPal\StructType\PaymentTransactionSearchResultType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
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
     * @return \PayPal\StructType\PaymentTransactionSearchResultType
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
     * Get PayerDisplayName value
     * @return string|null
     */
    public function getPayerDisplayName()
    {
        return $this->PayerDisplayName;
    }
    /**
     * Set PayerDisplayName value
     * @param string $payerDisplayName
     * @return \PayPal\StructType\PaymentTransactionSearchResultType
     */
    public function setPayerDisplayName($payerDisplayName = null)
    {
        // validation for constraint: string
        if (!is_null($payerDisplayName) && !is_string($payerDisplayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($payerDisplayName, true), gettype($payerDisplayName)), __LINE__);
        }
        $this->PayerDisplayName = $payerDisplayName;
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
     * @return \PayPal\StructType\PaymentTransactionSearchResultType
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
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \PayPal\StructType\PaymentTransactionSearchResultType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get GrossAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getGrossAmount()
    {
        return $this->GrossAmount;
    }
    /**
     * Set GrossAmount value
     * @param \PayPal\StructType\BasicAmountType $grossAmount
     * @return \PayPal\StructType\PaymentTransactionSearchResultType
     */
    public function setGrossAmount(\PayPal\StructType\BasicAmountType $grossAmount = null)
    {
        $this->GrossAmount = $grossAmount;
        return $this;
    }
    /**
     * Get FeeAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getFeeAmount()
    {
        return $this->FeeAmount;
    }
    /**
     * Set FeeAmount value
     * @param \PayPal\StructType\BasicAmountType $feeAmount
     * @return \PayPal\StructType\PaymentTransactionSearchResultType
     */
    public function setFeeAmount(\PayPal\StructType\BasicAmountType $feeAmount = null)
    {
        $this->FeeAmount = $feeAmount;
        return $this;
    }
    /**
     * Get NetAmount value
     * @return \PayPal\StructType\BasicAmountType|null
     */
    public function getNetAmount()
    {
        return $this->NetAmount;
    }
    /**
     * Set NetAmount value
     * @param \PayPal\StructType\BasicAmountType $netAmount
     * @return \PayPal\StructType\PaymentTransactionSearchResultType
     */
    public function setNetAmount(\PayPal\StructType\BasicAmountType $netAmount = null)
    {
        $this->NetAmount = $netAmount;
        return $this;
    }
}
