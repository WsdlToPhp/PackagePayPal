<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoReferenceTransactionResponseDetailsType StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DoReferenceTransactionResponseDetailsType extends AbstractStructBase
{
    /**
     * The BillingAgreementID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BillingAgreementID;
    /**
     * The PaymentInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\PaymentInfoType
     */
    public $PaymentInfo;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \PayPal\StructType\BasicAmountType
     */
    public $Amount;
    /**
     * The AVSCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AVSCode;
    /**
     * The CVV2Code
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CVV2Code;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: TransactionId - Type for a PayPal Transaction ID.
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The PaymentAdviceCode
     * Meta information extracted from the WSDL
     * - documentation: Response code from the processor when a recurring transaction is declined
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentAdviceCode;
    /**
     * The MsgSubID
     * Meta information extracted from the WSDL
     * - documentation: Return msgsubid back to merchant
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MsgSubID;
    /**
     * The PendingReason
     * Meta information extracted from the WSDL
     * - documentation: pending reason for IC+ interchange plus
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PendingReason;
    /**
     * Constructor method for DoReferenceTransactionResponseDetailsType
     * @uses DoReferenceTransactionResponseDetailsType::setBillingAgreementID()
     * @uses DoReferenceTransactionResponseDetailsType::setPaymentInfo()
     * @uses DoReferenceTransactionResponseDetailsType::setAmount()
     * @uses DoReferenceTransactionResponseDetailsType::setAVSCode()
     * @uses DoReferenceTransactionResponseDetailsType::setCVV2Code()
     * @uses DoReferenceTransactionResponseDetailsType::setTransactionID()
     * @uses DoReferenceTransactionResponseDetailsType::setPaymentAdviceCode()
     * @uses DoReferenceTransactionResponseDetailsType::setMsgSubID()
     * @uses DoReferenceTransactionResponseDetailsType::setPendingReason()
     * @param string $billingAgreementID
     * @param \PayPal\StructType\PaymentInfoType $paymentInfo
     * @param \PayPal\StructType\BasicAmountType $amount
     * @param string $aVSCode
     * @param string $cVV2Code
     * @param string $transactionID
     * @param string $paymentAdviceCode
     * @param string $msgSubID
     * @param string $pendingReason
     */
    public function __construct($billingAgreementID = null, \PayPal\StructType\PaymentInfoType $paymentInfo = null, \PayPal\StructType\BasicAmountType $amount = null, $aVSCode = null, $cVV2Code = null, $transactionID = null, $paymentAdviceCode = null, $msgSubID = null, $pendingReason = null)
    {
        $this
            ->setBillingAgreementID($billingAgreementID)
            ->setPaymentInfo($paymentInfo)
            ->setAmount($amount)
            ->setAVSCode($aVSCode)
            ->setCVV2Code($cVV2Code)
            ->setTransactionID($transactionID)
            ->setPaymentAdviceCode($paymentAdviceCode)
            ->setMsgSubID($msgSubID)
            ->setPendingReason($pendingReason);
    }
    /**
     * Get BillingAgreementID value
     * @return string|null
     */
    public function getBillingAgreementID()
    {
        return $this->BillingAgreementID;
    }
    /**
     * Set BillingAgreementID value
     * @param string $billingAgreementID
     * @return \PayPal\StructType\DoReferenceTransactionResponseDetailsType
     */
    public function setBillingAgreementID($billingAgreementID = null)
    {
        // validation for constraint: string
        if (!is_null($billingAgreementID) && !is_string($billingAgreementID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAgreementID, true), gettype($billingAgreementID)), __LINE__);
        }
        $this->BillingAgreementID = $billingAgreementID;
        return $this;
    }
    /**
     * Get PaymentInfo value
     * @return \PayPal\StructType\PaymentInfoType|null
     */
    public function getPaymentInfo()
    {
        return $this->PaymentInfo;
    }
    /**
     * Set PaymentInfo value
     * @param \PayPal\StructType\PaymentInfoType $paymentInfo
     * @return \PayPal\StructType\DoReferenceTransactionResponseDetailsType
     */
    public function setPaymentInfo(\PayPal\StructType\PaymentInfoType $paymentInfo = null)
    {
        $this->PaymentInfo = $paymentInfo;
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
     * @return \PayPal\StructType\DoReferenceTransactionResponseDetailsType
     */
    public function setAmount(\PayPal\StructType\BasicAmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get AVSCode value
     * @return string|null
     */
    public function getAVSCode()
    {
        return $this->AVSCode;
    }
    /**
     * Set AVSCode value
     * @param string $aVSCode
     * @return \PayPal\StructType\DoReferenceTransactionResponseDetailsType
     */
    public function setAVSCode($aVSCode = null)
    {
        // validation for constraint: string
        if (!is_null($aVSCode) && !is_string($aVSCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($aVSCode, true), gettype($aVSCode)), __LINE__);
        }
        $this->AVSCode = $aVSCode;
        return $this;
    }
    /**
     * Get CVV2Code value
     * @return string|null
     */
    public function getCVV2Code()
    {
        return $this->CVV2Code;
    }
    /**
     * Set CVV2Code value
     * @param string $cVV2Code
     * @return \PayPal\StructType\DoReferenceTransactionResponseDetailsType
     */
    public function setCVV2Code($cVV2Code = null)
    {
        // validation for constraint: string
        if (!is_null($cVV2Code) && !is_string($cVV2Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cVV2Code, true), gettype($cVV2Code)), __LINE__);
        }
        $this->CVV2Code = $cVV2Code;
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
     * @return \PayPal\StructType\DoReferenceTransactionResponseDetailsType
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
     * Get PaymentAdviceCode value
     * @return string|null
     */
    public function getPaymentAdviceCode()
    {
        return $this->PaymentAdviceCode;
    }
    /**
     * Set PaymentAdviceCode value
     * @param string $paymentAdviceCode
     * @return \PayPal\StructType\DoReferenceTransactionResponseDetailsType
     */
    public function setPaymentAdviceCode($paymentAdviceCode = null)
    {
        // validation for constraint: string
        if (!is_null($paymentAdviceCode) && !is_string($paymentAdviceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentAdviceCode, true), gettype($paymentAdviceCode)), __LINE__);
        }
        $this->PaymentAdviceCode = $paymentAdviceCode;
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
     * @return \PayPal\StructType\DoReferenceTransactionResponseDetailsType
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
     * Get PendingReason value
     * @return string|null
     */
    public function getPendingReason()
    {
        return $this->PendingReason;
    }
    /**
     * Set PendingReason value
     * @param string $pendingReason
     * @return \PayPal\StructType\DoReferenceTransactionResponseDetailsType
     */
    public function setPendingReason($pendingReason = null)
    {
        // validation for constraint: string
        if (!is_null($pendingReason) && !is_string($pendingReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pendingReason, true), gettype($pendingReason)), __LINE__);
        }
        $this->PendingReason = $pendingReason;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DoReferenceTransactionResponseDetailsType
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
